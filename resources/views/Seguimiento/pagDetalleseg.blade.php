@extends('pagPlantilla')

@section('titulo')
  <h1 class="display-4">Pagina de Lista</h1>
@endsection

@section('seccion')

  <h3> Detalle </h3>
 
   <p>Id                  : {{ $xDetAlumonosseguimiento -> id }}</p>
   <p>Código              : {{ $xDetAlumonosseguimiento -> idEst }}</p>
   <p>Trabajo Actual : {{ $xDetAlumonosseguimiento -> traAct}}</p>
   <p>Oficio Actual    : {{ $xDetAlumonosseguimiento -> ofiAct }}</p>
   <p>Sat Estudiantil               : {{ $xDetAlumonosseguimiento -> satEst }}</p>
   <p>Fecha Seg            : {{ $xDetAlumonosseguimiento -> fecSeg }}</p>
   <p>Estado de seg.   : {{ $xDetAlumonosseguimiento -> estSeg }}</p>


    

@endsection
