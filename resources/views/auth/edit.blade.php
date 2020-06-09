@extends('layouts.auth')

@section('title', 'Edit')

@section('content')
    <div class="container">

    </div>
    <div class="row">
        <div class="col s12 m12 l9 xl6 offset-l2 offset-xl3">
            <div class="card">
                <div class="card-action center-align white text">
                    <h3>Edit</h3>
                </div>
                <form method="POST" action="/users/{{$user->id}}">
                    @csrf
                    @method('put')
                    <div class="card-content">
                        {{-- Name --}}
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="name" id="name" @error('name') is-invalid @enderror  value="{{ old('name', $user->name) }}">
                            <label for="name">Name</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="red-text">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>

                        {{-- Email --}}
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" id="email" @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                            <label for="email">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="red-text">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>

                        {{-- Password --}}
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" name="password" id="password" @error('password') is-invalid @enderror">
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="red-text">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>

                        {{-- Confirm Password --}}
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" name="password_confirmation" id="password-confirm">
                            <label for="password">Confirm Password</label>
                        </div><br>
                        <div class="form-field">
                            <button class="btn-large waves-effect waves-dark" style="width: 100%;">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
