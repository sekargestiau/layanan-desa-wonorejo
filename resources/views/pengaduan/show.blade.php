<!DOCTYPE html>
<html lang="en">

<head>
    @include('pengaduan.components.head')
</head>

<body>

    @include('pengaduan.components.sidebar')

    <div class="p-4 sm:ml-64">


        <!-- Breadcrumb -->
        <nav class="justify-between px-4 py-3 text-white border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-b from-sky-600 to-green-500 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
                <li>
                    <div class="flex items-center">
                        <a href="#"
                            class="ms-1 text-xl font-medium hover:text-blue-200 dark:hover:text-white">DETAIL
                            PENGADUAN</a>
                    </div>
                </li>
            </ol>
        </nav>
        <br>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">

            <form action="/pengaduan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nik" class="block text-gray-700 font-medium mb-2">NIK <span
                            class="text-red-500">(opsional)</span></label>
                    <input type="text" id="nik" name="nik" value={{ $complaint->nik }} disabled
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" id="name" name="name" value={{ $complaint->name }}
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        disabled>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email <span
                            class="text-red-500">(opsional)</span></label>
                    <input type="email" id="email" name="email" value={{ $complaint->email }} disabled
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Telepon</label>
                    <input type="tel" id="phone" name="phone" value={{ $complaint->phone }}
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        disabled>
                </div>
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
                    <input type="text" id="title" name="title" value={{ $complaint->title }}
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                        disabled>
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah
                        Foto <span class="text-red-500">(opsional)</span></label>

                    <div class="flex gap-4">
                        @if ($fileUrls)
                            @foreach ($fileUrls as $fileUrl)
                                <img src="{{ $fileUrl }}" alt="Uploaded Image" style="max-width: 200px;">
                            @endforeach
                        @else
                            <p>Tidak ada file terlampir.</p>
                        @endif
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Isi Pengaduan</label>
                    <textarea id="message" name="message"
                        class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" rows="5"
                        disabled>{{ $complaint->message }}</textarea>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
