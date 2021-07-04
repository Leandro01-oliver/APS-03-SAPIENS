@extends('layouts.app')

@section('content')
    <div class="container-fluid alig_log">
        <div class="card">
            <div class="position_header_one text-center">
                <div class=" my-1">{{ __('Login') }}</div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center mt-3">
                        <label for="email" class="">{{ __('E-mail :') }}</label>
                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class=" text-center mt-3">
                        <label for="password" class="">{{ __('Senha :') }}</label>

                        <div class="input-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            <i class=" fas fa-lock-alt w-25" onclick="mostrarsenha()"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class=" mt-3 mb-2">
                        <button type="submit" class="btn btn-block w-50 mx-auto btn-primary">
                            {{ __('Entrar') }}
                        </button>
                    </div>
                </form>
            </div>
            @if (Route::has('password.request'))
                <div class="position_header_two text-center">
                    <a class="btn btn-link my-1 " href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
