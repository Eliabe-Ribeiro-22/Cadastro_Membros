<?php
use Illuminate\Support\Facades\Route;

// Rotas da barra de navegação
Route::get('/', function(){
    return view("igreja.inicio");
});
