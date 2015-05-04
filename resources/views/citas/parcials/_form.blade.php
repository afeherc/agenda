<div class="form-group">
    {!! Form::label('nom', 'Nom:&nbsp;') !!}
    {!! Form::text('nom') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:&nbsp;') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::label('lloc', 'Lloc de la cita:&nbsp;') !!}
    {!! Form::text('lloc') !!}
</div>
<div class="form-group">
    {!! Form::label('fecha', 'Data de la cita:&nbsp;') !!}
    {!! Form::text('fecha') !!}  &nbsp;(aaaa-mm-dd)
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
