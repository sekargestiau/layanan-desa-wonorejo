<!DOCTYPE html>
<html lang="en">

<head>
    @include('pengaduan.components.head')
    <script>
        function updateStatus(form) {
            form.submit();
        }
    </script>
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
                            class="ms-1 text-xl font-medium hover:text-blue-200 dark:hover:text-white">STATISTIK
                            PENGADUAN</a>
                    </div>
                </li>
            </ol>
        </nav>
        {{-- asdasd --}}
        <div class="grid gap-2 lg:gap-4 md:grid-cols-4 p-1 pt-10">
            <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-lg font-bold text-gray-500 dark:text-gray-400">
                        <span>Total Pengaduan</span>
                    </div>

                    <div class="text-3xl dark:text-gray-100">
                        {{ $totalComplaints }}
                    </div>
                </div>
            </div>

            <div class="relative p-6 rounded-2xl bg-red-500 shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-lg font-bold text-white dark:text-gray-400">
                        <span>Belum Diproses</span>
                    </div>

                    <div class="text-3xl text-white dark:text-gray-100">
                        {{ $totalPending }}
                    </div>
                </div>

            </div>

            <div class="relative p-6 rounded-2xl bg-blue-500 shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-lg font-bold text-white dark:text-gray-400">

                        <span>Diproses</span>
                    </div>
                    <div class="text-3xl text-white dark:text-gray-100">
                        {{ $totalInProcess }}
                    </div>
                </div>
            </div>
            <div class="relative p-6 rounded-2xl bg-green-500 shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-lg font-bold text-white dark:text-gray-400">
                        <span>Selesai</span>
                    </div>
                    <div class="text-3xl text-white dark:text-gray-100">
                        {{ $totalCompleted }}
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
