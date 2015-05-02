@extends('app')

@section('content')
	<h2>Contactos@{{ Lang::get('messages.title') }}</h2>
	
	@if ( !$contactos->count())
                No hay Contactos@{{ Lang::get('messages.noPoblations') }}
        @else
                <ul>
                        @foreach( $contactos as $contacto )
                                <li>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactos.destroy', $contacto->slug))) !!}
					<a href="{{route('contactos.show', $contacto->slug) }}">{{ $contacto->nom }}</a>
					(
                            		{!! link_to_route('contactos.edit', 'Edit', array($contacto->slug), array('class' => 'btn btn-info')) !!},
                            		{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        		)
                    			{!! Form::close() !!}
                
				</li>
                        @endforeach
                </ul>
        @endif
	<p>
		{!! link_to_route('contactos.create', 'Create') !!}<br/><br/>
		{!! link_to_route('agenda.index', 'Back to menu') !!}
	</p>
@endsection