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
                        <a href="{{ route('note.show', $note->id) }}"
                            class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Show</a>
                        <a href="{{ route('note.edit', $note->id) }}"
                            class="inline-block bg-green-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Edit</a>
                        <form action="{{ route('note.destroy', $note->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <h6>No Notes Found!</h6>
            @endforelse


        </div>
        <div class="p-4 flex justify-center">
            {{ $notes->links() }}
        </div>
    </div>

</x-layout>
