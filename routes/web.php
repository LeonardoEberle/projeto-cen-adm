<?php

use Illuminate\Support\Facades\Route;
//Paginas 
// -> login 
// -> home 
// -> gerencia usuario 
// -> Cadastrar usuario 
// -> gerenciar conteudo 
// -> editar conteudo(lista) 
// -> criar conteudo

Route::get(
    '/adm', function (){
        echo "Login";
    }
);

Route::get(
    '/home', function (){
        return view('home'); 
    }
);

Route::get(
    '/usuario', function (){
        return view('Usuario');    }
);

Route::get(
    '/conteudo ', function (){
        return view('Conteudo');    }
);

Route::get(
    '/perfil ', function (){
        return view('Perfil');    }
);
Route::get(
    '/login ', function (){
        return view('Login');    }
);