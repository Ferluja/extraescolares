<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosUsuarios extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'datos_usuarios';

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function perfiles(){
        return $this->belongsTo(Perfiles::class);
    }
    public function datosEscolares(){
        return $this->belongsTo(DatosEscolares::class);
    }
}
