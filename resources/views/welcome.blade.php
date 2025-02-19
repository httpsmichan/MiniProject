<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    </head>
    <body class="h-screen flex items-center justify-center" style="background-image: url('{{ asset('media/totoro.jpg') }}'); background-size: cover; background-position: center;">

        <div class="absolute top-4 left-4 space-x-4">
            <a href="{{ route('login') }}" class="px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-800 transition">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-800 transition">Signup</a>
        </div>
    </body>
</html>
