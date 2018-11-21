@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')

@stop

@section('content')
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Antecedentes del Paciente</b></h3>
    <div class="box-tools pull-right">
    <!-- This will cause the box to be removed when clicked -->
      <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      <!-- This will cause the box to collapse when clicked -->
      <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        {!! Form::open(['route' => 'patients.saverecord', 'method' => 'POST']) !!}
        {!! Form::hidden('patient_id', $patient->id) !!}

        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                {!! Form::label('full_name', 'Nombre Completo') !!}
                {!! Form::label('full_name', $patient->full_name, ['class' => 'form-control'], ['readonly']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('phone', 'Telefono') !!}
                {!! Form::label('phone', $patient->phone, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('address', 'Dirección') !!}
                {!! Form::label('address', $patient->address, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('typeblood_id', 'Tipo de Sangre') !!}
                {!! Form::select('typeblood_id', $typebloods, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('weight', 'Peso') !!}
                {!! Form::text('weight', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('obsertavion', 'Observaciones') !!}
                {!! Form::text('observation', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                {!! Form::submit('Siguiente', ['class' => 'btn btn-success'] ) !!}
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