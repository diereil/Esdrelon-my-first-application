<x-layout>
    <x-slot name="title">Jobs Page</x-slot>

    <!-- Hero Banner -->
    <section class="relative py-20 text-center bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-700 text-white shadow-xl rounded-xl mb-16">
        <h2 class="text-5xl font-extrabold mb-6">Available Jobs</h2>
        <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
            Explore thousands of job opportunities and find the right one for you.
        </p>
    </section>

    <!-- Jobs Grid -->
    <div class="container mx-auto pb-20">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" 
               class="block bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl hover:-translate-y-1 transform transition">
                
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Placeholder logo (replace with company logo if available) -->
                    <img src="https://logo.clearbit.com/example.com" alt="Company Logo" class="w-12 h-12 rounded-full shadow">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $job['title'] }}</h3>
                        <p class="text-gray-500 text-sm">Company Name</p>
                    </div>
                </div>

                <p class="text-gray-600 mb-4">
                    We are hiring a <strong>{{ $job['type'] }}</strong> professional to join our team.
                </p>

                <div class="flex justify-between items-center">
                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-medium">
                        {{ $job['type'] }}
                    </span>
                    <span class="text-lg font-bold text-gray-800">{{ $job['salary'] }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>

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
