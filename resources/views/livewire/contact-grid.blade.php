<div>
    <div class="container row pt-5 d-flex align-self-center justify-content-between ">
        @forelse($contacts as $contact)
            @livewire('contact-grid-item', ['contact' => $contact])
        @empty
            <p class="text-muted">No Contacts to display.
                <button class="btn btn-link">Add one</button>
            </p>
        @endforelse
    </div>
</div>
