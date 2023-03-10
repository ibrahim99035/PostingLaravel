@extends('layouts.app')

@section('content')
    <div id="registerFormContainer">
        <h3>Join Us Now</h3>
        <form action="{{ route('register') }}" method="post">
            
            @csrf
            <div>
                <input type="text" name="name" id="name" placeholder="Your name" value="{{ old('name') }}">
                @error('name')
                    <div>
                        <span>
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('name') }}">
                @error('username')
                    <div>
                        <span>
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
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
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="repeat password">
                @error('password_confirmation')
                    <div>
                        <span>
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
            <div id="registerBittonContainer">
                <button type="submit" id="registerButton">Register</button>
            </div>
        </form>
    </div>
@endsection