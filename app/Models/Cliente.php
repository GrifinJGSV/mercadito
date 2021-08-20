<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
