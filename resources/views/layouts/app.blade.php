<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex h-screen">

    <!-- Sidebar -->
    <aside class="w-60 bg-white shadow-md h-full flex flex-col justify-between">
        <div>
            <h4 class="text-sm font-semibold text-center py-4 border-b">Job Recruitment & Hiring</h4>
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}" class="block py-3 px-6 text-gray-700 hover:bg-gray-200">Dashboard</a>
                <a href="{{ route('services') }}" class="block py-3 px-6 text-gray-700 hover:bg-gray-200">Services</a>
                <a href="{{ route('contact') }}" class="block py-3 px-6 text-gray-700 hover:bg-gray-200">Contact Us</a>
            </nav>
        </div>

        <!-- User Info & Logout -->
        <div class="border-t p-4">
            <p class="font-medium">{{ Auth::user()->name }}</p>
            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="w-full text-left text-white bg-black py-2 px-4 rounded-md hover:bg-gray-500 text-sm">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>

</body>
</html>
