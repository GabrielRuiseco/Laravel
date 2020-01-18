<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerpractica extends Controller
{
    //
    public function index(){
        echo "Hola mundo";
    }

    public function prueba($site2){
        return ["site2"=>"$site2"];
    }
}
