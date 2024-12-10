<!doctype html>
<html class="scroll-smooth">
<head>
    <link rel="icon" type="text" href="{{ asset('DecemberStyle/logo.png') }}">
    <title>decemberProject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/costume.css') }}">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="">
  {{ $slot }}
  <script src="../scripts/js/open-modals-on-init.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>