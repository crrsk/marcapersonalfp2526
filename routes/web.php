<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Pantalla principal';
});

Route::get('/login', function () {
    return 'Login usuario';
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

Route::prefix('/proyectos')->group(function () {
    Route::get('/', function () {
    return 'Listado proyectos';
   });

   Route::get('/show/{id}', function ($id) {
    return 'Vista detalle proyecto '.$id;
   })->where(array('id' => '[0-9]+')) ;

  Route::get('/create', function () {
    return 'Añadir proyecto';
  });

  Route::get('/edit/{id}', function ($id) {
    return 'Modificar proyecto '.$id;
  })->where(array('id' => '[0-9]+'))  ;


});

Route::get('/perfil/{id?}', function ($id=null) {
    if($id){
	$mensaje= 'Visualizar el currículo de '.$id;
    }else{
    	$mensaje= 'Visualizar el currículo propio';
    }
   return $mensaje;
})->where(array('id' => '[0-9]+'))  ;


