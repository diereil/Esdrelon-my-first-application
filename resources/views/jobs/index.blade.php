<x-layout>
    <x-slot name="title">Jobs Page</x-slot>

    <!-- Hero Banner -->
    <section class="relative py-20 text-center bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-700 text-white shadow-xl rounded-xl mb-16">
        <h2 class="text-5xl font-extrabold mb-6">🚀 Available Jobs</h2>
        <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
            Discover your next career move with modern opportunities tailored for you.
        </p>

        <!-- Create Job Button -->
        <div class="mt-8">
            <a href="{{ route('jobs.create') }}"
               class="inline-block bg-gradient-to-r from-green-500 to-green-400 px-8 py-3 text-white font-bold rounded-lg shadow-lg hover:scale-105 transition">
                ➕ Create Job
            </a>
        </div>
    </section>

    <!-- Jobs Grid -->
    <div class="container mx-auto pb-20">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($jobs as $job)
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-2 p-6 flex flex-col justify-between border border-gray-100">

                    <!-- Header -->
                    <div class="flex items-center space-x-4 mb-6">
                        <!-- ✅ Company logo with fallback -->
                        <img src="{{ $job->employer->logo 
                                    ? asset('storage/' . $job->employer->logo) 
                                    : asset('images/default-logo.png') }}" 
                             alt="Company Logo" 
                             class="w-14 h-14 rounded-full object-contain border bg-gray-50 p-1 shadow-sm">

                        <div>
                            <h3 class="text-lg font-bold text-gray-900">{{ $job->title }}</h3>
                            <p class="text-gray-500 text-sm">
                                {{ $job->employer->name ?? 'Unknown Employer' }}
                            </p>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We are hiring a <strong class="text-indigo-600">{{ $job->type ?? 'Professional' }}</strong> to join our team.
                    </p>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        @forelse($job->tags as $tag)
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-medium px-3 py-1 rounded-full">
                                #{{ $tag->name }}
                            </span>
                        @empty
                            <span class="bg-gray-100 text-gray-500 text-xs font-medium px-3 py-1 rounded-full">
                                No tags
                            </span>
                        @endforelse
                    </div>

                    <!-- Footer -->
                    <div class="flex justify-between items-center mt-auto">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-medium">
                            {{ $job->type ?? 'General' }}
                        </span>
                        <span class="text-lg font-bold text-gray-800">
                            {{ $job->salary ?? 'Negotiable' }}
                        </span>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between items-center mt-6 pt-4 border-t border-gray-200">
                        <a href="{{ route('jobs.show', $job->id) }}" 
                           class="text-indigo-600 hover:text-indigo-800 font-medium">👀 View</a>

                        <a href="{{ route('jobs.edit', $job->id) }}" 
                           class="text-green-600 hover:text-green-800 font-medium">✏️ Edit</a>

                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this job?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">🗑 Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">🚫 No jobs available at the moment.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $jobs->withQueryString()->links() }}
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-indigo-800 to-blue-900 text-white text-center rounded-xl shadow-xl mt-20">
        <h2 class="text-4xl font-bold mb-6">📩 Contact Us</h2>
        <p class="mb-6 max-w-2xl mx-auto opacity-90">Have questions or need support? Reach out anytime.</p>
        <a href="mailto:info@example.com" 
           class="bg-yellow-400 text-gray-900 font-semibold px-10 py-4 rounded-lg shadow-lg hover:scale-105 transition">
          Send Email
        </a>
    </section>
</x-layout>
