@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')


@stop
@section('content')
<div class="box box-success">
<div class="box-header with-border">
    <h3 class="box-title"><b>Listado de Pacientes</b></h3>
    <div class="box-tools pull-right">
    <a href="{{ url('/admin/patients/create') }}" class="btn btn-success pull-right" role="button"> <i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo</a>
    </div><!-- /.box-tools -->
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre del paciente</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->full_name }}</td>
            <td>{{ $patient->phone }}</td>
            <td>{{ $patient->address }}</td>
            <td>

                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"> Acciones </i><span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('patients.show', ['patient' => $patient]) }}"><i class="fa fa-address-card" aria-hidden="true"> Detalles </i></a></li>
                        <li><a href="{{ route('patients.record', ['patient' => $patient]) }}"><i class="fa fa-folder" aria-hidden="true"> Antecedentes </i></a></li>
                        {{-- <li role="separator" class="divider"></li>
                        <li><a href="#"> </a></li> --}}
                    </ul>
                </div>

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