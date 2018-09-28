@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')

@stop

@section('content')
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Modificar Pacientes</b></h3>
    <div class="box-tools pull-right">
    <!-- This will cause the box to be removed when clicked -->
      <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      <!-- This will cause the box to collapse when clicked -->
      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
		{!! Form::model($patient, ['route' => ['patients.update', $patient],  'method' => 'PUT', 'files' => 'true']) !!}
        <div class="row">
          <div class="col-md-4">
            <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                  {!! Form::label('first_name', 'Nombre') !!}
                  {!! Form::text('first_name', null, ['class' => 'form-control', 'autofocus']) !!}
                  @if ($errors->has('first_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('first_name')}}</strong>
                    </span>
                  @endif
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                {!! Form::label('last_name', 'Apellido') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('last_name'))
                  <span class="help-block">
                  <strong>{{ $errors->first('last_name')}}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                {!! Form::label('phone', 'Telefono') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                @if ($errors->has('phone'))
                  <span class="help-block">
                  <strong>{{ $errors->first('phone')}}</strong>
                  </span>
                @endif
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                {!! Form::label('address', 'Direccion') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                @if ($errors->has('address'))
                  <span class="help-block">
                  <strong>{{ $errors->first('address')}}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Correo Electronico') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email')}}</strong>
                  </span>
                @endif
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group {{ $errors->has('birth_date') ? ' has-error' : '' }}">
                {!! Form::label('birth_date', 'Fecha de Nacimiento') !!}
                {!! Form::date('birth_date', null, ['class' => 'form-control']) !!}
                @if ($errors->has('birth_date'))
                  <span class="help-block">
                  <strong>{{ $errors->first('birth_date')}}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                {!! Form::label('gender', 'Género') !!}
                {!! Form::select('gender', ['male' => 'Masculino', 'female' => 'Femenino'], null, ['class' => 'form-control']) !!}
                @if ($errors->has('gender'))
                  <span class="help-block">
                  <strong>{{ $errors->first('gender')}}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group {{ $errors->has('photo') ? ' has-error' : '' }}">
                {!! Form::label('photo', 'Imagen') !!}
                {!! Form::file('photo', ['class' => 'form-control']) !!}
                @if ($errors->has('photo'))
                  <span class="help-block">
                  <strong>{{ $errors->first('photo')}}</strong>
                  </span>
                @endif
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success'] ) !!}
            </div>

            <div class="col-md-8">
                <a href="{{ route('patients.show', ['patient' => $patient]) }}", class="btn btn-primary pull-right"><i class="fa fa-reply" aria-hidden="true"> Regresar </i></a>
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