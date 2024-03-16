<x-layout>
    <div class="py-4">
        <div class="max-w-2xl mx-auto">
            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>

            <input type="text" name="price" id="price"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Title">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Note</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Write your note...."></textarea>

            <div class="mt-4 text-right">
                <a href="{{ route('note.index') }}" class="bg-red-500 px-8 py-2 rounded-lg text-white mr-2">Cancel</a>
                <button type="submit" class="bg-green-500 px-8 py-2 rounded-lg text-white">Save</button>
            </div>
        </div>



    </div>


</x-layout>
