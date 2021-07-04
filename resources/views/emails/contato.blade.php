@extends('layouts.app')

@section('content')
    <div class="container-fluid alig_log">
        <div class="card">
            <div class="position_header_one text-center">
                <div class=" my-1">{{ __('Área de Contatos') }}</div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('/contato') }}">
                    {{ csrf_field() }}

                    <div class="text-center mt-3">
                        <label for="nome" class="">Nome :</label>
                        <input type="text" class="form-control text-center @error('nome') is-invalid @enderror" id="nome"
                            name="nome" placeholder="Informe seu nome completo">
                        @error('nome')
                            <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span arial-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="text-center mt-3">
                        <label for="ra" class="">RA :</label>
                        <input type="text" class="form-control text-center @error('ra') is-invalid @enderror" id="ra"
                            name="ra" placeholder="Informe seu RA">
                        @error('ra')
                            <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span arial-hidden="true">&times;</span>
                            </div>
                        @enderror
                    </div>
                    <div class="text-center mt-3">
                        <label for="curso" class="">Curso :</label>
                        <input type="text" class="form-control text-center @error('curso') is-invalid @enderror" id="curso"
                            name="curso" placeholder="Informe seu curso">
                        @error('curso')
                            <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span arial-hidden="true">&times;</span>
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="text-center mt-3">
                        <label for="ra" class="">Curso :</label>
                        <select id="inputState" class="form-control">
                            <option selected disabled>Selecione seu curso</option>
                            <option value="">Sistemas de Informação</option>
                            <option value="">Jogos digitais</option>
                            <option value="">Direito</option>
                            <option value="">Engenharia Civil</option>
                            <option value="">Markting</option>
                        </select>
                    </div> --}}
                    <div class="text-center mt-3">
                        <label for="msg">Menssagem :</label>
                        <textarea class="form-control @error('msg') is-invalid @enderror" id="msg"
                            placeholder="Digite uma menssagem"></textarea>
                        @error('msg')
                            <div class="invalid-feedback alert alert-danger mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span arial-hidden="true">&times;</span>
                            </div>
                        @enderror
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-block w-50 mx-auto btn-primary" type="submit">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
