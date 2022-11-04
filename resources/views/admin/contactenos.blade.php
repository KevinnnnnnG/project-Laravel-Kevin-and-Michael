@extends('admin/encabezado')

@section('content')
<center>
<h5>
    Ingrese Sus Datos
</h5>

</center>
<form method="post" action="{{ route('contactenos') }}">
@csrf
<input type="text" name="name" placeholder="nombre" id="name" value="{{ old('name')}}"><br>
{!! $errors->first('name', '<small>:message</small>') !!}<br>

<input type="email" name="email" placeholder="email" id="email" value="{{ old('email')}}"><br>
{!! $errors->first('email', '<small>:message</small>') !!}<br>

<input type="text" name="asunto" placeholder="asunto" id="asunto" value="{{ old('asunto')}}"><br>
{!! $errors->first('asunto', '<small>:message</small>') !!}<br>

<textarea name="content" placeholder="mensaje" value="{{ old('content') }}"></textarea><br>
{!! $errors->first('content', '<small>:message</small>') !!}<br>
<button>enviar</button>
</form>
@endSection
