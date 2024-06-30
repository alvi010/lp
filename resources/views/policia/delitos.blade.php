
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Lista de Alertas</h1>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID Policia</th>
                    <th>Titulo</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Ubicacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alertas as $alerta)
                    <tr>
                        <td>{{ $alerta->policia_id }}</td>
                        <td>{{ $alerta->titulo }}</td>
                        <td>{{ $alerta->tipo }}</td>
                        <td>{{ $alerta->descripcion }}</td>
                        <td>{{ $alerta->ubicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection