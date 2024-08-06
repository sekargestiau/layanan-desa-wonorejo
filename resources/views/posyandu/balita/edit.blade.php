<!DOCTYPE html>
<html lang="en">
<head>
   @include('posyandu.components.head')
</head>
<body>
 
@include('posyandu.components.sidebar')

 <div class="p-4 sm:ml-64">
 

<!-- Breadcrumb -->
<nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700" aria-label="Breadcrumb">
  <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
    <li>
      <div class="flex items-center">
        <a href="/posyandu/balita" class="ms-1 text-xl font-medium">Pendataan Pasien - Posyandu Balita</a>
      </div>
    </li>
  </ol>
</nav>

<div class="bg-white p-6 rounded-lg shadow-md">
  <!-- Mengubah action URL dan method -->
  <form action="{{ url('posyandu/balita/update/' . $balita->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Menandakan update -->
    
    <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Pemeriksaan dilakukan di: </h3>
        <select name="nama_posyandu" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_posyandu">
            <option value="">Pilih Posyandu</option>
            @foreach($posyanduOptions as $option)
                <option value="{{ $option }}" {{ $option === $balita->nama_posyandu ? 'selected' : '' }}>{{ $option }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold mt-0">Hasil periksa</h3>
        <h4 class="text-sm text-gray-800 mb-2">Gunakan tanda titik (.) untuk angka desimal. Contoh: 120.5</h4>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama" id="nama" type="text" value="{{ $balita->nama }}">
      </div>
    </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nik">NIK</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nik" id="nik" type="text" value="{{ $balita->nik }}" required>
            </div>
    <div class="mb-4">   
      <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="umur_tahun">Umur</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="umur_tahun" id="umur_tahun" type="number" value="{{ $balita->umur_tahun }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">tahun</span>
            </div>
        </div>
        <div>
            <label class="block text-white text-sm font-bold mb-2" for="umur_bulan">Umur</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="umur_bulan" id="umur_bulan" type="number" value="{{ $balita->umur_bulan }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">bulan</span>
            </div>
        </div>
    </div>
    <br>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_ortu">Nama Orang Tua</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama_ortu" id="nama_ortu" type="text" value="{{ $balita->nama_ortu }}">
      </div>
      <div class="grid grid-cols-2 gap-4">    
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rt">RT</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rt" id="rt" type="number" value="{{ $balita->rt }}">
            </div>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rw">RW</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rw" id="rw" type="number" value="{{ $balita->rw }}">
            </div>
        </div>
    </div>
    <br>
    <div class="mb-4">
        <p class="text-gray-700 text-sm font-bold mb-2">Dukuh</p>
        <select name="dukuh" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dukuh">
            <option value="">Pilih Dukuh</option>
            @foreach($dukuhOptions as $option)
                <option value="{{ $option }}" {{ $option === $balita->dukuh ? 'selected' : '' }}>{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">Tanggal</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal" id="tanggal" type="date" value="{{ date('Y-m-d', strtotime($balita->tanggal)) }}">
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="berat_badan">Berat Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="berat_badan" id="berat_badan" type="number" step="any" value="{{ $balita->berat_badan }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">kg</span>
            </div>
        </div>
    </div>
    <br>
    
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tinggi_badan">Tinggi Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tinggi_badan" id="tinggi_badan" type="number" step="any" value="{{ $balita->tinggi_badan }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lingkar_kepala">Lingkar Kepala</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="lingkar_kepala" id="lingkar_kepala" type="number" step="any" value="{{ $balita->lingkar_kepala }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lingkar_lengan">Lingkar Lengan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="lingkar_lengan" id="lingkar_lengan" type="number" step="any" value="{{ $balita->lingkar_lengan }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
        </div>
    </div>
    <br>
    <div class="mb-4">
        <h3 class="text-gray-700 text-sm font-bold mb-2">Status Stunting</h3>
        <select name="status_stunting" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status_stunting">
            <option value="">Pilih Status Perokok</option>
            @foreach($stuntingOptions as $option2)
                <option value="{{ $option2 }}" {{ $option2 === $balita->status_stunting ? 'selected' : '' }}>{{ $option2 }}</option>
            @endforeach
        </select>
    </div>    
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="keterangan_lain">Keterangan lain</label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="keterangan_lain" id="keterangan_lain" rows="4">{{ $balita->keterangan_lain }}</textarea>
    </div>

    <div style="text-align: right; margin-top: 20px;">
      <button type="submit" 
          style="
          background: linear-gradient(to bottom right, #4ade80, #3b82f6);
          color: black;
          font-weight: 500;
          padding: 10px 20px;
          border: none;
          border-radius: 8px;
          cursor: pointer;
          font-size: 16px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          transition: all 0.3s ease;"
          onmouseover="this.style.background='linear-gradient(to bottom left, #4ade80, #3b82f6)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.2)';"
          onmouseout="this.style.background='linear-gradient(to bottom right, #4ade80, #3b82f6)'; this.style.boxShadow='0 2px 4px rgba(0, 0, 0, 0.1)';">
          Update Data
      </button>
    </div>

  </form>
</div>

 </div>
 
</body>
</html>
