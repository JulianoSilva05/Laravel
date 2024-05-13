<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home');
});
*/
//há duas formas de chamar uma view. A primeira é por função, a segunda chamando direto a view
Route::view('/', 'home');

Route::get('/clientes', function () {
    echo "Pagina com os clientes cadastrados";
});

Route::get('/clientes/{codigo}', function ($codigo) {
    echo "Essa é a pagina do cliente ".$codigo ;
});

Route::get('/clientes/{codigo}/nome/{nome}', function ($codigo,$nome) {
    echo "Essa é a pagina do cliente ".$codigo. " - " .$nome;
});


