@extends('layouts.app')

@section('content')

    <div class="container-fluid alig_log ">
        <div class="card">
            <div class="position_header_one text-center">
                <div class=" my-1">{{ __('Register') }}</div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="text-center mt-3">
                        <label for="name" class="">{{ __('Nome') }}</label>

                        <div class="input-group">
                            <input id="name" type="text"
                                class="form-control text-center @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Informe seu nome completo">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <label for="email" class="">{{ __('E-mail :') }}</label>

                        <div class="input-group">
                            <input id="email" type="email"
                                class="form-control text-center @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <label for="password" class="">{{ __('Senha :') }}</label>
                        <div class="input-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Informe sua senha">
                            <i class=" fas fa-lock-alt w-25" onclick="mostrarsenha()"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <label for="password-confirm" class="">{{ __('Confirmar Senha :') }}</label>
                        <input id="password-confirm" type="password" class="form-control text-center"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Informe sua senha de confirmação">
                    </div>

                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-block w-50 mx-auto btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
