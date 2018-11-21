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

        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    {!! Form::label('full_name', 'Nombre:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('full_name', $patient->full_name, ['class' => 'col-sm-8 control-label']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Telefono:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('phone', $patient->phone, ['class' => 'col-sm-8 control-label']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address', 'Direccion:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('address', $patient->address, ['class' => 'col-sm-8 control-label']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('typeblood_id', 'Tipo de Sangre:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('typeblood_id', $record->typeblood->description, ['class' => 'col-sm-8 control-label']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('weight', 'Peso:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('weight', $record->weight, ['class' => 'col-sm-8 control-label']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('observation', 'Observación:', ['class' => 'col-sm-4 control-label']) !!}
                    {!! Form::label('observation', $record->observation, ['class' => 'col-sm-8 control-label']) !!}
                </div>
            </div>
        </div>

	</div>
</div>
<div class="row">
    <div class="col-md-7">

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Medicamentos</b></h3>
            <div class="box-tools pull-right">
            <!-- This will cause the box to be added when clicked -->
            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modalMedicine"><i class="fa fa-plus"></i></button>
            <!-- This will cause the box to be removed when clicked -->
            <button class="btn btn-xs btn-danger" title="Eliminar"><i class="fa fa-times"></i></button>
            </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">

            <table id="tblMedicine" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <th>id</th>
                        <th>Descripcion</th>
                        <th>Sugerido por</th>
                    </tr>
                </thead>
            </table>
            </div>
        </div>
    </div>

    <div class="col-md-5">

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Enfermedades</b></h3>
            <div class="box-tools pull-right">
            <!-- This will cause the box to be added when clicked -->
            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modalDisease"><i class="fa fa-plus"></i></button>
            <!-- This will cause the box to be removed when clicked -->
            <button class="btn btn-xs btn-danger" title="Eliminar"><i class="fa fa-times"></i></button>
            </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Descripcion</th>
                        <th>Observación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Fiebre</td>
                        <td>Observación #1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Temperatura</td>
                        <td>Observación #2</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="col-md-5">

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Alergias</b></h3>
            <div class="box-tools pull-right">
            <!-- This will cause the box to be added when clicked -->
            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modalAllergy"><i class="fa fa-plus"></i></button>
            <!-- This will cause the box to be removed when clicked -->
            <button class="btn btn-xs btn-danger" title="Eliminar"><i class="fa fa-times"></i></button>
            </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Descripcion</th>
                        <th>Observacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Penicilina</td>
                        <td>Sin comentarios</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Polvo</td>
                        <td>Sin comentarios</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal para la asignación de medicamentos al paciente -->
<div class="modal fade" id="modalMedicine" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Asignar Medicamentos</h3>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}

            {!! Form::hidden('record_id', $record->id, ['id' => 'record_id', 'class' => 'form-control']) !!}

            <div id="msj-success-medicine" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Medicamento agregado correctamente</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('medicine_id', 'Medicamento:') !!}
                        <div class="input-group">
                            {!! Form::select('medicine_id', $medicines, null, ['style' => 'width: 100%', 'id' => 'medicine_id', 'class' => 'form-control']) !!}
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddMedicine"><i class="fa fa-plus"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('suggested', 'Sugerido por:') !!}
                    {!! Form::text('suggested', null, ['id' => 'suggested', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_addmedicine_records">Guardar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Modal para el registro de medicamentos -->
<div class="modal fade" id="modalAddMedicine" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Agregar Medicamentos</h3>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('description', 'Descripcion:') !!}
                    {!! Form::text('description', null, ['id' => 'description-medicine', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('observation', 'Observaciones:') !!}
                    {!! Form::text('observation', null, ['id' => 'observation-medicine', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="btn_addmedicine">Guardar</button>
      </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Modal para la asignación de enfermedades al paciente -->
<div class="modal fade" id="modalDisease" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Asignar Enfermedades o Padecimientos</h3>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}

            {!! Form::hidden('record_id', $record->id, ['id' => 'record_id', 'class' => 'form-control']) !!}

            <div id="msj-success-disease" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Enfermedad agregada correctamente</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('disease_id', 'Enfermedad:') !!}
                        <div class="input-group">
                            {!! Form::select('disease_id', $diseases, null, ['id' => 'disease_id', 'class' => 'form-control']) !!}
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddDisease"><i class="fa fa-plus"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_add_disease_records">Guardar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Modal para el registro de enfermedades -->
<div class="modal fade" id="modalAddDisease" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Enfermedades o Padecimientos</h3>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('description', 'Descripcion:') !!}
                    {!! Form::text('description', null, ['id' => 'description-disease', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('observation', 'Observaciones:') !!}
                    {!! Form::text('observation', null, ['id' => 'observation-disease', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="btn_add_disease">Guardar</button>
      </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>


<!-- Modal para la asignación de alergias al paciente -->
<div class="modal fade" id="modalAllergy" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Asignar Alergias</h3>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}

            {!! Form::hidden('record_id', $record->id, ['id' => 'record_id', 'class' => 'form-control']) !!}

            <div id="msj-success-allergy" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <strong>Alergia agregada correctamente</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('allergy_id', 'Alergia:') !!}
                        <div class="input-group">
                            {!! Form::select('allergy_id', $allergies, null, ['id' => 'allergy_id', 'class' => 'form-control']) !!}
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddAllergy"><i class="fa fa-plus"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_add_allergy_records">Guardar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Modal para el registro de alergias -->
<div class="modal fade" id="modalAddAllergy" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Alergias</h3>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('description', 'Descripcion:') !!}
                    {!! Form::text('description', null, ['id' => 'description-allergy', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::label('observation', 'Observaciones:') !!}
                    {!! Form::text('observation', null, ['id' => 'observation-allergy', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="btn_add_allergy">Guardar</button>
      </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>

    $(document).ready(function() {

        $('#medicine_id').select2({
            dropdownParent: $('#modalMedicine')
        });
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });


    /**
    * Acciones de los modales de Medicamentos
    */
    $("#btn_addmedicine").click(function(e){

        e.preventDefault();

        $("#modalAddMedicine").modal({
            backdrop: 'static',
            show: true
        });

        var descrp = $("#description-medicine").val();
        var obsrv = $("#observation-medicine").val();

        $.ajax({
            url: '/admin/patients/addmedicine',
            type: 'POST',
            dataType: 'json',
            data: {
                description: descrp,
                observation: obsrv
            },

            success:function(data){
                console.table(data);
                /* var datos = eval(data); */
                $("#modalAddMedicine").modal("hide");
                $("#msj-success-medicine").fadeIn();
                $("#medicine_id").append("<option value = '" + data.id+ "' selected>" + data.description + "</option>");
            },
            error:function(error) {
                console.log(error);
            }
        });
    });

    $("#btn_addmedicine_records").click(function(e){

        e.preventDefault();

        $("#modalMedicine").modal({
            backdrop: 'static',
            show: true
        });

        var record = $("#record_id").val();
        var medicine = $("#medicine_id").val();
        var sugerido = $("#suggested").val();

        $.ajax({
            url: '/admin/patients/addmedicine-record',
            type: 'POST',
            dataType: 'json',
            data: {
                record_id: record,
                medicine_id: medicine,
                suggested: sugerido
            },

            success:function(){
                $("#modalMedicine").modal("hide");
            }
        });
    });


    /**
    * Acciones de los modales de Enfermedades o Padecimientos
    */
    $("#btn_add_disease").click(function(e){

        e.preventDefault();

        $("#modalAddDisease").modal({
            backdrop: 'static',
            show: true
        });

        var descrp = $("#description-disease").val();
        var obsrv = $("#observation-disease").val();

        $.ajax({
            url: '/admin/patients/add-disease',
            type: 'POST',
            dataType: 'json',
            data: {
                description: descrp,
                observation: obsrv
            },

            success:function(response){
                var datos = eval(response);
                $("#modalAddDisease").modal("hide");
                $("#msj-success-disease").fadeIn();
                $("#disease_id").append("<option value = '" + datos[0].id+ "' selected>" + datos[0].description + "</option>");
            }
        });
    });

    $("#btn_add_disease_records").click(function(e){

        e.preventDefault();

        $("#modalDisease").modal({
            backdrop: 'static',
            show: true
        });

        var record = $("#record_id").val();
        var disease = $("#disease_id").val();

        $.ajax({
            url: '/admin/patients/add-disease-record',
            type: 'POST',
            dataType: 'json',
            data: {
                record_id: record,
                disease_id: disease
            },

            success:function(){
                $("#modalDisease").modal("hide");
            }
        });
    });


    /**
    * Acciones de los modales de Alergias
    */
    $("#btn_add_allergy").click(function(e){

        e.preventDefault();

        $("#modalAddAllergy").modal({
            backdrop: 'static',
            show: true
        });

        var descrp = $("#description-allergy").val();
        var obsrv = $("#observation-allergy").val();

        $.ajax({
            url: '/admin/patients/add-allergy',
            type: 'POST',
            dataType: 'json',
            data: {
                description: descrp,
                observation: obsrv
            },

            success:function(response){
                var datos = eval(response);
                $("#modalAddAllergy").modal("hide");
                $("#msj-success-allergy").fadeIn();
                $("#allergy_id").append("<option value = '" + datos[0].id+ "' selected>" + datos[0].description + "</option>");
            }
        });
    });

    $("#btn_add_allergy_records").click(function(e){

        e.preventDefault();

        $("#modalAllergy").modal({
            backdrop: 'static',
            show: true
        });

        var record = $("#record_id").val();
        var allergy = $("#allergy_id").val();

        $.ajax({
            url: '/admin/patients/add-allergy-record',
            type: 'POST',
            dataType: 'json',
            data: {
                record_id: record,
                allergy_id: allergy
            },

            success:function(){
                $("#modalAllergy").modal("hide");
            }
        });
    });

</script>




@stop