<div class="container">
    <form wire:submit.prevent="save">
        <h2>Add A Contact</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first">First Name</label>
                <input type="text" wire:model="first" id="first" class="form-control" placeholder=""
                       aria-describedby="firstHelp">
                @error('first')<small id="firstHelp" class="text-danger">{{$message}}</small>@enderror
            </div>

            <div class="form-group col-md-6">
                <label for="first">Last Name</label>
                <input type="text" wire:model="last" id="last" class="form-control" placeholder=""
                       aria-describedby="lastHelp">
                @error('last')<small id="lastHelp" class="text-danger">{{$message}}</small>@enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" wire:model="email" id="last" class="form-control" placeholder=""
                   aria-describedby="emailHelp">
            @error('email')<small id="emailHelp" class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" wire:model="numberType" id="type">
                        <option>Mobile</option>
                        <option>Home</option>
                        <option>Work</option>
                    </select>
                    @error('numberType')<small id="numberTypeHelp" class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="form-group col-md-9">
                <label for="number">Phone Number</label>
                <div class="input-group mb-3">
                    <input type="text" wire:model="number" id="last" class="form-control"
                           placeholder=""
                           aria-describedby="numberHelp"/>
                </div>
                @error('number')<small id="numberHelp" class="text-danger">{{$message}}</small>@enderror
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a class="btn btn-link mx-1" href="/">Cancel</a>
            <button class="btn btn-primary mx-1" type="submit">Save</button>

        </div>
    </form>
</div>
