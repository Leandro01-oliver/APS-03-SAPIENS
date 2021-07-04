@extends('layouts.app')

@section('content')
    <div class="container-fluid alig_log ">
        <div class="card">
            <div class="position_header_one text-center">
                <div class="my-1">{{ __('Reset Password') }}</div>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="text-center mt-3">
                        <label for="email" class="">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>

            <div class=" mt-2 mb-4">
                <button type="submit" class="btn btn-block w-50 mx-auto btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection
