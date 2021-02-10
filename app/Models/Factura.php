<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table='factura';
    protected $primaryKey = 'Idfac';
    public function clientes(){
        return $this->belongsTo(Cliente::class,'id_cliente','id');
    }
    public function usuarios(){
        return $this->belongsTo(User::class,'id_usuario','id');
    }
}
