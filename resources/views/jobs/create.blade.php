<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <h2 class="text-lg font-semibold">Create a New Job</h2>

            <div class="mt-6">
                <label class="block">Title</label>
                <input type="text" name="title" id="title"
                       class="border p-2 w-full" placeholder="Shift Leader" required>
                @error('title')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <label class="block">Salary</label>
                <input type="text" name="salary" id="salary"
                       class="border p-2 w-full" placeholder="$50,000 Per Year" required>
                @error('salary')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-x-6">
            <a href="/jobs" class="text-gray-600">Cancel</a>
            <button type="submit"
                class="bg-indigo-600 px-3 py-2 text-white rounded hover:bg-indigo-500">
                Save
            </button>
        </div>
    </form>
</x-layout>
