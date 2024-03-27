@extends('layouts.master')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="confirm_password" class="form-control rounded-bottom @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="Confirm Password" required>
                <label for="confirm_password">Confirm Password</label>
                @error('confirm_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block mt-2">
                <b>Already registered ?</b><a href="/login"> <b> Login</b></a>
            </small>
          </main>
    </div>
</div>
@endsection
