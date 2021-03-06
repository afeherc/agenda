@extends('app')
@section('content')
    <h2>{{ Lang::get('messages.titleContacts') }}</h2>
    @if ( !$contactos->count())
        {{ Lang::get('messages.noContacts') }}
    @else
        <dl>
            @foreach( $contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 
                    'method' => 'DELETE', 'route' => array
                    ('contactos.destroy', $contacto->slug))) !!}
                    <a href="{{route('contactos.show', $contacto->slug) }}">
                        {{ $contacto->nom }}</a>
                    (
                    {!! link_to_route('contactos.edit', 
                    Lang::get('messages.edit'), array($contacto->slug), 
                    array('class' => 'btn btn-info')) !!}
                    ,
                    {!! Form::submit(Lang::get('messages.delete'), 
                    array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </dl>
    @endif
    <p>
        {!! link_to_route('contactos.create', 
        Lang::get('messages.createContacts')) !!}<br/><br/>
        {!! link_to_route('agenda.index', Lang::get('messages.backToMenu')) !!}
    </p>
@endsection
