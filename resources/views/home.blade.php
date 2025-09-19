<x-layout>
    <x-slot name="heading">Home Page</x-slot>

    <!-- Hero Section -->
    <section class="relative py-32 text-center bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-700 text-white shadow-xl rounded-xl overflow-hidden">
        <!-- subtle gradient circles background -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full blur-3xl opacity-20 -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500 rounded-full blur-3xl opacity-20 -z-10"></div>

        <h1 class="text-6xl font-extrabold mb-6">Find Your Dream Job</h1>
        <p class="text-lg md:text-2xl mb-10 opacity-90 max-w-2xl mx-auto leading-relaxed">
            Discover thousands of opportunities with trusted companies. Start your career journey today!
        </p>
        <a href="/jobs" 
           class="bg-yellow-400 text-gray-900 font-semibold px-10 py-4 rounded-lg shadow-xl hover:bg-yellow-300 hover:scale-105 transition">
           🚀 Browse Jobs
        </a>
    </section>

    <!-- Featured Jobs Section -->
    <section class="py-20">
        <h2 class="text-4xl font-bold mb-12 text-center text-gray-900">Featured Jobs</h2>
        <div class="grid md:grid-cols-3 gap-10">
            <!-- Job Card Example -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="https://logo.clearbit.com/microsoft.com" alt="Company Logo" class="w-12 h-12 rounded-full shadow">
                    <div>
                        <h3 class="text-xl font-semibold">Frontend Developer</h3>
                        <p class="text-gray-500 text-sm">Microsoft</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Join our team to build scalable web apps with React and TailwindCSS.</p>
                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Full-Time</span>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="https://logo.clearbit.com/google.com" alt="Company Logo" class="w-12 h-12 rounded-full shadow">
                    <div>
                        <h3 class="text-xl font-semibold">UI/UX Designer</h3>
                        <p class="text-gray-500 text-sm">Google</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Design beautiful interfaces that delight millions of users worldwide.</p>
                <span class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Remote</span>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="https://logo.clearbit.com/apple.com" alt="Company Logo" class="w-12 h-12 rounded-full shadow">
                    <div>
                        <h3 class="text-xl font-semibold">Backend Engineer</h3>
                        <p class="text-gray-500 text-sm">Apple</p>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Work on scalable backend systems powering millions of Apple devices.</p>
                <span class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Hybrid</span>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-indigo-800 to-blue-900 text-white text-center rounded-xl shadow-xl">
        <h2 class="text-4xl font-bold mb-6">Contact Us</h2>
        <p class="mb-6 max-w-2xl mx-auto opacity-90">Have questions or need support? Reach out anytime.</p>
        <a href="mailto:info@example.com" 
           class="bg-yellow-400 text-gray-900 font-semibold px-8 py-3 rounded-lg shadow hover:bg-yellow-300 transition">
          📩 Send Email
        </a>
    </section>
</x-layout>
