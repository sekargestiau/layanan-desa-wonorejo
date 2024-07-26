<!DOCTYPE html>
<html>
<head>
    <title>Detail Pengaduan</title>
</head>
<body>
    <h1>Detail Pengaduan</h1>

    <p><strong>NIK:</strong> {{ $complaint->nik }}</p>
    <p><strong>Nama:</strong> {{ $complaint->name }}</p>
    <p><strong>Email:</strong> {{ $complaint->email }}</p>
    <p><strong>Telepon:</strong> {{ $complaint->phone }}</p>
    <p><strong>Judul:</strong> {{ $complaint->title }}</p>
    <p><strong>Pesan:</strong> {{ $complaint->message }}</p>

    @if ($fileUrls)
        <p><strong>File Terlampir:</strong></p>
        @foreach ($fileUrls as $fileUrl)
            <p><a href="{{ $fileUrl }}" target="_blank">Lihat File</a></p>
            <img src="{{ $fileUrl }}" alt="Uploaded Image" style="max-width: 200px;">
        @endforeach
    @else
        <p>Tidak ada file terlampir.</p>
    @endif
</body>
</html>
