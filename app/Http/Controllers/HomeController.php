<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Pagina;
 
class HomeController extends Controller
{
    public function index()
    {
       
        return view('welcome');
    }
    public function empresa(){
 
$datos["nombre"]="Alejandro Góngora Escalante";
 
$datos["fecha"]="2026-12-15";
 
$datos["actividad"]="Desarrollo de Software";
 
$datos["descripcion_about"]="Empresa dedicada al desarrollo de software a la medida de sus clientes";
 
$datos["texto_ejemplo"]="Aquí va la descripción del texto de ejemplo";
 
// $usuarios=new Pagina();
  
//$datos["listadousuarios"]=$usuarios->ObtenerListado();
 
return view('empresa', $datos);
}
    }
