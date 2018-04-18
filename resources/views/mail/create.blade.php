@extends('layouts.app')
@section('title', 'Enviar Email')
@section('content')
<form action="{{route('clientes.store')}}" method="post" class="form">
    <div class="form-group">
        <label for="name">Assunto</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="content">Conteúdo</label>
        <textarea type="text" class="form-control" content="content" id="content"></textarea>
    </div>
    <div class="form-group">
        <label for="lista">Lista</label>
        <select class="custom-select" name="lista" id="lista">
            <option value="">Selecione uma opção</option>
            @forelse($data['listas'] as $lista)
                @if(isset($_GET['lista']) && $lista->id == $_GET['lista'])
                    <option value="{{$lista->id}}" selected>{{$lista->name}}</option>
                @else
                    <option value="{{$lista->id}}">{{$lista->name}}</option>
                @endif
            @empty
                <option>Nenhuma lista na base dados</option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Enviar</button>
    </div>
    {{csrf_field()}}
</form>
@endsection