@extends('layouts.app')

@section('content')
<div class="bg-light d-flex align-items-center justify-content-center">
    <div class="card shadow-lg w-100" style="max-width: 480px;">
        <div class="card-body">
            <div class="text-center">
                <h1 class="card-title h3">{{ __('Register') }}</h1>
                <p class="card-text text-muted">Sign up below to access your account</p>
            </div>
            <div class="mt-4">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label text-muted">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required>
                        @error('name')
                                <div class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label text-muted">{{ __('Email Address') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
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
                    <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-dark">{{ __('Already have an account?') }}</a>
                            @endif
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
