@extends('layouts.app') @section('title', 'Listas') @section('content')
<table class="table table-condensed">
    <tr>
        <th>#</th>
        <th>nome</th>
        <th>clientes</th>
        <th>ações</th>
    </tr>
    <tbody>
        @forelse($data['listas'] as $lista)
        <tr>
            <td>{{$lista->id}}</td>
            <td>{{$lista->name}}</td>
            <td>{{$lista->clientes()->count()}}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('emails.create', ['lista' => $lista->id])}}">Enviar email</a>
                        <a class="dropdown-item" href="#">Editar</a>
                        <a class="dropdown-item" href="#">Excluir</a>
                    </div>
                </div>
            </td>
        </tr>
        @empty @endforelse
    </tbody>
</table>
@endsection