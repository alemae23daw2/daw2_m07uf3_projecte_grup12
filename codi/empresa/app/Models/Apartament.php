<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartament extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $primaryKey = 'codiUnic';
    protected $fillable = [
        'codiUnic','referencia','ciutat','barri','nomCarrer','numCarrer','pis',
        'numLlits','numHabitacions','ascensor','calefaccio', 'aireCondicionat'
    ];
}
