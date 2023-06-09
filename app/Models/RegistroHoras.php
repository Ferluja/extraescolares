<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroHoras extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'registro_horas';

    public function catCarreras(){
        return $this->belongsTo(CatCarreras::class);
    }
    public function catCreditos(){
        return $this->belongsTo(CatCreditos::class);
    }
}
