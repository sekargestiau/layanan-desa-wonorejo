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
        <a href="/posyandu/remaja" class="ms-1 text-xl font-medium">Pendataan Pasien - Posyandu Remaja</a>
      </div>
    </li>
  </ol>
</nav>

<div class="bg-white p-6 rounded-lg shadow-md">
  <form action="{{ url('posyandu/remaja/store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Pemeriksaan dilakukan di: </h3>
        <select name="nama_posyandu" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_posyandu" required>
            <option value="">Pilih Posyandu</option>
            <option value="Posyandu 1 Anggrek - Njetis" {{ old('nama_posyandu') == 'Posyandu 1 Anggrek - Njetis' ? 'selected' : '' }}>Posyandu 1 Anggrek - Njetis</option>
            <option value="Posyandu 2 Flamboyan - Sayangan" {{ old('nama_posyandu') == 'Posyandu 2 Flamboyan - Sayangan' ? 'selected' : '' }}>Posyandu 2 Flamboyan - Sayangan</option>
            <option value="Posyandu 3 Riya - Wonorejo" {{ old('nama_posyandu') == 'Posyandu 3 Riya - Wonorejo' ? 'selected' : '' }}>Posyandu 3 Riya - Wonorejo</option>
            <option value="Posyandu 4 Melati - Blimbing 4" {{ old('nama_posyandu') == 'Posyandu 4 Melati - Blimbing 4' ? 'selected' : '' }}>Posyandu 4 Melati - Blimbing 4</option>
            <option value="Posyandu 5 Dahlia - Blimbing 5" {{ old('nama_posyandu') == 'Posyandu 5 Dahlia - Blimbing 5' ? 'selected' : '' }}>Posyandu 5 Dahlia - Blimbing 5</option>
            <option value="Posyandu 6 Mawar - Blimbing 6" {{ old('nama_posyandu') == 'Posyandu 6 Mawar - Blimbing 6' ? 'selected' : '' }}>Posyandu 6 Mawar - Blimbing 6</option>
            <option value="Posyandu 7 Cempaka - Perum Persada Hijau" {{ old('nama_posyandu') == 'Posyandu 7 Cempaka - Perum Persada Hijau' ? 'selected' : '' }}>Posyandu 7 Cempaka - Perum Persada Hijau</option>
        </select>
        @error('nama_posyandu')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <h3 class="text-lg font-semibold mt-0">Hasil periksa</h3>
        <h4 class="text-sm text-gray-800 mb-2">Gunakan tanda titik (.) untuk angka desimal. Contoh: 120.5</h4>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nama" id="nama" type="text" value="{{ old('nama') }}" required>
            @error('nama')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nik">NIK</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nik" id="nik" type="text" value="{{ old('nik') }}" required>
                @error('nik')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
    <div class="mb-4">    
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">Tanggal Lahir</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal_lahir" id="tanggal_lahir" type="date" value="{{ old('tanggal_lahir') }}" required>
        @error('tanggal_lahir')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="rt">RT</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rt" id="rt" type="number" value="{{ old('rt') }}" required>
                </div>
                @error('rt')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="rw">RW</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rw" id="rw" type="number" value="{{ old('rw') }}" required>
                </div>
                @error('rw')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br>
    <div class="mb-4">
        <p class="text-gray-700 text-sm font-bold mb-2">Dukuh</p>
        <select name="dukuh" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dukuh" required>
            <option value="">Pilih Dukuh</option>
            <option value="Jetis" {{ old('dukuh') == 'Jetis' ? 'selected' : '' }}>Jetis</option>
            <option value="Sayangan" {{ old('dukuh') == 'Sayangan' ? 'selected' : '' }}>Sayangan</option>
            <option value="Wonorejo" {{ old('dukuh') == 'Wonorejo' ? 'selected' : '' }}>Wonorejo</option>
            <option value="Blimbing" {{ old('dukuh') == 'Blimbing' ? 'selected' : '' }}>Blimbing</option>
            <option value="Bangunrejo" {{ old('dukuh') == 'Bangunrejo' ? 'selected' : '' }}>Bangunrejo</option>
            <option value="Bancakan" {{ old('dukuh') == 'Bancakan' ? 'selected' : '' }}>Bancakan</option>
            <option value="Tegalan" {{ old('dukuh') == 'Tegalan' ? 'selected' : '' }}>Tegalan</option>
        </select>
        @error('dukuh')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">Tanggal Pemeriksaan</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tanggal" id="tanggal" type="date" value="{{ old('tanggal') }}" required>
        @error('tanggal')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="berat_badan">Berat Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="berat_badan" id="berat_badan" type="number" step="any" value="{{ old('berat_badan') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">kg</span>
            </div>
            @error('berat_badan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tinggi_badan">Tinggi Badan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tinggi_badan" id="tinggi_badan" type="number" step="any" value="{{ old('tinggi_badan') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
            @error('tinggi_badan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lingkar_perut">Lingkar Perut</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="lingkar_perut" id="lingkar_perut" type="number" step="any" value="{{ old('lingkar_perut') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
            @error('lingkar_perut')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lingkar_lengan">Lingkar Lengan</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="lingkar_lengan" id="lingkar_lengan" type="number" step="any" value="{{ old('lingkar_lengan') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">cm</span>
            </div>
            @error('lingkar_lengan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tensi_darah_sistolik">Tensi Darah</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tensi_darah_sistolik" id="tensi_darah_sistolik" type="number" step="any" value="{{ old('tensi_darah_sistolik') }}" required>
                    <span class="bg-white-200 px-3 py-2 text-black-700">/</span>
                </div>
                @error('tensi_darah_sistolik')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-white text-sm font-bold mb-2" for="tensi_darah_diastolik">Tensi Darah</label>
                <div class="flex items-center">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tensi_darah_diastolik" id="tensi_darah_diastolik" type="number" step="any" value="{{ old('tensi_darah_diastolik') }}" required>
                    <span class="bg-white-200 px-3 py-2 text-white-700">mmHg</span>
                </div>
                @error('tensi_darah_diastolik')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="hb">Hemoglobin (Hb)</label>
            <div class="flex items-center">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="hb" id="hb" type="number" step="any" value="{{ old('hb') }}" required>
                <span class="bg-white-200 px-3 py-2 text-black-700">g/dL</span>
            </div>
            @error('hb')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br>
    <div class="mb-4">
        <p class="text-gray-700 text-sm font-bold mb-2">Status Anemia</p>
        <select name="status_anemia" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status_anemia" required>
            <option value="">Pilih Status Anemia</option>
            <option value="Anemia" {{ old('status_anemia') == 'Anemia' ? 'selected' : '' }}>Anemia</option>
            <option value="Tidak Anemia" {{ old('status_anemia') == 'Tidak Anemia' ? 'selected' : '' }}>Tidak Anemia</option>
        </select>
        @error('status_anemia')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="keterangan_lain">Keterangan Lain</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="keterangan_lain" id="keterangan_lain" required>{{ old('keterangan_lain') }}</textarea>
        @error('keterangan_lain')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
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
          Submit Data
      </button>
    </div>
</form>

</div>




 </div>
 
</body>
</html>