@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>

    <form class="form">

        <h1 class="titulo">Registrarse</h1>

        <input class="cajas" type="text" placeholder="Nombre" required maxlength="30">
        <input class="cajas" type="text" placeholder="Apellido" required maxlength="30">
        <input class="cajas" type="email" placeholder="Correo electrónico" required maxlength="50">
        <input class="cajas" type="password" placeholder="Contraseña" required maxlength="20">
        <input class="cajas" type="password" placeholder="Confirmar contraseña" required maxlength="20">

        <button class="boton" type="submit" href='home'>Registrarse</button> 
    </form>
</body>
</html>
@endsection