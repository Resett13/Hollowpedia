<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index'); // Certifique-se de que o arquivo 'personagens.blade.php' existe em resources/views/
})->name('Index');


Route::get('/personagens', function () {
    return view('personagens'); // Certifique-se de que o arquivo 'personagens.blade.php' existe em resources/views/
})->name('Personagens');

Route::get('/inimigos', function () {
    return view('inimigos'); // Certifique-se de que o arquivo 'inimigos.blade.php' existe em resources/views/
})->name('Inimigos');

Route::get('/historia', function () {
    return view('historia'); // Certifique-se de que o arquivo 'historia.blade.php' existe em resources/views/
})->name('Historia');

Route::get('/itens', function () {
    return view('itens'); // Certifique-se de que o arquivo 'itens.blade.php' existe em resources/views/
})->name('Itens');

Route::get('/conquistas', function () {
    return view('conquistas'); // Certifique-se de que o arquivo 'conquistas.blade.php' existe em resources/views/
})->name('Conquistas');
