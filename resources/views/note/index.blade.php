<x-layout>
    <div class="note-container">
        <a href="{{route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($note as $note)
                <div class="note">
                    <div class="note-body">
                        //return only the 30 words of the note
                        {{Str::words($note -> note,30) }}
                    </div>
                  <div class="note-buttons">
                      <a href="{{route('note.show', $note)}}" class="note-edit-button">View</a>
                      <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                      <a href="{{route('note.destroy', $note)}}" class="note-delete-button">Delete</a>
                  </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
