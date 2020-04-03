@extends('layouts.app')

@section('content')
    <div class="container">
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
                <label class="btn btn-outline-primary" title="Display as a list">
                    <input type="radio" name="options" id="option1" autocomplete="off"/> <i class="fas fa-list"></i>
                </label>
                <label class="btn btn-outline-primary" title="Display as a grid">
                    <input type="radio" name="options" id="option2" autocomplete="off"/> <i class="fa fa-th-large"></i>
                </label>
            </div>
        </div>

        {{--    START Contact list: Grid view    --}}
        <div>
            <div class="container row pt-5 d-flex align-self-center justify-content-between ">

                <div class="card border-0 col-12 col-md-6 col-lg-3 mx-2 my-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{asset('img/contact.png')}}"
                                                    class="img-thumbnail rounded-circle mb-2"
                                                    style="width: 40px!important"
                                                    alt="John Doe"/> John Doe </h5>
                        <p class="card-text text-muted"><i class="fa fa-envelope mr-1"></i> johndoe@example.com</p>
                        <p class="card-text text-muted"><i
                                class="fa fa-phone mr-1"></i>+1-123-3456-789</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-sm btn-link" title="Edit"><i class="fas fa-pen"></i></button>
                            <button class="btn btn-sm btn-link text-danger" title="Delete"><i
                                    class="fas fa-trash"></i>
                            </button>
                            <button class="btn btn-sm btn-link text-secondary" title="Share"><i
                                    class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <p class="text-muted">No Contacts to display.
                    <button class="btn btn-link">Add one</button>
                </p>

            </div>
        </div>
        {{--    END Contact list: Grid view    --}}

        <hr class="my-5"/>

        {{--    START Contact list: List view--}}
        <div class="container">

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
                    <tr>
                        <td scope="row"><img src="{{asset('img/contact.png')}}"
                                             class="img-thumbnail rounded-circle py-0 my-0 mr-1"
                                             style="width: 40px!important" alt="John Doe"/>
                            <button class="btn btn-link p-0">John Doe</button>
                        </td>
                        <td class="text-muted">johndoe@example.com</td>
                        <td class="text-muted">+1-123-3456-789</td>
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
                    <p class="text-muted">No Contacts to display.
                        <button class="btn btn-link">Add one</button>
                    </p>
                    </tbody>
                </table>
            </div>
        </div>
        {{--    END Contact list: List view    --}}

        <hr class="my-5"/>

        {{--    START Add/Edit Contact Form    --}}
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Add/Edit Contact
        </button>

        <!-- Modal -->
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
        {{--    START Add/Edit Contact Form    --}}
    </div>
@endsection
