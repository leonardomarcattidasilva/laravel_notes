<div class="row mt-1">
    <div class="col">
        <div class="card p-4">
        <div class="row">
            <div class="col">
                <h4 class="text-info">{{$note['title']}}</h4>
                <small class="text-secondary">
                    <span class="opacity-75 me-2">Created at:</span><strong>{{strftime('%d/%m/%Y - %H:%M', strtotime($note['created_at']))}}</strong>
                    @if($note['updated_at'] && $note['created_at'] != $note['updated_at'])
                        <span class="opacity-75 mx-2">Updated at:</span><strong>{{strftime('%d/%m/%Y - %H:%M', strtotime($note['updated_at']))}}</strong>
                    @endif
                </small>
            </div>
            <div class="col text-end">
                <a href="{{route('editNote', ['id' => Crypt::encrypt($note['id'])])}}" class="btn btn-outline-secondary btn-sm mx-1"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{route('confirmDeleteNote', ['id' => Crypt::encrypt($note['id'])])}}" class="btn btn-outline-danger btn-sm mx-1"><i class="fa-regular fa-trash-can"></i></a>
            </div>
        </div>
        <hr>
        <p class="text-secondary">{{$note['text']}}</p>
        </div>
    </div>
</div>
