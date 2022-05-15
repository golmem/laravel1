<?php

use Illuminate\Support\Facades\Route;

//la plus simple facon de definir une route
Route::view('/','pages/home')->name('app_home');

//deuxieme facon d'ecrire une route
//Route::get('/',fn()=>view('pages/home'))->name('app_home');

/*Route::get('/',function(){
    return view('pages/home');
})->name('app_home');*/

Route::get('/about-us',function(){
    return view('pages/about');
})->name('app_about');//affectation d'un nom à une de nos route
//php atisan route:list donne la liste des routes et les noms etant affectés
