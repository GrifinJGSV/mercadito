<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'nombre',
        'telefono',
    ];
    public function facturas(){
        return $this->hasMany(Factura::class);
    }
}
