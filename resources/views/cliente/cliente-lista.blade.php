@extends('layout.layout')
@section('title','Lista de Produtos')
@section('content')
 <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th>#id</th>
                <th>Data de Nascimento</th>
                <th>Estado Civil</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>

            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id_nome}}</td>
                <td>{{$cliente->data_nascimento}}</td>
                <td>{{$cliente->estado_civil}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->usuario}}</td>
                <td>{{$cliente->senha}}</td>
                <td>{{$cliente->cpf}}</td>
                <td><a href="cliente/{{$cliente->id_nome}}/edit" class="btn btn-primary mr-2">Editar</a><a href="cliente/{{$cliente->id_nome}}/destroy" class="btn btn-danger">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
     <a href="/cliente/create" class="btn btn-success btn-block">Criar Usuario</a>
@endsection
