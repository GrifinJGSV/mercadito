<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cliente',
        'fecha_venta'
    ];
    public function productos()
    {
        return $this->belongsToMany(Producto::class, "detalle_factura", 'id_factura', 'id_producto')->as('detalle')
            ->withTimestamps()
            ->withPivot('precio_venta');
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

}
