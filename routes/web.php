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

Route::get('/projetodesenvolvedores', function () {
    $projetos = Projeto::with(['desenvolvedores'])->get();
    foreach ($projetos as $projeto) {
        echo "Projeto: " . $projeto->nome . '<br>';
        echo "Horas: " . $projeto->estimativa_horas . '<br>';
        if(count($projeto->desenvolvedores) > 0) {
            echo 'Desenvolvedores: <br>';
            echo '<ul>';
            foreach ($projeto->desenvolvedores as $desenvolvedor) {
                echo '<li>';
                echo  'Nome Desenvolvedor: ' . $desenvolvedor->nome .  " | ";
                echo  'Cargo: ' . $desenvolvedor->cargo . " | ";
                echo  'Horas trabalhadas:  ' . $desenvolvedor->pivot->horas_semanais . " | ";
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '<hr>';
    }


});

Route::get('/alocar', function () {
    $projeto = Projeto::find(3);
    if (isset($projeto)) {
        //adicionando desenvolvedor no projeto e atribuindo horas na tabela alocacoes
        //$projeto->desenvolvedores()->attach(2, ['horas_semanais' => 20]);
        $projeto->desenvolvedores()->attach([
            6 => ['horas_semanais' => 30],
            7 => ['horas_semanais' => 30]
        ]);
        return "Desenvolvedores alocados com sucesso!";

    }
});

Route::get('/desalocar', function () {
    $projeto = Projeto::find(3);
    if (isset($projeto)) {
        //desalocando desenvolvedor do projeto
        //$projeto->desenvolvedores()->detach(3);
        //$projeto->desenvolvedores()->detach(7);
        $projeto->desenvolvedores()->detach([6, 7]);
        return "Desenvolvedores desalocados com sucesso!";

    }
});

Route::get('/projetos', function () {
    return view('welcome');
});

Route::get('/alocacoes', function () {
    return view('welcome');
});
