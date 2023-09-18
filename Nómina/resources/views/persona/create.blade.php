@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    
    <h2>REGRISTRO DE NUEVO EMPLEADO</h2>
    
    <form action="" method="post">

        <input type="text" name="PrimerNombre" id="PrimerNombre">
        <input type="text" name="SegundoNombre" id="SegundoNombre">
        <input type="text" name="PrimerApellido" id="PrimerApellido">
        <input type="text" name="SegundoApellido" id="SegundoApellido">
        <input type="text" name="Cedula" id="Cedula">
        <input type="text" name="RIF" id="RIF">
        <input type="date" name="FechaNacimiento" id="FechaNacimiento">
        <input type="text" name="Nacionalidad" id="Nacionalidad">
        <input type="text" name="id_generos" id="id_generos">
        
        <input type="submit"name="Enviar">

    </form>
@endsection