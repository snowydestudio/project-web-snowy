<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowy Company Profile</title>
    
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'snowy-primary': '#00758f',
              'snowy-primary-hover': '#005f74',
              'snowy-light': '#e6f8fc',
              'snowy-dark': '#1a1a1a',
              'snowy-gray': '#666666',
              'snowy-bundle-light': '#f0f9ff',
            },
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
            }
          }
        }
      }
    </script>
</head>
<body>

    @include('partials.navbar')

    <main style="min-height: 70vh;">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- TAMBAHKAN KODE INI UNTUK MEMANGGIL MAIN.JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>
</html>