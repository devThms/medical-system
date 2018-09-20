@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')


@stop
@section('content')
<div class="box box-warning">
<div class="box-header with-border">
    <h3 class="box-title"><b>Listado de Pacientes</b></h3>
    <div class="box-tools pull-right">
    <a class="btn btn-success pull-right" href="{{ url('/admin/patients/create') }}" role="button"> <i class="fa fa-plus-square" aria-hidden="true"></i></a>
    </div><!-- /.box-tools -->
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre del paciente</th>
            <th>E-mail</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Genero</th>
            <th>Fecha de nacimiento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->full_name }}</td>
            <td>{{ $patient->email }}</td>
            <td>{{ $patient->phone }}</td>
            <td>{{ $patient->address }}</td>
            <td>{{ $patient->gender }}</td>
            <td>{{ $patient->birth_date }}</td>
            <td>
            {!! Form::open(['route' => ['patients.destroy', $patient], 'method' => 'DELETE']) !!}
                <a href="{{ route('patients.edit', ['patient' => $patient]) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $patients->links() !!}
</div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>

function eliminar(e)
{
    $(e).preventDefault();
    swal({
  title: 'Eliminar?',
  text: "¿Esta seguro de eliminar el registro?",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.value) {
    swal(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
}

    console.log('Hi!');

</script>








@stop