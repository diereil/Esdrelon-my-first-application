<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">ReroWebsite</h1>
      <ul class="flex space-x-6">
        <li><a href="#home" class="hover:text-gray-300">Home</a></li>
        <li><a href="#about" class="hover:text-gray-300">About</a></li>
        <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main>
    <!-- Hero Section -->
    <section id="home" class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
      <div class="text-center">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">
            {{ $heading }}
        </h2>
        {{ $slot }}
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">About Us</h2>
        <p class="max-w-2xl mx-auto text-gray-700">
          This is a simple homepage example. You can extend it with more sections, images, or cards. 
          TailwindCSS makes styling super easy and responsive.
        </p>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-200">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
        <p class="text-gray-700 mb-6">Feel free to reach out anytime!</p>
        <a href="mailto:info@example.com" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700">Send Email</a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white text-center py-4">
    <p>&copy; 2025 MyWebsite. All rights reserved.</p>
  </footer>

</body>
</html>
