<?php

use Illuminate\Database\Seeder;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert(['nome' => 'João', 'cargo' => 'Analista']);
        DB::table('desenvolvedores')->insert(['nome' => 'Maria', 'cargo' => 'QA']);
        DB::table('desenvolvedores')->insert(['nome' => 'Pedro', 'cargo' => 'Tester']);
        DB::table('desenvolvedores')->insert(['nome' => 'Ana', 'cargo' => 'Analista']);
        DB::table('desenvolvedores')->insert(['nome' => 'José', 'cargo' => 'Front-end']);
        DB::table('desenvolvedores')->insert(['nome' => 'Paulo', 'cargo' => 'Back-end']);
        DB::table('desenvolvedores')->insert(['nome' => 'Clara', 'cargo' => 'Front-end']);
        DB::table('desenvolvedores')->insert(['nome' => 'Rafael', 'cargo' => 'Back-end']);
        DB::table('desenvolvedores')->insert(['nome' => 'Joana', 'cargo' => 'Front-end']);
        DB::table('desenvolvedores')->insert(['nome' => 'José', 'cargo' => 'Back-end']);
    }
}
