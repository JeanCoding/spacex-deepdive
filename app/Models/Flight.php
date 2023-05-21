<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    // Defined de relatie tussen arrival en de departure locatie
    public function departure()
    {
        return $this->belongsTo(Location::class, 'departure_id');
    }

    // Defined de relatie tussen departure en de arrival locatie
    public function arrival()
    {
        return $this->belongsTo(Location::class, 'arrival_id');
    }
}
