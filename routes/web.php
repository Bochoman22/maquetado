<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/config', function () {
    return view('config');
});

Route::get('/crearexamen', function () {
    return view('crearexamen');
});

Route::get('/creartarea', function () {
    return view('creartarea');
});

Route::get('/creartrabajo', function () {
    return view('creartrabajo');
});

Route::get('/editarexamen', function () {
    return view('editarexamen');
});

Route::get('/editartarea', function () {
    return view('editartarea');
});

Route::get('/editartrabajo', function () {
    return view('editartrabajo');
});

Route::get('/editarusuario', function () {
    return view('editarUsu');
});

Route::get('/eliminarusuario', function () {
    return view('eliminarUsu');
});

Route::get('/enviarcorreo', function () {
    return view('enviar_correo');
});

Route::get('/grafica', function () {
    return view('grafica');
});

Route::get('/guardarusuario', function () {
    return view('guardar_usuario');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/insertarusuario', function () {
    return view('insertarUsu');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/pie', function () {
    return view('pie');
});

Route::get('/recuperar', function () {
    return view('recuperar');
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/resetpassword', function () {
    return view('reset_password');
});

Route::get('/restablecer', function () {
    return view('restablecer');
});

Route::get('/salir', function () {
    return view('salir');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Route::get('/verificarsesion', function () {
    return view('verificar_sesion');
});
