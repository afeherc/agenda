<div class="form-group">
    {!! Form::label('nom', 'Nom:&nbsp;') !!}
    {!! Form::text('nom') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:&nbsp;') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::label('mail', 'Mail:&nbsp;') !!}
    {!! Form::text('mail') !!} 
</div>
<div class="form-group">
    {!! Form::label('telf', 'Telefon:&nbsp;') !!}
    {!! Form::text('telf') !!} 
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
