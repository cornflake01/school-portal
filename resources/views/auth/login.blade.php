<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900">

    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-white text-center mb-6">Admin Login</h2>

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <!-- Email Input -->
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 rounded bg-white text-black focus:outline-none" required>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 rounded bg-white text-black focus:outline-none" required>
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full p-2 bg-yellow-500 text-black font-bold rounded hover:bg-yellow-600">
                Login
            </button>
        </form>
    </div>

</body>
</html>
