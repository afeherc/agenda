@extends('app')
 
@section('content')
    <h2>Create</h2>
  	
    {!! Form::model(new App\Contacto, ['route' => ['contactos.store']]) !!}
        @include('contactos/parcials/_form', ['submit_text' => 'Crea'])
    {!! Form::close() !!}
@endsection
