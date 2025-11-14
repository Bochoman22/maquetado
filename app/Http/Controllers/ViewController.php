<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcome()   { return view('welcome'); }
    public function index()     { return view('index'); }
    public function login()     { return view('login'); }
    public function registro()  { return view('registro'); }

    public function config()            { return view('config'); }
    public function crearexamen()       { return view('crearexamen'); }
    public function creartarea()        { return view('creartarea'); }
    public function creartrabajo()      { return view('creartrabajo'); }
    
    public function editarexamen()      { return view('editarexamen'); }
    public function editartarea()       { return view('editartarea'); }
    public function editartrabajo()     { return view('editartrabajo'); }
    public function editarusuario()     { return view('editarUsu'); }

    public function eliminarusuario()   { return view('eliminarUsu'); }
    public function enviarcorreo()      { return view('enviar_correo'); }
    public function grafica()           { return view('grafica'); }
    public function guardarusuario()    { return view('guardar_usuario'); }

    public function inicio()            { return view('inicio'); }
    public function insertarusuario()   { return view('insertarUsu'); }
    public function logout()            { return view('logout'); }
    public function menu()              { return view('menu'); }

    public function pie()               { return view('pie'); }
    public function recuperar()         { return view('recuperar'); }
    public function reportes()          { return view('reportes'); }
    public function resetpassword()     { return view('reset_password'); }

    public function restablecer()       { return view('restablecer'); }
    public function salir()             { return view('salir'); }
    public function usuario()           { return view('usuario'); }
    public function verificarsesion()   { return view('verificar_sesion'); }
}
