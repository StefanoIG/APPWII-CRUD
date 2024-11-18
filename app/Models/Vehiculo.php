<?php

namespace App\Models;


class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $primaryKey = 'id';
    protected $fillable = ['tipoVehiculo', 'categoria'];
    public $timestamps = true;
    
}
