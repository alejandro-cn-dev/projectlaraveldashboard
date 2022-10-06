<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = ['id','descripcion','cantidad','color','precio_venta','precio_compra','id_categoria','id_almacen','id_marca','estado'];
}
