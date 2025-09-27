<x-layout>
    <h1 class="text-2xl font-bold mb-6">Edit Job</h1>

    <form action="{{ route('jobs.update', $job->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div>
            <label for="title" class="block font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" 
                   value="{{ old('title', $job->title) }}"
                   class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <!-- Salary -->
        <div>
            <label for="salary" class="block font-medium text-gray-700">Salary</label>
            <input type="text" name="salary" id="salary"
                   value="{{ old('salary', $job->salary) }}"
                   class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <!-- Employer -->
        <div>
            <label for="employer_id" class="block font-medium text-gray-700">Employer</label>
            <select name="employer_id" id="employer_id" 
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @foreach($employers as $employer)
                    <option value="{{ $employer->id }}" 
                        {{ $job->employer_id == $employer->id ? 'selected' : '' }}>
                        {{ $employer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Tags -->
        <div>
            <label for="tags" class="block font-medium text-gray-700">Tags</label>
            <select name="tags[]" id="tags" multiple
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" 
                        {{ $job->tags->contains($tag->id) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Submit -->
        <div>
            <button type="submit" 
                    class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow hover:bg-indigo-500">
                Update Job
            </button>
        </div>
    </form>

    <!-- ✅ Delete Button -->
    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="mt-6"
          onsubmit="return confirm('Are you sure you want to delete this job?')">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="bg-red-600 text-white px-6 py-2 rounded-lg shadow hover:bg-red-500">
            Delete Job
        </button>
    </form>
</x-layout>
