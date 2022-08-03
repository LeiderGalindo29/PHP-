<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //LA TABLA A CONECTAR
     protected $table  = "countries";
     //La clave primaria de esa tabla
     protected $primaryKey = "country_id";
     //omitir campos de auditoria
     public $timestamps = false;
     use HasFactory;

     //many yo many country - language
     //relatinship

     public function languages(){
          //belongsToMany method:
          //1. Related model
          //2. pivot table(intermediate table )
          //3. Foreing Key current model
          //4. Foreign key of related model
          return $this->belongsToMany(Language::class, 'country_languages', 'country_id', 'language_id');
      }

      //M:1 country - region
      //relationship
      public function regions(){
          //Belongs to method : parameters
          //1. Realted model
          //2. Foreign Key fo related model in current model
          return $this->belongsTo(Region::class, 'region_id');

      }
}
