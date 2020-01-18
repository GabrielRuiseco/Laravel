<?php

namespace App\Http\Controllers\Prueba;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function index(Request $request, string $nombre, string $sexo = "Masculino")
    {
        $color = (strtoupper($sexo) == "MASCULINO") ? "blue" : "pink";
        $letra = (strtoupper($sexo) == "MASCULINO") ? "withe" : "black";
//mayor de 18 palomita menor tacha en la celda de edad, color azul letra blanca para hombre, color rosa letra negra para mujer.

        $datos = [["nombre" => "Luis", "ap_paterno" => "Salas", "ap_materno" => "Ramos", "sexo" => "Masculino", "edad" => 17],
            ["nombre" => "Carlos", "ap_paterno" => "Gonzales", "ap_materno" => "Lopez", "sexo" => "Masculino", "edad" => 15],
            ["nombre" => "Elena", "ap_paterno" => "Prieto", "ap_materno" => "Goitia", "sexo" => "Femenino", "edad" => 18],
            ["nombre" => "Mariana", "ap_paterno" => "Gallegos", "ap_materno" => "Perez", "sexo" => "Feminino", "edad" => 22],
            ["nombre" => "Carlos", "ap_paterno" => "Rodriguez", "ap_materno" => "Orosco", "sexo" => "Masculino", "edad" => 25],
            ["nombre" => "Paola", "ap_paterno" => "Rojas", "ap_materno" => "Hernandez", "sexo" => "Femenino", "edad" => 23]];

        return \view("Prueba.Prueba", ["nombre" => $nombre, "sexo" => $sexo, "color" => $color, "datos" => $datos, "letra" => $letra]);
    }

    public function info(Request $request)
    {
//        return $request->all();
        return view("info", ["nombre" => $request->nombre, "ap_pat" => $request->ap_paterno, "ap_mat" => $request->ap_materno]);
    }

    public function form()
    {
        $datos = [["nombre" => "Luis", "ap_paterno" => "Salas", "ap_materno" => "Ramos", "sexo" => "Masculino", "edad" => 17],
            ["nombre" => "Carlos", "ap_paterno" => "Gonzales", "ap_materno" => "Lopez", "sexo" => "Masculino", "edad" => 15],
            ["nombre" => "Elena", "ap_paterno" => "Prieto", "ap_materno" => "Goitia", "sexo" => "Femenino", "edad" => 18],
            ["nombre" => "Mariana", "ap_paterno" => "Gallegos", "ap_materno" => "Perez", "sexo" => "Feminino", "edad" => 22],
            ["nombre" => "Carlos", "ap_paterno" => "Rodriguez", "ap_materno" => "Orosco", "sexo" => "Masculino", "edad" => 25],
            ["nombre" => "Paola", "ap_paterno" => "Rojas", "ap_materno" => "Hernandez", "sexo" => "Femenino", "edad" => 23]];

        return view("Formulario", ["datos" => json_encode($datos)]);
    }
}
