<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 min-h-screen flex">

  <aside class="w-64 bg-gray-800 text-black p-5 flex flex-col justify-between min-h-screen">
    <div>
      <h1 class="text-3xl font-bold mb-2">University of Cats</h1>
      <h2 class="text-lg font-semibold mb-6">Admin Panel</h2>
      <nav>
        <ul>
          <li class="mb-3">
            <a href="{{ route('admin.dashboard') }}" class="block p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition">
              📊 Dashboard
            </a>
          </li>
          <li class="mb-3">
            <a href="{{ route('admin.students.index') }}" class="block p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition">
              🎓 Student Information
            </a>
          </li>
          <li class="mb-3">
            <a href="{{ route('admin.announcements.index') }}" class="block p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition">
              📢 School Announcements
            </a>
          </li>
          <li class="mb-3">
            <a href="{{ route('admin.calendar.index') }}" class="block p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition">
              📅 School Calendar
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <form method="POST" action="{{ route('logout') }}" class="mt-auto">
      @csrf
      <button type="submit" class="w-full p-3 bg-red-500 text-black rounded-lg hover:bg-red-600 transition">
        🚪 Logout
      </button>
    </form>
  </aside>


  <main class="flex-1 p-6">
    @yield('content')
  </main>

</body>
</html>
