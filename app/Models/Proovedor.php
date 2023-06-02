<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    use HasFactory;

    protected $fillable = ['Tipo_id','Num_id','Nombre','Direccion','Nom_con','Tel'];






    public function productos()
    {
        return $this->belongsToMany(Producto::class,'proovedores_productos');
    }
}
