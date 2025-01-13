@extends('layouts.app')

@section('styles')
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f5f7ff;
        font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
    }

    .container {
        display: flex;
        width: 1000px;
        max-width: 100%;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 20px;
    }

    .left {
        flex: 1;
        background:rgb(249, 249, 249);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }

    .left img {
        max-width: 100%;
        height: auto;
    }

    .right {
        flex: 1;
        padding: 48px;
        display: flex;
        flex-direction: column;
    }

    .right h1 {
        font-size: 30px;
        font-weight: 600;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .right p {
        font-size: 16px;
        color: #666;
        margin: 0 0 32px 0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #e1e1e1;
        border-radius: 8px;
        font-size: 15px;
        transition: border-color 0.2s;
        box-sizing: border-box;
    }

    .form-control:focus {
        outline: none;
        border-color: #4285f4;
        box-shadow: 0 0 0 4px rgba(66, 133, 244, 0.1);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background-color: #4285f4;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.2s;
        margin-bottom: 24px;
    }

    .btn:hover {
        background-color: #3367d6;
    }

    .auth-links {
        text-align: center;
        font-size: 15px;
        color: #666;
    }

    .auth-links a {
        color: #4285f4;
        text-decoration: none;
        font-weight: 500;
    }

    .auth-links a:hover {
        text-decoration: underline;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        margin-top: 4px;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }
        
        .left {
            padding: 32px;
        }
        
        .right {
            padding: 32px;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="left">
        <img src="/images/logo.png" alt="Illustration" />
    </div>
    <div class="right">
        <h1>Sign up</h1>
        <p>Let's get you all set up so you can access your personal account.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input id="name" type="text" 
                    class="form-control @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name') }}" 
                    required autocomplete="name" autofocus 
                    placeholder="First Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="email" type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" 
                    required autocomplete="email" 
                    placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password" type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    name="password" required autocomplete="new-password" 
                    placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" 
                    name="password_confirmation" required autocomplete="new-password" 
                    placeholder="Confirm Password">
            </div>

            <button type="submit" class="btn">Create account</button>

            <div class="auth-links">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection