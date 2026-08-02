<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snowy Company Profile</title>
    
    <!-- FontAwesome (Dibutuhkan untuk icon di About) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
    
    <!-- LUBANG UNTUK CSS KHUSUS HALAMAN -->
    @stack('styles')
</head>
<body>

    @include('partials.navbar')

    <main style="min-height: 70vh;">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    
    <!-- LUBANG UNTUK JS KHUSUS HALAMAN -->
    @stack('scripts')

</body>
</html>