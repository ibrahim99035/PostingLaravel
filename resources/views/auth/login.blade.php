@extends('layouts.app')

@section('content')
    <div id="loginFormContainer">
        <h3>Log in into your account</h3>
        @if (session('status'))
            {{ session('status') }}
        @endif
        <form action="{{ route('login') }}" method="post">
            
            @csrf
            <div>
                <input type="email" name="email" id="email" placeholder="Your email" value="{{ old('email') }}">
                @error('email')
                    <div>
                        <span>
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Your password">
                @error('password')
                    <div>
                        <span>
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <div id="loginBittonContainer">
                <button type="submit" id="loginButton">Login</button>
            </div>
        </form>
    </div>
@endsection