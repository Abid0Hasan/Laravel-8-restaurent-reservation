@extends('layouts.app')

@section('title','Contact')

@push('css')

@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Contact Message</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Name: {{ $contact->name }}</strong><br>
                                    <b>Email: {{ $contact->email }}</b> <br>
                                    <b>Subject: {{ $contact->subject }}</b> <br>
                                    <strong>Message: </strong><hr>

                                    <p>{{ $contact->message }}</p><hr>

                                </div>
                            </div>
                            <a href="{{ route('contact.index') }}" class="btn btn-danger">Back</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush


