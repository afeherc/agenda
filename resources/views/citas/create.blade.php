@extends('app')
 
@section('content')
    <h2>Create cita</h2>
    {!! Form::model(new App\Cita, ['route' => ['citas.store']]) !!}
        @include('citas/parcials/_form', ['submit_text' => 'Crea'])
    {!! Form::close() !!}
@endsection
