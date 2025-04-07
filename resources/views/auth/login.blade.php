@extends('layouts.app')

@section('content')
<div class="bg-light d-flex align-items-center justify-content-center">
    <div class="card shadow-lg w-100" style="max-width: 480px;">
        <div class="card-body">
            <div class="text-center">
                <h1 class="card-title h3">{{ __('Login') }}</h1>
                <p class="card-text text-muted">Sign in below to access your account</p>
            </div>
            <div class="mt-4">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label text-muted">{{ __('Email Address') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address"name="email" value="{{ old('email') }}"  required>
                        @error('email')
                                <div class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-muted">{{ __('Password') }}</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        @error('password')
                                <div class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                    </div>
                     <div class="mb-3 d-flex justify-content-between">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-dark">{{ __("You haven't an account?") }}</a>
                            @endif

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-dark">{{ __('Forgot Your Password?') }}</a>
                            @endif
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
