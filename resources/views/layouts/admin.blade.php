<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Koi University Admin Dashboard</title>
</head>

<body class="relative w-full h-screen bg-cover bg-center bg-fixed" style="background-image: url('/images/koi-bg.jpg');">
  <div class="flex h-full">
    <!-- Sidebar -->
    <aside class="w-64 bg-white text-black p-5 flex flex-col justify-between min-h-screen">
      <div>
        <div class="flex items-center mb-8">
          <img src="{{ asset('images/koi-logo.png') }}" alt="University Logo" class="h-13 w-11 mr-3">
          <h1 class="text-lg text-orange-950 font-poppins font-bold">Koi University</h1>
        </div>
        <h2 class="text-sm font-medium italic font-poppins mb-6">Admin Panel</h2>
        <nav>
          <ul>
            <li class="mb-3">
              <a href="{{ route('admin.dashboard') }}" class="block p-3 font-poppins font-medium bg-orange-400 rounded-lg hover:bg-orange-700 transition">
                Dashboard
              </a>
            </li>
            <li class="mb-3">
              <a href="{{ route('admin.students.index') }}" class="block p-3 font-poppins font-medium bg-orange-400 rounded-lg hover:bg-orange-700 transition">
                Student Information
              </a>
            </li>
            <li class="mb-3">
              <a href="{{ route('admin.announcements.index') }}" class="block p-3 font-poppins font-medium bg-orange-400 rounded-lg hover:bg-orange-700 transition">
                School Announcements
              </a>
            </li>
            <li class="mb-3">
              <a href="{{ route('admin.events.index') }}" class="block p-3 font-poppins font-medium bg-orange-400 rounded-lg hover:bg-orange-700 transition">
                School Calendar
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <form method="POST" action="{{ route('logout') }}" class="mt-auto">
        @csrf
        <button type="submit" class="w-full p-3 bg-orange-900 font-poppins font-medium text-white rounded-lg hover:bg-black transition">
          Logout
        </button>
      </form>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center">
      @yield('content')
    </main>
  </div>
</body>
</html>
