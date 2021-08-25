<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionLaboral extends Model
{
    use HasFactory;

    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargo');
    }

    public function tiposRegimen()
    {
        return $this->belongsTo('App\Models\TiposRegimen');

    }
    public function trabajador()
    {
        return $this->belongsTo('App\Models\Trabajador');

    }
    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio');
    }


}
