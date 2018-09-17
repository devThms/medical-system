@extends('adminlte::page')
@section('title', 'Patients')
@section('content_header')
<a class="btn btn-success pull-right" href="{{ url('/admin/patients/create') }}" role="button">Nuevo</a>
<h1 class="text-primary">Listado de pacientes</h1>
<br />




@stop
@section('content')
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
                <a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $patients->links() !!}
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');

</script>








@stop