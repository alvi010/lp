@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Publicaciones Cercanas</h1>

        <div class="list-group">
            @foreach($delitos as $delito)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $delito->titulo }}</h5>
                    </div>
                    <p class="mb-1">{{ $delito->descripcion }}</p>
                    <small>{{ $delito->ubicacion }}</small>
                </a>
            @endforeach
        </div>
    </div>
@endsection
