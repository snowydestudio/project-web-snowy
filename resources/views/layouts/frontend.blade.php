<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowy Company Profile</title>
    
    <!-- Memanggil file style.css dari folder public -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>
<body>

    <!-- 1. Memanggil bagian Navbar dari folder partials -->
    @include('partials.navbar')

    <!-- 2. Area Konten Utama (Berubah-ubah sesuai halaman) -->
    <main style="min-height: 70vh;">
        @yield('content')
    </main>

    <!-- 3. Memanggil bagian Footer dari folder partials -->
    @include('partials.footer')

</body>
</html>