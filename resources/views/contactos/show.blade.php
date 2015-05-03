@extends('app')

@section('content')
        <h2>
		{{ $contacto->nom }}
	</h2>
	<table class="table">
		<tr><td>{{Lang::get('messages.name')}}</td><td>{{ $contacto->nom }}</td></tr>
		<tr><td>{{Lang::get('messages.email')}}</td><td>{{ $contacto->mail }}</td></tr>
		<tr><td>{{Lang::get('messages.telephone')}}</td><td>{{ $contacto->telf }}</td></tr>
		<tr><td>{{Lang::get('messages.createdAt')}}</td><td>{{ $contacto->created_at }}</td></tr>
	</table>
	@if ( !$contacto->citas->count())
		{{Lang::get('messages.noMeetings')}}<br/>
	@else
		<dl>
		@foreach ($contacto->citas as $cita)
			<li><a href="{{route('citas.show', $cita->slug) }}">{{ $cita->nom }}</a></li>
		@endforeach
		</dl>
	@endif
	{!! link_to_route('contactos.edit',Lang::get('messages.editContact')) !!}<br/>
	{!! link_to_route('contactos.index',Lang::get('messages.backToContacts')) !!}
@endsection
