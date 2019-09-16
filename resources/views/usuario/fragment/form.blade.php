<div class="form-group">
	{!! Form::label('nombre','Nombre del rol')!!}
	{!! Form::text('nombre',null,  ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::submit('Guardar', ['class'=>'btn btn-primary pull-right'])!!}
</div>