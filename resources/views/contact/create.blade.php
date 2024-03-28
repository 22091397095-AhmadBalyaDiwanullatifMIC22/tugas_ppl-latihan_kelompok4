@extends('layouts.master')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Contact
                        <a href="{{ url('/contact') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/contact/create') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">First_name: </label>
                            <input type="text" id="First_name" name="First_name" placeholder="First_name" value="{{ old('First_name') }}"/>
                            @error('First_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Last_name: </label>
                            <input type="text" id="Last_name" name="Last_name" placeholder="Last_name" value="{{ old('Last_name') }}"/>
                            @error('Last_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email: </label>
                            <input type="text" id="Email" name="Email" placeholder="Email" value="{{ old('Email') }}"/>
                            @error('Email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Phone: </label>
                            <input type="text" id="Phone" name="Phone" placeholder="Phone" value="{{ old('Phone') }}"/>
                            @error('Phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <button type="Submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
