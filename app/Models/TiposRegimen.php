<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposRegimen extends Model
{
    use HasFactory;

    public function regimen()
    {
        return $this->belongsTo('App\Models\Regimen');
    }

    public function informacioLaborables()
    {
        return $this->hasMany('App\Models\InformacionLaboral');
    }

}
