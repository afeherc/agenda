@extends('app')

@section('content')
	<h1>Agenda</h1>
	<a href="{{route('citas.index') }}">{{ Lang::get('messages.titleMeeting') }}</a>
	<a href="{{route('contactos.index') }}">{{ Lang::get('messages.titleContacts') }}</a>
@endsection
