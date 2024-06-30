
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Lista de Comisarias</h1>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre de Policia</th>
                    <th>Comisaria</th>
                    <th>Patrulla</th>
                </tr>
            </thead>
            <tbody>
                @foreach($policias as $policia)
                    <tr>
                        <td>{{ $policia->id }}</td>
                        <td>{{ $policia->nombre }}</td>
                        <td>{{ $policia->comisaria }}</td>
                        <td>{{ $policia->nroPatrulla }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection