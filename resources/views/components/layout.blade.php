<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'ReroWebsite' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-blue-800 to-indigo-900 text-white shadow-lg fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <a href="/" class="text-2xl font-extrabold tracking-wide hover:text-yellow-400 transition">
            ReroWebsite
        </a>

        <!-- Navigation -->
        <ul class="flex space-x-8 text-lg">
            <li>
                <a href="/" 
                   class="transition duration-300 hover:text-yellow-300 {{ request()->is('/') ? 'text-yellow-400 font-bold underline underline-offset-4' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="/jobs" 
                   class="transition duration-300 hover:text-yellow-300 {{ request()->is('jobs') ? 'text-yellow-400 font-bold underline underline-offset-4' : '' }}">
                    Jobs
                </a>
            </li>
        
        </ul>

        <!-- Button -->
        <div>
            <a href="#contact" 
               class="bg-yellow-400 text-gray-900 font-semibold px-4 py-2 rounded-lg shadow hover:bg-yellow-300 transition">
               Get in Touch
            </a>
        </div>
    </div>
  </nav>

  <!-- Content -->
  <main class="pt-24 container mx-auto px-6">
      {{ $slot }}
  </main>

</body>
</html>
