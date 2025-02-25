<x-layout>
    <div>
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div>
            @foreach ($notes as $note)
                <div>
                    <div class="note-body">
                        {{ Str::words($note->note) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note->id) }}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note->id) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

