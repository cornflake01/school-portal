<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <aside class="w-64 bg-slate-900 text-white p-5 flex flex-col justify-between min-h-screen">
    <div>
      <div class="flex items-center mb-2">
        <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="h-11 w-11 mr-2">
        <h1 class="text-3xl font-bold">University of Cats</h1>
    </div>
    <h2 class="text-lg font-poppins mb-6">Admin Panel</h2>
      <nav>
        <ul>
          <li class="mb-3">
            <a href="{{ route('admin.dashboard') }}" class="block p-3 bg-teal-950 rounded-lg hover:bg-gray-600 transition">
               Dashboard
            </a>
          </li>
          <li class="mb-3">
            <a href="{{ route('admin.students.index') }}" class="block p-3 bg-teal-950 rounded-lg hover:bg-gray-600 transition">
               Student Information
            </a>
          </li>
          <li class="mb-3">
            <a href="{{ route('admin.announcements.index') }}" class="block p-3 bg-teal-950 rounded-lg hover:bg-gray-600 transition">
               School Announcements
            </a>
          </li>
          <li class="mb-3">
            <a href="{{ route('admin.calendar.index') }}" class="block p-3 bg-teal-950 rounded-lg hover:bg-gray-600 transition">
               School Calendar
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <form method="POST" action="{{ route('logout') }}" class="mt-auto">
      @csrf
      <button type="submit" class="w-full p-3 bg-sky-900 text-white rounded-lg hover:bg-black-600 transition">
        Logout
      </button>
    </form>
  </aside>


  <main class="flex-1 p-6">
    @yield('content')
  </main>

</body>
</html>
