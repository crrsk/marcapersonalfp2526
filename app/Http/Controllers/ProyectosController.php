<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function getIndex()
    {
        return view('proyectos.index', array('proyectos' => Proyecto::all()));
    }


    public function getShow($id)
    {
        $estado="";
        $estadoBool=false;
        $calificacion=unserialize($proyecto->metadatos)["calificacion"];

        if($calificacion>=5){
            $estado="Proyecto aprobado";
            $estadoBool=true;
        }else{
            $estado="Proyecto suspendido";
            $estadoBool=false;
        }





        return view('proyectos.show')
           ->with('proyecto',Proyecto::findOrFail($id))
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
           ->with('proyecto',Proyecto::findOrFail($id))
           ->with('id',$id);

    }





}
