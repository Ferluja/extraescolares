<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatCreditos extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'cat_creditos';

    public function catCarreras(){
        return $this->belongsTo(CatCarreras::class);
    }
}
