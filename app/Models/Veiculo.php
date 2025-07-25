<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    //
    protected $fillable = [
        'placa',
        'chassi',
        'tipo_veiculo',
        'categoria',
        'numero_motor',
        'numero_serie',
        'modelo_id',
        'cor_id',
        'data_fabricacao',
        'data_registro',
        'observacoes',
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }
    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }
  
}
