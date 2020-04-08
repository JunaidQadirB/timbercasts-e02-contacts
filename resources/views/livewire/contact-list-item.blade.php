<div>
    <tr>
        <td scope="row"><img src="{{asset('img/contact.png')}}"
                             class="img-thumbnail rounded-circle py-0 my-0 mr-1"
                             style="width: 40px!important" alt="John Doe"/>
            <button class="btn btn-link p-0">{{$contact->fullName}}</button>
        </td>
        <td class="text-muted">{{$contact->email}}</td>
        <td class="text-muted">{{$contact->number}}</td>
        <td>
            <div class="d-flex justify-content-end mt-2">
                <button class="btn btn-sm btn-link" title="Edit"><i class="fas fa-pen"></i></button>
                <button class="btn btn-sm btn-link text-danger" title="Delete"><i
                        class="fas fa-trash"></i>
                </button>
                <button class="btn btn-sm btn-link text-secondary" title="Share"><i
                        class="fas fa-share"></i>
                </button>
            </div>
        </td>
    </tr>
</div>
