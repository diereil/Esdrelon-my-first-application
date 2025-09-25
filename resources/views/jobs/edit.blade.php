<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="mt-6">
            <label class="block">Title</label>
            <input type="text" name="title" value="{{ $job->title }}"
                   class="border p-2 w-full" required>
            @error('title')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6">
            <label class="block">Salary</label>
            <input type="text" name="salary" value="{{ $job->salary }}"
                   class="border p-2 w-full" required>
            @error('salary')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6 flex justify-between">
            <button type="submit" class="bg-indigo-600 text-white px-3 py-2 rounded">
                Update
            </button>

            <button form="delete-form" class="text-red-500">
                Delete
            </button>
        </div>
    </form>

    <!-- Delete form -->
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
