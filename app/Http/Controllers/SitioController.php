<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SitioController extends Controller
{
    public function index(){
        //echo "Hola Mundo";
        return view('taller/index');
    }
    public function presentar(Request $request, $nombre){
        //echo "Hola " . $nombre;
         return view('taller/presentar',
                    ['elNombre'=>$nombre]);
    }

    public function formulario(){
        return view('taller/formulario');
    }
}
