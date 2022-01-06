<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projetos';

    public function desenvolvedores()
    {
        return $this->belongsToMany(Desenvolvedor::class,'alocacoes')->withPivot('horas_semanais');
    }
}
