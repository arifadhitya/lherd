<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
</head>
<body class="h-full">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <x-navbar></x-navbar>
  <x-header>{{ $title }}</x-header>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html>