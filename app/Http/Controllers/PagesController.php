<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Seguimiento;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');

    }
    public function fnEstDetalle($id){
        $xDetAlumnos=Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle',compact('xDetAlumnos'));

    }
    
    public function fnEstActualizar($id){
        $xActAlumnos=Estudiante::findOrFail($id);
        return view('Estudiante.pagActualizar',compact('xActAlumnos')); 
    }
    public function fnEliminar($id){
        $deleteAlumno=Estudiante::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj','Se elimino con exito..');

    }
        public function fnUpdate(Request $request,$id){
            //return $request;
            $xUpdateAlumnos=Estudiante::findOrFail($id);
    
        
    
            $xUpdateAlumnos->codEst = $request->codEst;
            $xUpdateAlumnos->nomEst = $request->nomEst;
            $xUpdateAlumnos->apeEst = $request->apeEst;
            $xUpdateAlumnos->fnaEst = $request->fnaEst;
            $xUpdateAlumnos->turMat = $request->turMat;
            $xUpdateAlumnos->semMat = $request->semMat;
            $xUpdateAlumnos->estMat = $request->estMat;
    
            $xUpdateAlumnos->save();
            //return view('pagLista');
            return back()->with('msj','Se actualizo con exito..');
    
        }

    

    

    public function fnRegistrar(Request $request){
        //return $request;

        $request -> validate([
            'codEst' =>'required',
            'nomEst' =>'required',
            'apeEst' =>'required',
            'fnaEst' =>'required',
            'turMat' =>'required',
            'semMat' =>'required',
            'estMat' =>'required',
        ]);


        $nuevoEstudiante = new Estudiante;

        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;

        $nuevoEstudiante->save();
        //return view('pagLista');
        return back()->with('msj','Se registro con exito..');

    }

    public function fnLista(){
        $xAlumnos=Estudiante::paginate(4);
        return view('pagLista',compact('xAlumnos'));

    }
    public function fnSeguimientos(){
        $xAlumnosseguimiento=Seguimiento::paginate(3);
        return view('pagSeguimientos',compact ('xAlumnosseguimiento'));

    }
    public function fnSegDetalle($id){
        $xDetAlumonosseguimiento=Seguimiento::findOrFail($id);
        return view('Seguimiento.pagDetalleseg',compact ('xDetAlumonosseguimiento'));
    

    }
    public function fnSegRegistrar(Request $request){
        //return $request;

        $request -> validate([
            'idEst' =>'required',
            'traAct' =>'required',
            'ofiAct' =>'required',
            'satEst' =>'required',
            'fecSeg' =>'required',
            'estSeg' =>'required',
        ]);


        $nuevoEstudianteseg = new Seguimiento;

        $nuevoEstudianteseg->idEst = $request->idEst;
        $nuevoEstudianteseg->traAct = $request->traAct;
        $nuevoEstudianteseg->ofiAct = $request->ofiAct;
        $nuevoEstudianteseg->satEst = $request->satEst;
        $nuevoEstudianteseg->fecSeg = $request->fecSeg;
        $nuevoEstudianteseg->estSeg = $request->estSeg;
    

        $nuevoEstudianteseg->save();
        //return view('pagLista');
        return back()->with('msj','Se registro con exito..');

    }
    public function fnSegActualizar($id){
        $xActAlumnosseguimiento=Seguimiento::findOrFail($id);
        return view('Seguimiento.pagActualizarseg',compact('xActAlumnosseguimiento')); 
    }
    public function fnUpdateseg(Request $request,$id){
        //return $request;
        $xUpdatesegAlumnos=Seguimiento::findOrFail($id);

    

        $xUpdatesegAlumnos->idEst = $request->idEst;
        $xUpdatesegAlumnos->traAct = $request->traAct;
        $xUpdatesegAlumnos->ofiAct = $request->ofiAct;
        $xUpdatesegAlumnos->satEst = $request->satEst;
        $xUpdatesegAlumnos->fecSeg = $request->fecSeg;
        $xUpdatesegAlumnos->estSeg = $request->estSeg;

        $xUpdatesegAlumnos->save();
        //return view('pagLista');
        return back()->with('msj','Se actualizo con exito..');

    }
    public function fnSegEliminar($id){
        $deletesegAlumnos=Seguimiento::findOrFail($id);
        $deletesegAlumnos->delete();
        return back()->with('msj','Se elimino con exito..');

    }
    public function fnGaleria($numero=0){
        $valor=$numero;
        $otro=25;
        //return view('pagGaleria', ['valor' => $numero, 'otro' => 25]) ;
        return view('pagGaleria',compact ('valor','otro' )) ;

    }
}
