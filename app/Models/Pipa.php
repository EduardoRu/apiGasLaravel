<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pipa extends Model
{
    use HasFactory;

    protected $table = "pipa";

    protected $fillable = [
        "responsable_pipa",
        "capacidad_pipa",
        "clave_pipa"
    ];
}