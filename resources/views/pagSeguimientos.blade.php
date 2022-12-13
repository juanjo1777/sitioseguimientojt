@extends('pagPlantilla')
<p></p>

@section('titulo')
<p></p>
  <h1 class=" btn-warning">Pagina de Seguimiento</h1>
@endsection

@section('seccion')
@if(session('msj'))
       <div class="alert alert-success">
           {{ session('msj')}}
    </div>
    @endif
    <p></p>
<h3 class="btn btn-warning btn-lg">Registro de Seguimiento</h3>
<p></p>
<form action="{{ route('Seguimiento.xRegistrarseg')}}" method="post" class="d-grid pag-2">
  @csrf
  <label class="btn btn-info" for="Digita el codigo del estudiante">Digita el Codigo del Estudiante</label>
<input type="text" name="idEst" placeholder="Código" value="{{ old('idEst')}}" class="form-control mb-2"> 
<label class="btn btn-info" for="Digita el codigo deljfg">Seleciona si Trabaja</label>
<select name="traAct" class="form-control mb-2">
      <option value="">Seleccione</option>
      <option value="si">si</option>
      <option value="no">no</option>
  </select>
  <label class="btn btn-info" for="Digitaigo deljfg">Oficio Actual</label>
  <select name="ofiAct" class="form-control mb-2">
      <option value="">Seleccione..</option>
      @for($i=1; $i < 12; $i++)
      <option value="{{$i}}"> {{$i}}CP</option>
      @endfor
  </select>
  <label class="btn btn-info" for="Ditaigo deljfg">Estado de Satisfacion</label>
  <select name="satEst" class="form-control mb-2">
      <option value="">Seleccione</option>
      <option value="No esta satisfecho">No esta satisfecho</option>
      <option value="Regular">Regular</option>
      <option value="Bueno">Bueno</option>
      <option value="Muy Bueno">MuyBueno</option>
  </select>
  <label class="btn btn-info" for="Dippgitaigo deljfg">Digite la Fecha de Seguimiento</label>
  <input type="date" name="fecSeg" placeholder="Fecha de Seguimiento" value="{{ old('fecSeg')}}" class="form-control mb-2">
  <label class="btn btn-info" for="Dippooogitaigo deljfg">Digite el Estado Seguimiento</label>
  <select name="estSeg" class="form-control mb-2">
      <option value="">Seleccione</option>
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
  </select>
  <button class="btn btn-danger" type="submit">Agregar</button>
  <p></p>
</form>
      <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Codigo Alumno</th>
      <th scope="col">Trabajo Actual</th>
      <th scope="col">Oficio Actual</th>
      <th scope="col">Sat Estudiantil</th>
      <th scope="col">Fecha Seg</th>
      <th scope="col">Est Seguimiento</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach ($xAlumnosseguimiento as $item) 
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>
      <a href="{{ route('Seguimiento.xDetalleseg', $item->id) }}">
      {{$item->idEst}}
      </a>
      </td>
      <td>{{$item->traAct}}</td>
      <td>{{$item->ofiAct}}</td>
      <td>{{$item->satEst}}</td>
      <td>{{$item->fecSeg}}</td>
      <td>{{$item->estSeg}}</td>
      <td>
          <form action="{{ route('Seguimiento.xEliminarseg',$item->id) }}" method="post" class="d-inline">
          @method('DELETE')
          @csrf
        <button type="submit" class="btn btn-danger btn-sm">x</button>
        </form>
       <a class="btn btn-warning btn-sm" href="{{ route('Seguimiento.xActualizarseg', $item->id) }}">
        A</td>
    </tr>
  @endforeach
  
  </tbody>
</table> 
{{ $xAlumnosseguimiento->links() }}   

@endsection



