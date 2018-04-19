@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
<table class="table table-condensed">
    <tr>
        <th>#</th>
        <th>nome</th>
        <th>nascimento</th>
        <th>sexo</th>
    </tr>
    <tbody>
        @forelse($data['clientes'] as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->birthday}}</td>
            <td>{{$cliente->gender}}</td>
        </tr>
        @empty
            Nenhum cliente encontrado
        @endforelse
    </tbody>
</table>
@endsection