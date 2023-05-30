<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DatosEscolares extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'datos_escolares';

    public function catCarreras(){
        return $this->belongsTo(CatCarreras::class);
    }
}
