@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')

@stop

@section('content')
<div class="row">
<div class="col-md-6">
<div class="panel-group">
  <div class="panel panel-primary">

	<div class="panel-heading"> Crear Pacientes </div>
    <div class="panel-body">
		{!! Form::open() !!}
                <div class="form-group">
                      {!! Form::label('first_name', 'Nombre') !!}
                      {!! Form::text('first_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('last_name', 'Apellido') !!}
                      {!! Form::text('last_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('phone', 'Telefono') !!}
                      {!! Form::text('phone', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('address', 'Direccion') !!}
                      {!! Form::text('address', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('email', 'Correo Electronico') !!}
                      {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('birth_date', 'Fecha de Nacimiento') !!}
                      {!! Form::text('birth_date', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::select('gender', ['male' => 'male', 'female' => 'female']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::file('photo') !!}
                  </div>
                <div class="form-group">
                      {!! Form::submit('Guardar', ['class' => 'btn btn-success' ] ) !!}
                  </div>
            {!! Form::close() !!}

	</div>
  </div>
</div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>








@stop