<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(['nome' => 'Sistema de alocacao de recursos', 'estimativa_horas' => 140]);
        DB::table('projetos')->insert(['nome' => 'Sistema de controle de estoque', 'estimativa_horas' => 80]);
        DB::table('projetos')->insert(['nome' => 'Sistema de controle de vendas', 'estimativa_horas' => 120]);
        DB::table('projetos')->insert(['nome' => 'Sistema de controle de pessoas', 'estimativa_horas' => 100]);
    }
}
