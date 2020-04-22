<div class="card border-0 col-12 col-md-6 col-lg-3 mx-2 my-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><img src="{{asset('img/contact.png')}}"
                                    class="img-thumbnail rounded-circle mb-2"
                                    style="width: 40px!important"
                                    alt="John Doe"/> {{$contact->fullName}}</h5>
        <p class="card-text text-muted"><i class="fa fa-envelope mr-1"></i> {{$contact->email}}</p>
        <p class="card-text text-muted"><i
                class="fa fa-phone mr-1"></i>{{$contact->number}}</p>
        @livewire('contact-actions', ['id' => $contact->id, 'name' => $contact->fullName])
    </div>
</div>
