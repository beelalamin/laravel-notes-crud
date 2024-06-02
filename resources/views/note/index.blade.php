<x-app-layout>
    <div class="flex w-10/12 justify-between mx-auto mt-5">

        <h1 class="text-white text-2xl"> All Notes</h1>
        <a href="{{ route('note.create') }}" class="text-white text-md bg-violet-600 px-4 py-1 rounded-md hover:bg-violet-500">
            Add Note
        </a>
    </div>

    <div class="flex w-9/12 justify-start mx-auto mt-5 flex-wrap">
        @foreach ($notes as $note)
            <a href="{{ route('note.show', $note) }}">

                <div class="note m-2 w-72 rounded-lg bg-slate-700 hover:bg-slate-600">
                    <div class="note-body text-white text-md pt-3 pr-4 pl-4 pb-3">
                        {{ Str::words($note->note, 30) }}

                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.edit', $note) }}"
                            class="text-white  text-xs bg-blue-600 px-3 py-1 rounded-md hover:bg-blue-400">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="text-white text-xs bg-red-600 px-3 py-1 rounded-md hover:bg-red-400">Delete</button>
                        </form>
                    </div>
                </div>
            </a>
        @endforeach

        <div class="pagination-links mb-5 w-full flex justify-center mt-3">

            {{ $notes->links()}}
        </div>

    </div>
</x-app-layout>
