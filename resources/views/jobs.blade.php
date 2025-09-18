<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

    <div class="container mx-auto py-10">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Available Jobs</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" 
               class="block bg-white rounded-xl shadow-md p-6 
                      hover:bg-blue-600 hover:shadow-2xl hover:-translate-y-1 
                      transform transition duration-300">
                
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold text-gray-800 hover:text-white">
                        {{ $job['title'] }}
                    </h3>
                    <span class="text-sm font-semibold text-gray-600 hover:text-white">
                        {{ $job['salary'] }}
                    </span>
                </div>
                
                <p class="mb-4 text-gray-700 hover:text-white">
                    We are hiring a {{ $job['type'] }} professional to join our team.
                </p>
                
                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold 
                             hover:bg-white hover:text-blue-900">
                    {{ $job['type'] }}
                </span>
            </a>
            @endforeach
        </div>
    </div>
</x-layout>
