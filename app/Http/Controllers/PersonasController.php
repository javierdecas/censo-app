<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function crear(Request $req)
    {
        die("Hola, has llegado bien.");
        // $respuesta = ["status"];
        
        // $datos = json_decode($datos);
        // //Validar datos

        // $persona = new Persona();

        // $persona->nombre = $datos->nombre;
        // $persona->dni = $datos->dni;
        // $persona->telefono = $datos->telefono;
        // $persona->direccion = $datos->direccion;

        // if(isset($datos->email))
        // {
        //     $persona->email = $datos->email;

        //     //Completa resto de campos
        //     try
        //     {
        //         $persona->save();
        //         $respuesta['msg'] = "Persona guardada con id ".$persona;
        //     }
        //     catch(\Exception $e)
        //     {
        //         $respuesta['msg'] = $e->getMessage();
        //         $respuesta['status'] = 0;
        //     }
        //     return reponse();
        //}
    }
}