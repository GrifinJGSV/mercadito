<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'categoria',
        'precioVenta',
        'precioCompra',
    ];
    public function producto(){
        $this->belongsTo(Provedor::class);
    }
}
