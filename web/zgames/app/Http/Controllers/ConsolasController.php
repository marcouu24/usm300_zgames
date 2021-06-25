<?php

namespace App\Http\Controllers;
use App\Models\Consola;
use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas[]="Sony";
        $marcas[]="Microsoft";
        $marcas[]="Nintendo";
        $marcas[]="Sega";

        return $marcas;

    }
    //Fx ira abuscar todas las consolas q existen en la BD y las retorna
    public function getConsolas(){
        $consolas=Consola::all();
        return $consolas;
    }

    //Fx registra consola
    public function crearConsolas(Request $request){
        $input=$request->all(); //Genera arreglo con todo lo que mando la interfaz(js)
        $consola = new consola();
        $consola->nombre=$input["nombre"];
        $consola->marca=$input["marca"];
        $consola->anio=$input["anio"];

        $consola->save();
        return $consola;
    }

}
