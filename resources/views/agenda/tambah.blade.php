@extends('agenda.components.main')

@section('content')
<div class="container mt-5">
    <nav class="justify-between px-4 py-3 text-black border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gradient-to-r from-cyan-500 to-blue-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 dark:border-gray-700 text-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-2 rtl:space-x-reverse sm:mb-0">
          <li>
            <div class="flex items-center">
              <a href="/agenda" class="ms-1 text-2xl font-semibold text-white">Agenda Kegiatan Desa</a>
            </div>
          </li>
        </ol>
    </nav>

</div>
@endsection
