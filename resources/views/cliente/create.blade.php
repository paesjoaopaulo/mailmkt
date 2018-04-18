@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')
<form action="{{route('clientes.store')}}" method="post" class="form">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="birthday">Nascimento</label>
        <input type="date" class="form-control" name="birthday" id="birthday">
    </div>
    <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="gender" id="radio1gender" value="f" required>
            <label class="custom-control-label" for="radio1gender">Feminino</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="gender" id="radio2gender" value="m" required>
            <label class="custom-control-label" for="radio2gender">Masculino</label>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Cadastrar</button>
    </div>
    {{csrf_field()}}
</form>
@endsection