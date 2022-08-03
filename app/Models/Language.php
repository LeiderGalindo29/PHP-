<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{   
            //LA TABLA A CONECTAR
            protected $table  = "languages";
            //La clave primaria de esa tabla
            protected $primaryKey = "language_id";
            //omitir campos de auditoria
            public $timestamps = false;

            //M : M Languages
            //Relationship

            public function paises(){
                return $this->belongsToMany(Country::class, 'country_languages', 'language_id', 'country_id');
            }
    use HasFactory;
}
