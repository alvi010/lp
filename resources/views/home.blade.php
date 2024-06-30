@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Gracias Por Ser Parte de la Comunidad') }} <br>

                    <a href="/perfil" class="botonEstilizado">Mi Perfil</a>

                    <style>
                        .botonEstilizado {
                            display: inline-block;
                            padding: 10px 20px;
                            text-decoration: none;
                            background-color: #007bff;
                            color: white;
                            border-radius: 5px;
                        }
                    
                        .botonEstilizado:hover {
                            background-color: #0056b3;
                        }
                    </style> 

                    <a href="/publicaciones" class="botonEstilizado">Publicaciones</a>

                    <style>
                        .botonEstilizado {
                            display: inline-block;
                            padding: 10px 20px;
                            text-decoration: none;
                            background-color: #007bff;
                            color: white;
                            border-radius: 5px;
                        }
                    
                        .botonEstilizado:hover {
                            background-color: #0056b3;
                        }
                    </style>                  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
