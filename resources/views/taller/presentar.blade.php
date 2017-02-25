@extends('layouts.app')
@section('contenido')

<p>Hoja de vida de {!! $elNombre !!} estudiante de la UAM</p>

@if ($elNombre === "Gustavo")
   <p> Es de Pereira </p>
@else
    <p>Es de Putumayo </p>
@endif

<a href={!!url('/taller/index')!!}>Ir a Index</a>
@stop
