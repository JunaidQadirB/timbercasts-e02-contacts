<div>
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add/Edit Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/contact.png')}}" class="img-thumbnail rounded-circle w-25 mb-2"
                         alt="John Doe"/>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first">First Name</label>
                            <input type="text" name="first" id="first" class="form-control" placeholder=""
                                   aria-describedby="firstHelp">
                            <small id="firstHelp" class="text-danger"></small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="first">Last Name</label>
                            <input type="text" name="last" id="last" class="form-control" placeholder=""
                                   aria-describedby="lastHelp">
                            <small id="lastHelp" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="last" class="form-control" placeholder=""
                               aria-describedby="emailHelp">
                        <small id="emailHelp" class="text-danger"></small>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" name="type" id="type">
                                    <option>Mobile</option>
                                    <option>Home</option>
                                    <option>Work</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="number">Phone Number</label>
                            <div class="input-group mb-3">
                                <input type="text" name="number" id="last" class="form-control"
                                       placeholder=""
                                       aria-describedby="numberHelp"/>
                                <div class="input-group-append">
                                    <button class="btn text-primary" title="Add a number"><i
                                            class="fas fa-plus-circle"></i></button>
                                </div>
                                <small id="numberHelp" class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
