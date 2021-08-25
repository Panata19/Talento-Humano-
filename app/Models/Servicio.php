<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    public function informacioLaborables()
    {
        return $this->hasMany('App\Models\InformacionLaboral');
    }
}
