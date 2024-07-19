<!DOCTYPE html>
<html lang="en">
<head>
   @include('map.components.head')
</head>
<body>
 
@include('map.components.sidebar')

 <div class="p-4 sm:ml-64">
   

     <button class="bg-blue-200 hover:bg-blue-300 font-bold text-blue-600 px-3 py-2 rounded-md mb-6"> Tambah Data </button>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-black uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Dusun
                </th>
                <th scope="col" class="px-6 py-3">
                    RW
                </th>
                <th scope="col" class="px-6 py-3">
                    RT
                </th>
                <th scope="col" class="px-6 py-3">
                    Koordinat
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Blimbing
                </th>
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    -7.42142, 118.2321
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium bg-blue-200 px-5 py-2 hover:bg-blue-300 rounded-lg text-blue-600 dark:text-blue-500 ">Edit</a>
                </td>
            </tr>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Blimbing
                </th>
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    -7.42142, 118.2321
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium bg-blue-200 px-5 py-2 hover:bg-blue-300 rounded-lg text-blue-600 dark:text-blue-500 ">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

 </div>
 
</body>
</html>