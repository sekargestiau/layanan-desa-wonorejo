@if ($errors->any())
        @include('agenda.components.error')
    @endif
    @if (session('success'))
        @include('agenda.components.success')
    @endif