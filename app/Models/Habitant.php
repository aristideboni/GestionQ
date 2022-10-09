<?php

namespace App\Models;

use App\Models\Logement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitant extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'DatNaiss', 'tel', 'quartier_id', 'logement_id '];

    

    public function quartier(){
        return $this->belongsTo(Quartier::class);
    }

    public function logement(){
        return $this->belongsTo(Logement::class);
    }

}
