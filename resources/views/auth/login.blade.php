@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col s12 m12 l9 xl6 offset-l2 offset-xl3">
            <div class="card">
                <div class="card-action center-align white text">
                    <h3>Login</h3>
                </div>
                <form method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}
                    <div class="card-content">
                        {{-- Email --}}
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" id="email" class="validate {{ $errors->has('email') ? 'invalid ' : '' }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email</label>
                            {!! $errors->first('email', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        {{-- Password --}}
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="password" id="password" required autocomplete="current-password">
                            <label for="password">Password</label>
                            {!! $errors->first('password', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        {{-- Remember me --}}
                        <p>
                            <label>
                              <input type="checkbox" value="{{ old('remember') ? 'checked' : '' }}">
                                <span>Remember me</span>
                            </label>
                        </p><br>
                        <div class="form-field">
                            <button class="btn-large waves-effect waves-dark" style="width: 100%;">Login</button>
                        </div><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
