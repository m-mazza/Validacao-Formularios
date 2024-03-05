@extends('layouts.master')
@section('titulo', 'Clientes')

@section('conteudo')
    <div class="container">
        <div class="row no-gutters justify-content-center mt-5">
            <div class="col-12 col-sm-10">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title m-0 text-center">
                            <strong>Cadastro de Cliente</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Idade</th>
                                    <th scope="col">E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <th>{{$cliente->id}}</th>
                                        <td>{{$cliente->nome}}</td>
                                        <td>{{$cliente->endereco}}</td>
                                        <td>{{$cliente->idade}}</td>
                                        <td>{{$cliente->email}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
