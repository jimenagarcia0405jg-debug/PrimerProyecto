<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
 
Route::get('/', function () {
   return view ('welcome');
   //return "Jimena Guadalupe Gracia Colli";
 
})->name('vista_inicio');
 
Route::get('/principal', function () {
  $datos=["titulo"=>"Tienda Virtual -Vista Principal",
  "mensaje"=>"Bienvenido
  a la vista principal",
  "Autor"=>"Jimena"];
   return view ('principal',$datos);
})->name('principal');

Route::get ('/mensaje/{id}', function($id){
    return "Mostrando el mensaje: {$id}";
})->where('id','[0-9]+');

Route::get('/contact',function(){
   $nombre="Jimena Guadalupe Garcia Colli";
   return view('contact',['nombre'=>$nombre, 'carrera'=>'Admnistración de tecnologias de la información']);
})->name('contact');

Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');

Route::get('/pagina', [HomeController::class, 'index'])->name("pagina.index");
 
Route::get('/pagina/create', [HomeController::class, 'nuevapagina'])->name("pagina.create");
 
Route::post('/pagina', [HomeController::class, 'guardarpagina'])->name('pagina.nueva');