@extends('app')
@section('content')
    <h2>{{ Lang::get('messages.titleMeeting') }}</h2>
    @if ( !$citas->count())
        {{ Lang::get('messages.noMeetings') }}
    @else
        <dl>
            @foreach( $citas as $cita )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 
                    'method' => 'DELETE', 'route' => array
                    ('citas.destroy', $cita->slug))) !!}
                    <a href="{{route('citas.show', $cita->slug) }}">
                        {{ $cita->nom }}</a>
                    (
                    {!! link_to_route('citas.edit', 
                    Lang::get('messages.edit') , array($cita->slug), 
                    array('class' => 'btn btn-info')) !!}
                    ,
                    {!! Form::submit( Lang::get('messages.delete'), 
                    array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </dl>
    @endif
    <p>		
        {!! link_to_route('citas.create', 
        Lang::get('messages.createMeeting') ) !!}<br/><br/>
        {!! link_to_route('agenda.index', 
        Lang::get('messages.backToMenu') ) !!}
    </p>
@endsection
