@extends('pagPlantilla')

@section('titulo')
  <h1 class="display-4">Pagina de Actualizar</h1>
@endsection

@section('seccion')

  <h3 class="btn btn-warning btn-lg">Actualizacion de Datos de Seguimento </h3>
  <p></p>
  @if(session('msj'))
       <div class="alert alert-success">
           {{ session('msj')}}
    </div>
    @endif
<form action="{{ route('Seguimiento.xUpdateseg', $xActAlumnosseguimiento->id)}}" method="post" class="d-grid pag-2">
   @method('PUT')
   @csrf
   @error('idEst')
      <div class="alert alert-danger">
           El codigo es requerido
      </div>
   @enderror
   <label class="btn btn-info" for="Digita el codigo del estudiante">Actualize el Codigo del Estudiante</label>
  <input type="text" name="idEst" placeholder="Código" value="{{ $xActAlumnosseguimiento->idEst }}" class="form-control mb-2">
  <label class="btn btn-info" for="Digita el codigo del estudiante">Actualizesi Trabaja</label> 
  <select name="traAct" class="form-control mb-2">
      <option value="">Seleccione</option>
      <option value="si"@if ($xActAlumnosseguimiento->traAct == "si") {{ "SELECTED" }} @endif) >si </option>
      <option value="no"@if ($xActAlumnosseguimiento->traAct == "no") {{ "SELECTED" }} @endif) >no </option>
  </select>
  <label class="btn btn-info" for="Digita el codigo del estudiante">Actulize el Oficio Actual</label>
  <select name="ofiAct" class="form-control mb-2">
      <option value="">Seleccione..</option>
      @for($i=1; $i < 12; $i++)
      <option value="{{$i}}"@if ($xActAlumnosseguimiento->ofiAct == $i) {{ "SELECTED" }} @endif) >{{$i}}CP</option>
      @endfor
  </select>
  <label class="btn btn-info" for="Digita el codigo del estudiante">Actualize la Satisfacion</label>
  <select name="satEst" class="form-control mb-2">
      <option value="">Seleccione</option>
      <option value="No esta satistefcho"@if ($xActAlumnosseguimiento->satEst == "No esta satisfecho") {{ "SELECTED" }} @endif) >No esta satisfecho </option>
      <option value="Regular"@if ($xActAlumnosseguimiento->satEst == "Regular") {{ "SELECTED" }} @endif) >Regular </option>
      <option value="Bueno"@if ($xActAlumnosseguimiento->satEst == "Bueno") {{ "SELECTED" }} @endif) >Bueno </option>
      <option value="Muy bueno"@if ($xActAlumnosseguimiento->satEst == "Muy bueno") {{ "SELECTED" }} @endif) >Muy bueno </option>
  </select>
  <label class="btn btn-info" for="Digita el codigo del estudiante">Actualize la Fecha de Seguimiento</label>
  <input type="date" name="fecSeg" placeholder="Fecha de Nacimiento" value="{{ $xActAlumnosseguimiento->fecSeg}}" class="form-control mb-2">
  <label class="btn btn-info" for="Digita el codigo del estudiante">Actualize el Estado de Seguimiento</label>
  <select name="estSeg" class="form-control mb-2">
    <option value="">Seleccione..</option>
    <option value="1"@if ($xActAlumnosseguimiento->estSeg == "1"){{ "SELECTED" }} @endif) >Activo</option>
    <option value="0"@if ($xActAlumnosseguimiento->estSeg == "0"){{ "SELECTED" }} @endif) >Inactivo</option>   
  </select>
  <button class="btn btn-danger" type="submit">Actualizar</button>
  <p></p>
  </form>

    

@endsection
