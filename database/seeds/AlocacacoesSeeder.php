<?php

use Illuminate\Database\Seeder;

class AlocacacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacoes')->insert(['projeto_id' => 1, 'desenvolvedor_id' => 1, 'horas_semanais' => 10]);
        DB::table('alocacoes')->insert(['projeto_id' => 2, 'desenvolvedor_id' => 2, 'horas_semanais' => 45]);
        DB::table('alocacoes')->insert(['projeto_id' => 3, 'desenvolvedor_id' => 3, 'horas_semanais' => 35]);
        DB::table('alocacoes')->insert(['projeto_id' => 4, 'desenvolvedor_id' => 4, 'horas_semanais' => 20]);
        DB::table('alocacoes')->insert(['projeto_id' => 3, 'desenvolvedor_id' => 5, 'horas_semanais' => 30]);
        DB::table('alocacoes')->insert(['projeto_id' => 2, 'desenvolvedor_id' => 5, 'horas_semanais' => 30]);
    }
}
