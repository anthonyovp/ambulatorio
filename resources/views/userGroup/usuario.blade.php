
@extends('persona.view')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<ol class="breadcrumb" style="width: 89%; margin-left: 12px">
                                <li><i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
                                </li>
                                <li class="active">Formulario de Usuario</li>
                            </ol>

<div class="col-lg-11">
                                <div class="portlet portlet-green">
                          <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Registrar Usuario</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a href="#formControls" data-parent="#accordion" data-toggle="collapse"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-collapse in" id="formControls" style="height: auto;">
                                        <div class="portlet-body" style="height:400px;">


{!! Form::open(['route'=>'admin.persona.create','method'=>'POST']) !!}

<div class="form-group">
<div class="col-sm-4">
{!! Form::label('cedula','Cedula',['class'=>'col-sm-12 control-label']) !!}
{!! Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Cédula','required']) !!}
</div>
</div>


 <div class="form-group">
<div class="col-sm-4">
{!! Form::Label('nombre','Nombre',['class'=>'col-sm-12 control-label']) !!}
{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
</div>
</div>

<div class="form-group">
<div class="col-sm-4">
{!! Form::label('apellido','Apellido',[ 'class'=>'col-sm-12 control-label']) !!}
{!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
 </div>
</div>



<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('telefono fijo','Telefono Fijo',['class'=>'col-sm-12 control-label']) !!}
{!! Form::text('telefono_fijo',null,['class'=>'form-control','placeholder'=>'Telefono Fijo','required']) !!}
</div>
</div>


 <div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::Label('telefono_celular','Telefono Celular',['class'=>'col-sm-12 control-label']) !!}
{!! Form::text('telefono_celular',null,['class'=>'form-control','placeholder'=>'Telefono Celular','required']) !!}
</div>
</div>

<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('correo','Correo',[ 'class'=>'col-sm-12 control-label']) !!}
{!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'Correo','required']) !!}
 </div>
</div>

 <div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::Label('estado','Estado',['class'=>'col-sm-12 control-label']) !!}
{!! Form::select('estado',['1'=>'Miranda','2'=>'Distrito Capital'],null,['class'=>'form-control','placeholder'=>'Estado','required']) !!}
</div>
</div>

<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('grupo','grupo',[ 'class'=>'col-sm-12 control-label']) !!}
{!! Form::select('grupo',['1'=>'Administrador','2'=>'Coordinador'],null,['class'=>'form-control','placeholder'=>'grupo','required']) !!}
 </div>
</div>


<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('usuario','Usuario',[ 'class'=>'col-sm-12 control-label']) !!}
{!! Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Usuario','required']) !!}
 </div>
</div>

<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('clave','Clave',[ 'class'=>'col-sm-12 control-label']) !!}
{!! Form::text('clave',null,['class'=>'form-control','placeholder'=>'Clave','required']) !!}
 </div>
</div>

<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('repetir_clave','Repetir Clave',['class'=>'col-sm-12 control-label']) !!}
{!! Form::text('repetir_clave',null,['class'=>'form-control','placeholder'=>'Repetir Clave','required']) !!}
 </div>
</div>

<div class="form-group">
<div class="col-sm-4">
<div class="form-group"> </div>
{!! Form::label('estatus','Estatus',[ 'class'=>'col-sm-12 control-label']) !!}
{!! Form::select('estatus',['1'=>'Activo','2'=>'Inactivo','3'=>'En Espera De Activación'],null,['class'=>'form-control','placeholder'=>'grupo','required']) !!}
 </div>
</div>


 <div class="form-group">
<div class="col-sm-11">
 <div class="form-group"> </div>
{!! Form::submit('Registrar',['class'=>'btn btn-success']); !!}
</div>
</div>

 <div class="form-group">
<div class="col-sm-1">
 <div class="form-group"> </div>
<a href="">
     <span class="btn btn-danger"> volver </span>
</a>
</div>
</div>


</div>
</div>
</div>
</div>





{!! Form::close() !!}
@endsection