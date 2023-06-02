<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['codigo','nombre','descripcion','nom_lab','estado','cantidad'];

    public function proovedores()
    {
        return $this->belongsToMany(Proovedor::class,'proovedores_productos');
    }
}
