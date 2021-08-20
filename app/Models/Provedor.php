<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    use HasFactory;
    protected $table = 'provedors';
    protected $fillable = [
        'nombreProvedor',
        'correo',
        'telefono',
        'nombreContactoProvedor',
    ];
    public function productos(){
        $this->hasMany(Producto::class);
    }
}
