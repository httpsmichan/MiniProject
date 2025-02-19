<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Input Fields -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
            </div>

            <div class="mt-4">
                <p class="text-gray-700">Select Role:</p>
                <label class="inline-flex items-center mr-4">
                    <input type="radio" name="role" value="job_seeker" required class="form-radio text-blue-600">
                    <span class="ml-2">Job Seeker</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="role" value="recruiter" required class="form-radio text-blue-600">
                    <span class="ml-2">Recruiter</span>
                </label>
            </div>

            <button type="submit" class="w-full bg-black text-white p-2 mt-6 rounded-md hover:bg-gray-500 focus:outline-none">Register</button>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Already have an account? Login</a>
        </div>
    </div>

</body>
</html>
