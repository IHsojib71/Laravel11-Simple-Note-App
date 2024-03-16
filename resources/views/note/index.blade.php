<x-layout>

    <div class="container mx-auto my-4">


        <div class="text-right m-5">
            <a href="{{ route('note.create') }}"
                class="inline-block bg-black rounded-full px-6 py-1  text-sm font-semibold text-white  my-4">Create</a>
        </div>
        <div class="grid grid-cols-4 gap-4">
            @forelse ($notes as $note)
                <div class="rounded-lg overflow-hidden shadow-lg bg-yellow-500 m-5">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $note->title }}</div>
                        <p class="text-gray-700 text-base text-justify">
                            {{ Str::words($note->note, 40, '...') }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">View</span>
                        <span
                            class="inline-block bg-green-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Edit</span>
                        <span
                            class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Delete</span>
                    </div>
                </div>
            @empty
                <h6>No Notes Found!</h6>
            @endforelse


        </div>
        <div class="p-4">
            {{ $notes->links() }}
        </div>
    </div>

</x-layout>
