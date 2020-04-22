<div>
    <div class="d-flex justify-content-center">
        <a href="{{route('contact.edit', $contactId)}}" class="btn btn-sm btn-link" title="Edit"><i class="fas fa-pen"></i></a>
        <button x-on:click="confirmDelete({{$contactId}},'{{$name}}')" class="btn btn-sm btn-link text-danger" title="Delete"><i
                class="fas fa-trash"></i>
        </button>
        <button class="btn btn-sm btn-link text-secondary" title="Share"><i
                class="fas fa-share"></i>
        </button>
    </div>
</div>
