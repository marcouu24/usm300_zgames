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
    public function crearConsolas(){
        $consola = new consola();
        $consola->nombre="PS5";
        $consola->marca="Nintewndo";
        $consola->anio=2021;

        $consola->save();
        return $consola;
    }

}
