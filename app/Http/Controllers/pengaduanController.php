<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengaduan;

class pengaduanController extends Controller
{
    public function index()
    {
        $title = 'Pengaduan';
        return view('pengaduan.index', compact('title'));
    }
    public function stats()
    {
        $title = 'Statistik Pengaduan';
        $totalComplaints = Pengaduan::count();
        $totalPending = Pengaduan::where('status', 0)->count();
        $totalInProcess = Pengaduan::where('status', 1)->count();
        $totalCompleted = Pengaduan::where('status', 2)->count();
        return view('pengaduan.admin.stats', compact('title', 'totalComplaints', 'totalPending', 'totalInProcess', 'totalCompleted'));
    }

    public function show_all(Request $request)
    {
        $pengaduan = Pengaduan::all();
        $title = 'Pengaduan Desa Wonorejo';
        $query = Pengaduan::query();

        if ($request->has('category')) {
            $searchCategory = $request->category;
            $searchTerm = $request->search;

            if ($searchCategory === 'all') {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('title', 'LIKE', "%{$searchTerm}%")
                        ->orWhere('name', 'LIKE', "%{$searchTerm}%");
                });
            } elseif ($searchCategory === 'name') {
                $query->where('name', 'LIKE', "%{$searchTerm}%");
            } elseif ($searchCategory === 'judul') {
                $query->where('title', 'LIKE', "%{$searchTerm}%");
            }
        }

        $pengaduan = $query->paginate(10);
        return view('pengaduan.admin.index', compact('title', 'pengaduan',));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'file_input.*' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'message' => 'required|string',
        ]);

        $filePaths = [];
        if ($request->hasFile('file_input')) {
            foreach ($request->file('file_input') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('pengaduan', $fileName, 'public');
                $filePaths[] = $filePath;
            }
        }

        $complaint = Pengaduan::create([
            'nik' => $validatedData['nik'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'title' => $validatedData['title'],
            'file_paths' => json_encode($filePaths),
            'message' => $validatedData['message'],
        ]);
        return redirect('/pengaduan')->with('success', 'Pengaduan berhasil dikirim!');
    }

    public function show($id)
    {
        $complaint = Pengaduan::findOrFail($id);
        $fileUrls = [];
        $title = 'Pengaduan';

        if ($complaint->file_paths) {
            $filePaths = json_decode($complaint->file_paths, true);
            foreach ($filePaths as $filePath) {
                $fileUrls[] = Storage::url($filePath);
            }
        }

        return view('pengaduan.show', compact('complaint', 'fileUrls', 'title'));
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $filePaths = json_decode($pengaduan->file_paths, true);
        foreach ($filePaths as $filePath) {
            $fullFilePath = storage_path('app/public/' . $filePath);
            if (file_exists($fullFilePath)) {
                unlink($fullFilePath);
            } else {
                echo "File does not exist: " . $fullFilePath;
            }
        }
        $pengaduan->delete();
        return redirect('/pengaduan/admin')->with('success', 'Pengaduan deleted successfully');
    }




    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|integer',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = $request->status;
        $pengaduan->save();
        return redirect('/pengaduan/admin')->with('success', 'Status pengaduan updated successfully');
    }

    public function export_data(Request $request)
    {
        $pengaduan = Pengaduan::all();
        $fileName = 'pengaduan_' . date('Y-m-d_H-i-s') . '.csv';
        $handle = fopen($fileName, 'w+');
        fputcsv($handle, array('NIK', 'Nama', 'Email', 'Telepon', 'Judul', 'Message', 'Status', 'Tanggal'));
        foreach ($pengaduan as $row) {
            fputcsv($handle, array(
                $row['nik'],
                $row['name'],
                $row['email'],
                $row['phone'],
                $row['title'],
                $row['message'],
                $row['status'],
                $row['created_at'],
            ));
        }

        fclose($handle);
        $headers = array('Content-Type' => 'text/csv');
        return response()->download($fileName, $fileName, $headers)->deleteFileAfterSend(true);
    }
}
