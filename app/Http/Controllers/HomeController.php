<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
<<<<<<< HEAD

{
     public function getHome()
    {
         return redirect()->action([ProyectosController::class,'getIndex']);
    }

=======
{
    public function getHome()
    {
        return redirect()->action([ProyectosController::class, 'getIndex']);
    }
>>>>>>> c9e1976cd8207c87daae5a5f955e8e899160e80f
}
