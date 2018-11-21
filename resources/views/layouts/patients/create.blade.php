@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')

@stop

@section('content')
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Crear Pacientes</b></h3>
    <div class="box-tools pull-right">
    <!-- This will cause the box to be removed when clicked -->
      <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      <!-- This will cause the box to collapse when clicked -->
      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
    {!! Form::open(['route' => 'patients.store', 'method' => 'POST', 'files' => 'true']) !!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                {!! Form::label('first_name', 'Nombre') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                {!! Form::label('last_name', 'Apellido') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('address', 'Direccion') !!}
                    {!! Form::text('address', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('email', 'Correo Electronico') !!}
                    {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('birth_date', 'Fecha de Nacimiento') !!}
                    {!! Form::date('birth_date', \Carbon\Carbon::now(), ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('gender', 'Género') !!}
                    {!! Form::select('gender', ['male' => 'Masculino', 'female' => 'Femenino'], null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('photo', 'Imagen') !!}
                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success'] ) !!}
            </div>

            <div class="col-md-8">
                <a href="{{ route('patients.index') }}", class="btn btn-primary pull-right"><i class="fa fa-reply" aria-hidden="true"> Regresar </i></a>
            </div>
        </div>
    {!! Form::close() !!}

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