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
                    <h4>Add Address
                        <a href="{{ url('/address') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/address/create') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">Street: </label>
                            <input type="text" id="Street" name="Street" placeholder="Street" value="{{ old('Street') }}"/>
                            @error('Street') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">City: </label>
                            <input type="text" id="City" name="City" placeholder="City" value="{{ old('City') }}"/>
                            @error('City') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Province: </label>
                            <input type="text" id="Province" name="Province" placeholder="Province" value="{{ old('Province') }}"/>
                            @error('Province') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Country: </label>
                            <input type="text" id="Country" name="Country" placeholder="Country" value="{{ old('Country') }}"/>
                            @error('Country') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Postal_code: </label>
                            <input type="text" id="Postal_code" name="Postal_code" placeholder="Postal_code" value="{{ old('Postal_code') }}"/>
                            @error('Postal_code') <span class="text-danger">{{ $message }}</span>@enderror
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
