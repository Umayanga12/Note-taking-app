<x-layout>
    <div>
        <h1>Index</h1>
    </div>
    <div class="note-container">
        <a href="{{route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        //return only the 30 words of the note
                        {{Str::words($note -> note,30) }}
                    </div>
                  <div class="note-buttons">
                      <a href="{{route('note.show', $note)}}" class="show-note-btn">View</a>
                      <a href="{{route('note.edit', $note)}}" class="edit-note-btn">Edit</a>
                      <a href="{{route('note.delete', $note)}}" class="delete-note-btn">Delete</a>
                  </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
