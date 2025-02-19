<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Login</h2>

        @if ($errors->any())
            <div class="text-red-500 mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
            </div>

            <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-500 focus:outline-none">Login</button>
        </form>
    </div>

</body>
</html>
