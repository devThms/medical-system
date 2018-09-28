@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')

@stop

@section('content')
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Detalles del Paciente</b></h3>
    <div class="box-tools pull-right">
    <!-- This will cause the box to be removed when clicked -->
      <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      <!-- This will cause the box to collapse when clicked -->
      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        {!! Form::model($patient, ['route' => ['patients.destroy', $patient], 'method' => 'DELETE', 'files' => 'true'], ['class' => 'form-horizontal']) !!}

        <div class="row">
            <div class="col-md-6">

                <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                    {!! Form::label('first_name', 'Nombre:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('last_name', $patient->first_name, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('first_name')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                    {!! Form::label('last_name', 'Apellido:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('last_name', $patient->last_name, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('last_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('last_name')}}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    {!! Form::label('phone', 'Telefono:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('phone', $patient->phone, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('phone'))
                    <span class="help-block">
                    <strong>{{ $errors->first('phone')}}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                    {!! Form::label('address', 'Direccion:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('address', $patient->address, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('address'))
                    <span class="help-block">
                    <strong>{{ $errors->first('address')}}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Correo Electronico:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('email', $patient->email, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email')}}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('birth_date') ? ' has-error' : '' }}">
                    {!! Form::label('birth_date', 'Fecha de Nacimiento:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('birth_date', $patient->birth_date, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('birth_date'))
                    <span class="help-block">
                    <strong>{{ $errors->first('birth_date')}}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                    {!! Form::label('gender', 'Género:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('gender', $patient->gender, ['class' => 'col-sm-8 control-label']) !!}
                    @if ($errors->has('gender'))
                    <span class="help-block">
                    <strong>{{ $errors->first('gender')}}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <hr class="" />

        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('patients.edit', ['patient' => $patient]) }}", class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"> Editar </i></a>
                <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                </button>
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