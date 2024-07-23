@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body py-14">
            <form method="POST" action="{{ route('login') }}" class="pr-5 py-5">
                @csrf
                <h1 class="text-center display-4 font-weight-bold my-4">Login</h1>
                <div class="mb-3 row">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-8">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-8 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-0 row">
                    <div class="col-md-8 offset-md-4 d-grid">
                        <button type="submit" class="btn btn-primary py-2 px-5 font-weight-bold">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link mt-2" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection