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
        <a href="/posyandu/lansia" class="ms-1 text-xl font-medium">Pendataan Pasien - Posyandu Lansia</a>
      </div>
    </li>
  </ol>
</nav>

<div class="bg-white p-6 rounded-lg shadow-md">
  <!-- Mengubah action URL dan method -->
  <form action="{{ url('posyandu/lansia/update/' . $lansia->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Menandakan update -->
    
    <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Pemeriksaan dilakukan di: </h3>
        <select name="nama_posyandu" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_posyandu">
            <option value="">Pilih Posyandu</option>
            @foreach($posyanduOptions as $option)
                <option value="{{ $option }}" {{ $option === $lansia->nama_posyandu ? 'selected' : '' }}>{{ $option }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold mt-0">Hasil periksa</h3>
        <h4 class="text-sm text-gray-800 mb-2">Gunakan tanda titik (.) untuk angka desimal. Contoh: 120.5</h4>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama" id="nama" type="text" value="{{ $lansia->nama }}">
      </div>
    </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nik">NIK</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nik" id="nik" type="text" value="{{ $lansia->nik }}" required>
            </div>
    <div class="mb-4">   
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">Tanggal Lahir</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal_lahir" id="tanggal_lahir" type="date" value="{{ $lansia->tanggal_lahir }}" required>
    </div>
    </div>
        <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rt">RT</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rt" id="rt" type="number" value="{{ $lansia->rt }}">
            </div>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rw">RW</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rw" id="rw" type="number" value="{{ $lansia->rw }}">
            </div>
        </div>
        </div>
    </div>
    <div class="mb-4">
        <p class="text-gray-700 text-sm font-bold mb-2">Dukuh</p>
        <select name="dukuh" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dukuh">
            <option value="">Pilih Dukuh</option>
            @foreach($dukuhOptions as $option)
                <option value="{{ $option }}" {{ $option === $lansia->dukuh ? 'selected' : '' }}>{{ $option }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">Tanggal Pemeriksaan</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal" id="tanggal" type="date" value="{{ date('Y-m-d', strtotime($lansia->tanggal)) }}">
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="berat_badan">Berat Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="berat_badan" id="berat_badan" type="number" step="any" value="{{ $lansia->berat_badan }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">kg</span>
            </div>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tinggi_badan">Tinggi Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tinggi_badan" id="tinggi_badan" type="number" step="any" value="{{ $lansia->tinggi_badan }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tensi_darah_sistolik">Tensi Darah</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tensi_darah_sistolik" id="tensi_darah_sistolik" type="number" step="any" value="{{ $lansia->tensi_darah_sistolik }}">
                    <span class="bg-white-200 px-3 py-2 text-black-700">/</span>
                </div>
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="tensi_darah_diastolik">Tensi Darah</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tensi_darah_diastolik" id="tensi_darah_diastolik" type="number" step="any" value="{{ $lansia->tensi_darah_diastolik }}">
                    <span class="bg-white-200 px-3 py-2 text-white-700">mmHg</span>
                </div>
            </div>
    </div>
    <br>    
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="gula_darah">Gula Darah</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="gula_darah" id="gula_darah" type="number" step="any" value="{{ $lansia->gula_darah }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">mg/dL</span>
            </div>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kolesterol">Kolesterol</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="kolesterol" id="kolesterol" type="number" step="any" value="{{ $lansia->kolesterol }}">
                <span class="bg-white-200 px-3 py-2 text-black-700">mg/dL</span>
            </div>
        </div>
    </div>
    <br>
    <div class="mb-4">
        <h3 class="text-gray-700 text-sm font-bold mb-2">Aktivitas Olahraga</h3>
        <select name="aktivitas_olahraga" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="aktivitas_olahraga">
            <option value="">Pilih Aktivitas Olahraga</option>
            @foreach($aktivitasOptions as $option2)
                <option value="{{ $option2 }}" {{ $option2 === $lansia->aktivitas_olahraga ? 'selected' : '' }}>{{ $option2 }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="keterangan_lain">Keterangan lain</label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="keterangan_lain" id="keterangan_lain" rows="4">{{ $lansia->keterangan_lain }}</textarea>
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
