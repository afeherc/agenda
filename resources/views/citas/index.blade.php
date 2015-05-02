@extends('app')

@section('content')
	<h2>Citas@{{ Lang::get('messages.title') }}</h2>
	
	@if ( !$citas->count())
                No hay citas@{{ Lang::get('messages.noPoblations') }}
        @else
                <ul>
                        @foreach( $citas as $cita )
                                <li>
					{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.destroy', $cita->slug))) !!}
					<a href="{{route('citas.show', $cita->slug) }}">{{ $cita->nom }}</a>
					(
                            		{!! link_to_route('citas.edit', 'Edit', array($cita->slug), array('class' => 'btn btn-info')) !!},
                            		{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        		)
                    			{!! Form::close() !!}
                
				</li>
                        @endforeach
                </ul>
        @endif
	<p>		
		{!! link_to_route('citas.create','Create') !!}<br/><br/>
		{!! link_to_route('agenda.index', 'Back to menu') !!}
	</p>
@endsection
