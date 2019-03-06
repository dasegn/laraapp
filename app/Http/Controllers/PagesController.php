<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }


    public function inicio(){
        return view('inicio');
    }

    public function contacto(){
        return view('contacto');
    }

    public function saludo($nombre = "Invitado"){

        return view('saludo', compact('nombre'));
    }

    // public function mensajes(){
    //     // return "Procesando datos...";
    //     return $this->request->all();
    // }

    // public function mensajes(Request $request){
    //     // return $request->all();
    //     if($request->has('nombre') && !empty($request->input('nombre'))){
    //         return "Si tiene nombre. Es ". $request->input('nombre');
    //     }
    //     return "No tiene nombre";
    // }


    // public function mensajes(Request $request){
    //     $this->validate($request, [
    //         'nombre' => 'required',
    //         'email' => 'required|email'
    //     ]);
    //     return $request->all();
    // }


    // public function mensajes(\App\Http\Requests\CreateMessageRequest $request){
    public function mensajes(CreateMessageRequest $request){
        return $request->all();
    }

}
