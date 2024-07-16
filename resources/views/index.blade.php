@extends('layouts.main')
@section('title','POSYANDU DESA WONOREJO')

@section('container')

<!-- Pendataan Pasien Section Start -->
<section id="pendataan-pasien" class="py-24 bg-gray-100">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <!-- Header Tabs -->
      <div class="flex mb-4 rounded-t-lg overflow-hidden">
        <button id="tab-balita" class="flex-1 py-2 px-4 bg-cyan-400 text-white font-semibold" onclick="showForm('balita')">Balita</button>
        <button id="tab-remaja" class="flex-1 py-2 px-4 bg-green-400 text-white font-semibold" onclick="showForm('remaja')">Remaja</button>
        <button id="tab-lansia" class="flex-1 py-2 px-4 bg-purple-400 text-white font-semibold" onclick="showForm('lansia')">Lansia</button>
      </div>
      
      <!-- Form Content -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
          <div class="flex justify-end mb-4">
            <button class="px-3 py-1 text-sm text-purple-600 hover:text-purple-800">Cek</button>
            <span class="mx-1 text-gray-300">|</span>
            <button class="px-3 py-1 text-sm text-purple-600 hover:text-purple-800">Download</button>
          </div>

          <div id="form-balita" class="form-content">
            <!-- Form Balita -->
            <form>
              <div class="mb-4">
                <label for="pemeriksaan" class="block mb-2 text-sm font-medium text-gray-700">Pemeriksaan dilakukan di :</label>
                <select id="pemeriksaan" class="w-full p-2 border rounded-md bg-gray-50">
                  <option>Pilih tempat</option>
                </select>
              </div>
              
              <h3 class="font-bold mb-4 text-gray-700">Hasil periksa</h3>
              
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="nama" class="block mb-1 text-sm font-medium text-gray-700">Nama</label>
                  <input type="text" id="nama" class="w-full p-2 border rounded-md bg-gray-50">
                </div>
                <div class="row-span-4">
                  <label for="keterangan" class="block mb-1 text-sm font-medium text-gray-700">Keterangan lain</label>
                  <textarea id="keterangan" rows="9" class="w-full p-2 border rounded-md bg-gray-50"></textarea>
                </div>
                <div>
                  <label for="nik" class="block mb-1 text-sm font-medium text-gray-700">NIK</label>
                  <input type="text" id="nik" class="w-full p-2 border rounded-md bg-gray-50">
                </div>
                <div>
                  <label for="tanggal" class="block mb-1 text-sm font-medium text-gray-700">Tanggal</label>
                  <input type="date" id="tanggal" class="w-full p-2 border rounded-md bg-gray-50">
                </div>
                <div>
                  <label for="berat" class="block mb-1 text-sm font-medium text-gray-700">Berat badan</label>
                  <div class="flex">
                    <input type="number" id="berat" class="w-full p-2 border rounded-l-md bg-gray-50">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-l-0 rounded-r-md">
                      kg
                    </span>
                  </div>
                </div>
                <div>
                  <label for="tinggi" class="block mb-1 text-sm font-medium text-gray-700">Tinggi badan</label>
                  <div class="flex">
                    <input type="number" id="tinggi" class="w-full p-2 border rounded-l-md bg-gray-50">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-l-0 rounded-r-md">
                      cm
                    </span>
                  </div>
                </div>
                <div>
                  <label for="lingkar-kepala" class="block mb-1 text-sm font-medium text-gray-700">Lingkar kepala</label>
                  <div class="flex">
                    <input type="number" id="lingkar-kepala" class="w-full p-2 border rounded-l-md bg-gray-50">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-l-0 rounded-r-md">
                      cm
                    </span>
                  </div>
                </div>
                <div>
                  <label for="lingkar-lengan" class="block mb-1 text-sm font-medium text-gray-700">Lingkar lengan</label>
                  <div class="flex">
                    <input type="number" id="lingkar-lengan" class="w-full p-2 border rounded-l-md bg-gray-50">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-l-0 rounded-r-md">
                      cm
                    </span>
                  </div>
                </div>
              </div>
              
              <div class="mt-6 text-center">
                <button type="submit" class="px-6 py-2 bg-cyan-400 text-white rounded-full font-semibold hover:bg-cyan-500 transition duration-300">Setor</button>
              </div>
            </form>
          </div>

          <div id="form-remaja" class="form-content hidden">
            <!-- Form Remaja -->
            <form>
              <div class="mb-4">
                <label for="pemeriksaan" class="block mb-2 text-sm font-medium text-gray-700">Pemeriksaan dilakukan di :</label>
                <select id="pemeriksaan" class="w-full p-2 border rounded-md bg-gray-50">
                  <option>Pilih tempat</option>
                </select>
              </div>
              
              <h3 class="font-bold mb-4 text-gray-700">Hasil periksa</h3>
              
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="nama" class="block mb-1 text-sm font-medium text-gray-700">Nama</label>
                  <input type="text" id="nama" class="w-full p-2 border rounded-md bg-gray-50">
                </div>
                <div class="row-span-4">
                  <label for="keterangan" class="block mb-1 text-sm font-medium text-gray-700">Keterangan lain</label>
                  <textarea id="keterangan" rows="9" class="w-full p-2 border rounded-md bg-gray-50"></textarea>
                </div>
                <div>
                  <label for="umur" class="block mb-1 text-sm font-medium text-gray-700">Umur</label>
                  <input type="text" id="umur" class="w-full p-2 border rounded-md bg-gray-50">
                </div>
                <div>
                  <label for="tanggal" class="block mb-1 text-sm font-medium text-gray-700">Tanggal</label>
                  <input type="date" id="tanggal" class="w-full p-2 border rounded-md bg-gray-50">
                </div>
                <div>
                  <label for="berat" class="block mb-1 text-sm font-medium text-gray-700">Berat badan</label>
                  <div class="flex">
                    <input type="number" id="berat" class="w-full p-2 border rounded-l-md bg-gray-50">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-l-0 rounded-r-md">
                      kg
                    </span>
                  </div>
                </div>
                <div>
                  <label for="tinggi" class="block mb-1 text-sm font-medium text-gray-700">Tinggi badan</label>
                  <div class="flex">
                    <input type="number" id="tinggi" class="w-full p-2 border rounded-l-md bg-gray-50">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-l-0 rounded-r-md">
                      cm
                    </span>
                  </div>
                </div>
                <div>
                  <label for="lingkar-kepala" class="block mb-1 text-sm font-medium text-gray-700">Lingkar kepala</label>
                  <div class="flex">
                    <input type="number" id="lingkar-kepala" class="w-full p-2 border rounded


@endsection
