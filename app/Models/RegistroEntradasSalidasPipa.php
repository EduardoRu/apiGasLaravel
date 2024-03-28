<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroEntradasSalidasPipa extends Model
{
    use HasFactory;

    protected $table = "registro";

    protected $fillable = [
        "inventario_inical",
        "compra",
        "venta",
        "inventario_final"
    ];
}