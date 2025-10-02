<?php
use App\Models\Genero;
use App\Models\Ator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generos', function () {
$minhaVariavel = Genero::all(); // será o Select*from do BD
dd($minhaVariavel); // exibe as informações da variavel escolhida na tela

});
Route::get('/atores', function () {
    $minhaNovaVariavel = Ator::all(); // será o Select*from do BD
    dd($minhaNovaVariavel); // exibe as informações da variavel escolhida na tela
    
    });