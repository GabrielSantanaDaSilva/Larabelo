@extends('layouts.base')
<h1>Usuarios</h1>



@section('content')

<p>
    {{$usuarios->links() }}
</p>

<table class="table table-border table-striped">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Criado em</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $usuarios as $usuario )


        <tr>
            <td>
                <a href="{{ route('usuario.show', ['id'=>$usuario->id]) }}" class="btn btn-success">
                    Ver
                </a>
            </td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->created_at->format('d/m/y')}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

