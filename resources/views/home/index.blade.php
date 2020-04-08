@extends('layouts.app')

@section('content')
    <div class="container">

        @livewire('contacts-app')

        {{--    START Contact list: Grid view    --}}

        {{--    END Contact list: Grid view    --}}

        <hr class="my-5"/>

        {{--    START Contact list: List view--}}

        {{--    END Contact list: List view    --}}

        <hr class="my-5"/>

        {{--    START Add/Edit Contact Form    --}}
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Add/Edit Contact
        </button>

        <!-- Modal -->
        @livewire('contact-form')
        {{--    START Add/Edit Contact Form    --}}
    </div>
@endsection
