@extends('layout.layout')
@section('title','Criar Usuario')
@section('content')

        <div class="container">
        <h1>Criar Usuário</h1>
        @if ($errors->any())
        <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
            {{ Form::open(['action' => 'ClienteController@store']) }}
            <div class="form-group">
            {{ Form::label('data_nascimento', 'Data-Nascimento:')}}
            {{ Form::date('data_nascimento', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('estado_civil', 'Estado Civil:') }}
            {{ Form::text('estado_civil', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('telefone', 'Telefone:') }}
            {{ Form::tel('telefone', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('endereco', 'Endereço:') }}
            {{ Form::text('endereco', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('usuario', 'Usuário:') }}
            {{ Form::text('usuario', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('senha', 'Senha:') }}
            {{ Form::password('senha', ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('cpf', 'CPF:') }}
            {{ Form::text('cpf', null, ['class'=>'form-control']) }}
            </div>

            <div class="form-group">
            {{ Form::submit('Criar Usuario', ['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>

@endsection