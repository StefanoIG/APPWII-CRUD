<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $primaryKey = 'id';
    protected $fillable = ['tipoVehiculo', 'categoria'];
    public $timestamps = true;
    
}
