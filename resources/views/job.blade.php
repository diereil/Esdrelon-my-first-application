<x-layout>
    <x-slot name="heading">Job Details</x-slot>

    <div class="container mx-auto py-16">
        <div class="bg-white rounded-2xl shadow-2xl p-10 max-w-2xl mx-auto text-center">
            
            <!-- Company Logo -->
            <img src="https://logo.clearbit.com/example.com" alt="Company Logo" 
                 class="w-20 h-20 mx-auto rounded-full shadow mb-6">

            <!-- Job Title -->
            <h2 class="text-3xl font-extrabold mb-4 text-gray-900">
                {{ $job->title }}
            </h2>

            <!-- Employer Name -->
            <p class="text-lg text-gray-600 mb-4">
                <strong>Employer:</strong> {{ $job->employer->name ?? 'Unknown Employer' }}
            </p>

            <!-- Job Info -->
            <p class="text-lg text-gray-700 mb-2">
                <strong>Salary:</strong> {{ $job->salary }}
            </p>
            <p class="text-lg text-gray-600 mb-6">
                <strong>Category:</strong> {{ $job->type ?? 'General' }}
            </p>

            <!-- ✅ Tags Section (correct placement inside the card) -->
            <div class="mt-4">
                <h4 class="text-sm font-semibold text-gray-700 mb-2">Tags:</h4>
                @foreach($job->tags as $tag)
                    <span class="bg-gray-100 text-gray-700 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                        {{ $tag->name }}
                    </span>
                @endforeach
            </div>

            <!-- Apply Button -->
            <a href="mailto:apply@example.com" 
               class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg font-semibold shadow hover:bg-yellow-300 transition mt-6 inline-block">
               📩 Apply Now
            </a>

            <!-- Back Button -->
            <div class="mt-6">
                <a href="/jobs" 
                   class="text-blue-600 font-semibold hover:underline">
                    ← Back to Jobs
                </a>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-indigo-800 to-blue-900 text-white text-center rounded-xl shadow-xl mt-10">
        <h2 class="text-4xl font-bold mb-6">Contact Us</h2>
        <p class="mb-6 max-w-2xl mx-auto opacity-90">Have questions or need support? Reach out anytime.</p>
        <a href="mailto:info@example.com" 
           class="bg-yellow-400 text-gray-900 font-semibold px-8 py-3 rounded-lg shadow hover:bg-yellow-300 transition">
          📩 Send Email
        </a>
    </section>
</x-layout>
