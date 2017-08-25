<div class="form-group">
	{!! Form::label('name', 'Nombre del producto') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('short', 'Descripcion brebe del producto') !!}
	{!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('body', 'Body del producto') !!}
	{!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
</div>