<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $primaryKey = 'dniClient';
    protected $fillable = [
        'dniClient','nomCognoms','edat','telefon','adreca','ciutat',
        'pais','email','tipusTarjeta','numeroTarjeta'
    ];
}
