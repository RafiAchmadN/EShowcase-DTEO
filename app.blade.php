<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>DTEO Project Exhibition</title>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  {{-- CSS utama DTEO --}}
  <link rel="stylesheet" href="{{ asset('css/dteo.css') }}">
  @stack('styles')
</head>
<body>



{{-- Konten tiap halaman dimasukkan di sini --}}
@yield('content')

{{-- JS utama DTEO --}}
<script src="{{ asset('js/dteo.js') }}"></script>
@stack('scripts')
</body>
</html>
