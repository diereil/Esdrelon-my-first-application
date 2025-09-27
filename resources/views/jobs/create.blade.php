<x-layout>
    <h1 class="text-2xl font-bold mb-6">Create a New Job</h1>

    <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow">
        @csrf

        <!-- Title -->
        <div>
            <label for="title" class="block font-semibold mb-1">Title</label>
            <input type="text" name="title" id="title" 
                class="w-full border border-gray-300 rounded-lg px-3 py-2"
                placeholder="e.g., Software Engineer" required>
        </div>

        <!-- Salary -->
        <div>
            <label for="salary" class="block font-semibold mb-1">Salary</label>
            <input type="text" name="salary" id="salary" 
                class="w-full border border-gray-300 rounded-lg px-3 py-2"
                placeholder="$50,000 Per Year" required>
        </div>

        <!-- Employer -->
        <div>
            <label for="employer_id" class="block font-semibold mb-1">Employer</label>
            <select name="employer_id" id="employer_id" 
                class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
                <option value="">-- Select Employer --</option>
                @foreach($employers as $employer)
                    <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tags -->
        <div>
            <label for="tags" class="block font-semibold mb-1">Tags</label>
            <select name="tags[]" id="tags" multiple
                class="w-full border border-gray-300 rounded-lg px-3 py-2">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <p class="text-sm text-gray-500">Hold Ctrl (Windows) or Command (Mac) to select multiple tags.</p>
        </div>

        <!-- Submit -->
        <button type="submit" 
            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
            Create Job
        </button>
    </form>
</x-layout>
