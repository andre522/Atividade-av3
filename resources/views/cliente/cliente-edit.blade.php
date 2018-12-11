@extends('layout.layout')
@section('title','Editar Usuario')
@section('content')
<div class="container">
        @if ($errors->any())
        <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
            {{ Form::open(['url' => "cliente/$clientes->id_nome/update",'method' => 'put']) }}
            <div class="form-group">
            {{ Form::label('data_nascimento',$clientes->data_nascimento, 'Data-Nascimento:')}}
            {{ Form::date('data_nascimento', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('estado_civil', 'Estado Civil:') }}
            {{ Form::text('estado_civil', $clientes->estado_civil, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('telefone', 'Telefone:') }}
            {{ Form::tel('telefone', $clientes->telefone, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('endereco', 'Endereço:') }}
            {{ Form::text('endereco', $clientes->endereco, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('usuario', 'Usuário:') }}
            {{ Form::text('usuario', $clientes->usuario, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('senha', 'Senha:') }}
            {{ Form::password('senha', ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('cpf', 'CPF:') }}
            {{ Form::text('cpf', $clientes->cpf, ['class'=>'form-control']) }}
            </div>


            <div class="form-group">
            {{ Form::submit('Salvar Usuario', ['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>



@endsection