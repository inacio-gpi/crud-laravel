@extends('layouts.app')

@section('title', 'CRUD Laravel')

@section('content')

<div class="container-fluid">
    @if(isset($users))
    <form action="/usuario/editar/{{ $users->id }}" method="POST">
        @else
        <form action="/usuario/novo-usuario" method="POST">
            @endif


            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Usuário</h4>
                            <h6 class="card-subtitle">Todos os Campos São Obrigatórios.</h6>

                            @if($errors->any())
                            {!! implode('', $errors->all('<p class="text-danger">:message</p>')) !!}
                            @endif
                            @if(session('msg'))
                            <p class="position-absolute text-success">{{ session('msg') }}</p>
                            @endif

                            <!-- Linha 01 -->
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="mb-1">Nome Completo:</p>
                                        <input tabindex="12" type="text" class="form-control" name="usuario_nome" id="usuario_nome" placeholder="" value="{{ $users->name ?? '' }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="mb-1">Email:</p>
                                        <input tabindex="12" type="text" class="form-control" name="usuario_email" id="usuario_email" placeholder="" value="{{ $users->email ?? '' }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="mb-1">Senha:</p>
                                        <input tabindex="12" type="password" class="form-control" name="usuario_senha" id="usuario_senha" placeholder="••••••••" value="">
                                    </div>
                                </div>
                            </div>
                            <!-- Linha 01 -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button style="float: right;" type="submit" class="btn btn-success mr-2">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>


@endsection
