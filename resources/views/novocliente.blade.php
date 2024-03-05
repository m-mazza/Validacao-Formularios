@extends('layouts.master')
@section('titulo', 'Novo Cliente')


@section('conteudo')
    <div class="container">
        <div class="row no-gutters justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-sm-7">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title m-0 text-center">
                            <strong>Cadastro de Cliente</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" class="row no-gutters" method="POST">
                            @csrf
                            <div class="col-9">
                                <div class="m-2">
                                    <label for="nome">Nome</label>
                                    <input id="nome" type="text" class="form-control" name="nome">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="m-2">
                                    <label for="idade">Idade</label>
                                    <input id="idade" type="text" class="form-control" name="idade">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="m-2">
                                    <label for="endereco">Endereço</label>
                                    <input id="endereco" type="text" class="form-control" name="endereco">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="m-2">
                                    <label for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mx-2 mt-4">
                                    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                                    <button type="cancel" class="btn btn-sm btn-secondary">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
