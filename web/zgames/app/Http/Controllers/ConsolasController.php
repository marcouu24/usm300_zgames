<?php

namespace App\Http\Controllers;

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
}
