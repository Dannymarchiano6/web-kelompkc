<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    
</head>
<body>
    <div>
        <x-header>
        <div class="container mx-auto px-4 py-8">
          <h1 class="text-4xl font-bold text-gray-800">Selamat datang di Laravel + Flowbite UI</h1>
          <p class="text-gray-600 mt-4">Ini adalah contoh aplikasi yang menggunakan Laravel dan Flowbite UI untuk membuat dashboard admin yang modern dan responsif.</p>
        </div>
        </x-header>      
    </div>
    <div>
        <x-navbar>
        </x-navbar>
    </div>
    <diV>
        <x-Footer class="fixed bottom-0 w-full bg-gray-200 p-4">
        </x-footer>
    </diV>
</body>    
</html>