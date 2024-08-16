<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
     // Nombre de la tabla
     protected $table = 'clientes';

     // Nombre de la clave primaria
     protected $primaryKey = 'id';
     //protected $guarded=[];
     protected $fillable = ['nombres','email','direccion','fono'];
 
}
