<x-app-layout>

    <div class="flex w-10/12 justify-between mx-auto mt-5">
        <h1 class="text-white text-2xl">Update Note</h1>
    </div>

    <div class="flex w-10/12 bg-slate-700 single-note mx-auto mt-5 text-white rounded-lg ">
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body rounded-lg focus:outline focus:outline-offset-2 outline-violet-500" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="text-white  text-sm bg-gray-600 px-3 py-1 rounded-md hover:bg-gray-700">Cancel</a>
                <button class="text-white  text-sm bg-violet-500 px-3 py-1 rounded-md hover:bg-violet-400">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>