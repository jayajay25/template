<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} | Laravel 8</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        {{ $styles }}
    </head>
    <body>
    <x-navbar></x-navbar>
    <div class="pt-4">
      {{ $slot }}  
    </div> 
    <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
        