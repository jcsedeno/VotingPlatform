@extends('layouts.template')

@section('title', 'Home')
    
@section('content')

<h1 class="logo">basetis</h1>
<h3>Bienvenido a la Plataforma de Votacion</h3>

<form action="">
    <label>
        Escoge tu próxima Formación </br>
        <input type="text" name="IdTrabajador" value="Identificación del Trabajador"></br>
    </label>
    <input type="submit" value="Ingresar">
</form>

<form action="gestiones">
    <label>
        Eres Formador
    </label> </br>
    <input type="submit" value="Login">
</form>

@endsection
    


