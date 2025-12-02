<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function getIndex()
    {
        return view('proyectos.index', array('proyectos' => Proyecto::$arrayProyectos));
    }


    public function getShow($id)
    {
        $estado="";
        $estadoBool=false;
        $calificacion=$this->arrayProyectos[$id]['metadatos']['calificacion'];
        if($calificacion>=5){
            $estado="Proyecto Aprobado";
            $estadoBool=true;
        }else{
            $estado="Proyecto Suspendido";
            $estadoBool=false;
        }





        return view('proyectos.show')
           ->with('proyecto',$this->arrayProyectos[$id])
           ->with('id',$id)
           ->with('calificacion',$estado)
           ->with('estadoBool',$estadoBool);

    }


    public function getCreate()
    {
        return view('proyectos.create');
    }


    public function getEdit($id)
    {

        return view('proyectos.edit')
           ->with('proyecto',$this->arrayProyectos[$id])
           ->with('id',$id);

    }





}
