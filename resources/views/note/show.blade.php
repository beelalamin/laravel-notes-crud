<x-app-layout>
    <div class="flex w-10/12 justify-between mx-auto mt-5">
        <h1 class="text-white text-xl">Note Created: {{ $note->created_at->diffForHumans() }}</h1>

        <div class="note-buttons">
            <a href="{{ route('note.edit', $note) }}" class="text-white  text-sm bg-blue-600 px-3 py-1 rounded-md hover:bg-blue-700">Edit</a>
            <form action="{{ route('note.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-white  text-sm bg-red-600 px-3 py-1 rounded-md hover:bg-red-400">Delete</button>
            </form>
        </div>
    </div>
    <div class="flex w-10/12 justify-between mx-auto pb-5">
        <div class="note flex w-10/12 bg-slate-700 single-note mx-auto p-5 mt-5 text-white rounded-lg ">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>
