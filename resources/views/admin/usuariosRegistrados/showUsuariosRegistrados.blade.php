@extends('admin/encabezado')

@section('content')
{{$proyect}}
<h1>Nombre: {{ $proyect['title'] }}</h1>
<h5>identificado con id {{ $proyect['id'] }}<br>
    descripcion {{$proyect['description']}}</h5>

@endsection
