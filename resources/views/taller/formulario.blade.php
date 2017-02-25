@extends('layouts.app')
@section('contenido')
<p>Formulario de satisfaccion</p>
{!! Form::open(['url' => 'foo/bar']) !!}
 {!! Form::label('email', 'E-Mail Address') !!}
{!! Form::text('username') !!}
 {!! Form::label('sexo', 'Sexo M/F') !!}
{!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['placeholder' => 'Seleccione sexo...']) !!}
{!! Form::close() !!}
@stop
