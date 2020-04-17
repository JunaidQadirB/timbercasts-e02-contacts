<div class="container mt-5">
    <div class="table-responsive">
        <table class="table bg-white">
            <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($contacts as $contact)
                @livewire('contact-list-item', ['contact' => $contact])
            @empty
                <p class="text-muted">No Contacts to display.
                    <button class="btn btn-link">Add one</button>
                </p>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
