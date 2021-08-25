<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }

    public function informacioLaborables()
    {
        return $this->hasMany('App\Models\InformacionLaboral');
    }


}
