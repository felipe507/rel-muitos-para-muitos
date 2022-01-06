<?php

use App\Projeto;
use App\Desenvolvedor;
use App\locacao;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/desenvolvedores', function () {
    $desenvoldeores = Desenvolvedor::with(['projetos'])->get();
    foreach ($desenvoldeores as $desenvolvedor) {
        echo "Desenvolvedor: " . $desenvolvedor->nome . '<br>';
        echo "Cargo: " . $desenvolvedor->cargo . '<br>';
        if(count($desenvolvedor->projetos) > 0) {
            echo 'Projetos: <br>';
            echo '<ul>';
            foreach ($desenvolvedor->projetos as $projeto) {
                echo '<li>';
                echo  'Nome projeto: ' . $projeto->nome .  " | ";
                echo  'Horas projetos:' . $projeto->estimativa_horas . " |";
                echo  'Horas trabalahdas:  ' . $projeto->pivot->horas_semanais . " |";
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '<hr>';
    }


});

Route::get('/projetos', function () {
    return view('welcome');
});

Route::get('/alocacoes', function () {
    return view('welcome');
});
