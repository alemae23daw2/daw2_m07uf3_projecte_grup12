<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Apartament;
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

    public function client()
    {
        return $this->belongsTo(Client::class, 'dni_client', 'dni_client');
    }

    public function apartament()
    {
        return $this->belongsTo(Apartament::class, 'codi_unic', 'codi_unic');
    }
}
