<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $fillable = [
        'nombre', 'simbolo', 'pais', 'valor', 'fecha'
    ];
}