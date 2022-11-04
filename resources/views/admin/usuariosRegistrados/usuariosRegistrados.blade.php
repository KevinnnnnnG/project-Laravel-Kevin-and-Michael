@extends('admin/encabezado')

@section('content')
<h5>hola</h5>
<a href="{{route ('register.create') }}">crear proyecto nuevo<br><br>
@foreach ($registers as $registerUsers)

    <a href="{{ route('register.show', $registerUsers) }}">{{ $registerUsers->title }}</h1><br>
@endforeach
@endSection


