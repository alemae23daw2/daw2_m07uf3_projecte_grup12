<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $primaryKey = ['dniClient', 'codiUnic'];
    public $incrementing = false;
    protected $fillable = [
        'dniClient','codiUnic','dataInici','horaInici','dataFinal','horaFinal',
        'lliuramentClaus','devolucioClaus','preuPerDia','diposit','dipositQuantitat','tipusAsseguranca'
    ];
}
