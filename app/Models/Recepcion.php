<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    use HasFactory;

    protected $fillable = ['id_producto','id_proovedor','cantidad','num_fact','lote','reg_invima','fecha_vencimiento','descripcion'];

    protected $table = "proovedores_productos";
}
