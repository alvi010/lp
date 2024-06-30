@extends('layouts.app')

@section('content')
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

    <form method="post" action="/usuario/publicacion">
        <h1>Crear Publicacion</h1>
        @csrf
        <input type="text" name="titulo" placeholder="Titulo"><br>
        <input type="text" name="tipo" placeholder="Tipo"><br>
        <input type="text" name="descripcion" placeholder="Descripcion"><br>
        <input type="text" name="ubicacion" placeholder="Ubicacion"><br>
        <input type="hidden" name="policia_id" value="1">
        <input type="submit" value="Guardar"> <br>
    </form>
@endsection
