<x-layout>
    <div class="px-6 pt-4 pb-2">
        <a href="{{ route('note.index') }}"
            class="inline-block bg-black rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Back</a>
        <a href="{{ route('note.edit', $note->id) }}"
            class="inline-block bg-green-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Edit</a>
        <form action="{{ route('note.destroy', $note->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Delete</button>
        </form>
    </div>


    <div class="text-justify p-4">
        <span class="text-4xl">{{ $note->title }} {{ $note->created_at }}</span>

        <p>
            {{ $note->note }}
        </p>
    </div>


</x-layout>
