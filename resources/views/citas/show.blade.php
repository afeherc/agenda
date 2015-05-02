@extends('app')

@section('content')
        <h2>
		{{ $cita->nom }}
	</h2>
	<table class="table">
		<tr><td>Nom:</td><td>{{ $cita->nom }}</td></tr>
		<tr><td>Data de la cita</td><td>{{ $cita->fecha }}</td></tr>
		<tr><td>Lloc de la cita</td><td>{{ $cita->lloc }}</td></tr>
		<tr><td>Data de creació:</td><td>{{ $cita->created_at }}</td></tr>
	</table>
	@foreach ($cita->contactos as $contacto)
		{{$contacto->nom}}
	@endforeach
@endsection
