<div>
    <div class="form-group w-50 mx-auto my-5">
        <input type="text" class="form-control" name="search" id="search" aria-describedby="searchHelp"
               placeholder="Search contact by name, email or number">
        <small id="searchHelp" class="form-text text-muted"></small>
    </div>

    {{--    Toolbar    --}}
    <div class="d-flex justify-content-end">
        <div class="btn-group btn-group-sm btn-group-toggle mr-3" data-toggle="buttons">
            <button class="btn btn-success" title="Add a contact"><i class="fas fa-plus"></i></button>
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

    @if($viewMode == 'grid')
        @livewire('contact-grid')
    @else
        @livewire('contact-list')
    @endif

</div>
