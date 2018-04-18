@extends('layouts.app')

@section('content')
    <ul>
        <li><a href="{{route("emails.create")}}">Enviar email</a></li>
        <li><a href="{{route("clientes.create")}}">Cadastrar cliente</a></li>
        <li><a href="{{route("listas.create")}}">Criar lista</a></li>
        <li><a href="{{route("listas.index")}}">Listar listas</a></li>
    </ul>
@endsection