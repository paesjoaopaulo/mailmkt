@extends('layouts.app')
@section('title', 'Cadastrar Lista')
@section('content')
<form action="{{route('listas.store')}}" method="post" class="form">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="clientes">Clientes</label>
        <select class="custom-select" multiple="multiple" name="clientes[]" id="clientes">
            @forelse($data['clientes'] as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                @empty
                <option>Nenhum cliente na base dados</option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Cadastrar</button>
    </div>
    {{csrf_field()}}
</form>
@endsection