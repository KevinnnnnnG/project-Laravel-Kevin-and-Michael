@extends('admin/encabezado')

@section('content')
    <h5>Crear Proyecto Nuevo</h5>
    <form  method="POST" action=" {{ route('register.store') }} ">
        @csrf
        <label>titulo del proyecto
            <input type="text" name="title">
        </label>
        <label>descripcion del proyecto
            <input type="textarea" name="description">
        </label>
        <input type="submit">
    @endSection
