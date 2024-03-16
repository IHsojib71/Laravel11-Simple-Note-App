<x-layout>
    <div class="py-4">
        <div class="max-w-2xl mx-auto p-2">
            <div class="text-center mt-8">
                <span class="font-bold">Create New Note</span>

            </div>
            <form action="{{ route('note.store') }}" method="POST">
                @csrf
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                <input type="text" name="title"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Title">

                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <br>

                <label for="note" class="block mb-2 text-sm font-medium text-gray-900">Note</label>
                <textarea " rows="6" name="note"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                     placeholder="Write your note...."></textarea>
                @error('note')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div class="mt-4 text-right">
                    <a href="{{ route('note.index') }}"
                        class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Cancel</a>
                    <button type="submit"
                        class="inline-block bg-green-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Save</button>
                </div>
            </form>

        </div>



    </div>


</x-layout>
