<div x-data="contactsApp()">
    <div class="form-group w-50 mx-auto my-5">
        <input wire:model="searchQuery" wire:keydown.enter="search" type="text" class="form-control" name="search"
               id="search" aria-describedby="searchHelp"
               placeholder="Search contact by name, email or number">
        <small id="searchHelp" class="form-text text-muted"></small>
    </div>

    {{--    Toolbar    --}}
    <div class="d-flex justify-content-end">
        <div class="btn-group btn-group-sm btn-group-toggle mr-3" data-toggle="buttons">
            <a href="{{route('contact.create')}}" class="btn btn-success" title="Add a contact"><i class="fas fa-plus"></i></a>
        </div>
        <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-primary @if($viewMode=='list') active @endif" title="Display as a list">
                <input wire:click="toggleView('list')" type="radio" name="options" id="option1" autocomplete="off"/> <i
                    class="fas fa-list"></i>
            </label>
            <label class="btn btn-outline-primary @if($viewMode=='grid') active @endif" title="Display as a grid">
                <input wire:click="toggleView('grid')" type="radio" name="options" id="option2" autocomplete="off"/> <i
                    class="fa fa-th-large"></i>
            </label>
        </div>
    </div>

    @livewire('contact-list',['contacts' => $contacts, 'viewMode' => $viewMode], key(time()))

    {{$contacts->links()}}

    @include('partials.confirm-delete')
</div>

@push('scripts')
    <script>
        function contactsApp() {
            return {
                deleteId: '',
                deleteName: '',
                confirmDelete(id, name) {
                    $('#confirmDelete').modal('show');
                    this.deleteId = id;
                    this.deleteName = name;
                },
                deleteContact(){
                    $('#confirmDelete').modal('hide');
                    window.livewire.find('{{$this->id}}').call('deleteContact', this.deleteId);
                }
            }
        }
    </script>
@endpush
