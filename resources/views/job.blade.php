<x-layout>
    <x-slot name="heading">
        Job Details
    </x-slot>

    <div class="container mx-auto py-10">
        <div class="bg-white rounded-xl shadow-lg p-8 max-w-lg mx-auto 
                    hover:bg-green-600 hover:shadow-2xl hover:-translate-y-1 
                    transform transition duration-300">
            
            <h2 class="text-2xl font-bold mb-4 text-gray-800 hover:text-white">
                {{ $job['title'] }}
            </h2>
            <p class="mb-2 text-gray-700 hover:text-white">
                <strong>Salary:</strong> {{ $job['salary'] }}
            </p>
            <p class="mb-6 text-gray-600 hover:text-white">
                <strong>Category:</strong> {{ $job['type'] }}
            </p>

            <a href="/jobs" 
               class="inline-block text-blue-600 hover:text-white font-semibold hover:underline">
                ← Back to Jobs
            </a>
        </div>
    </div>
</x-layout>
