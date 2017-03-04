<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = [
      'paciente_id','medico_id','exame_id'
    ];

    public function paciente()
    {
      return $this->belongsTo(Paciente::class);
    }
    public function medico()
    {
      return $this->belongsTo(Medico::class);
    }
    public function exame()
    {
      return $this->belongsTo(Exame::class);
    }
}
