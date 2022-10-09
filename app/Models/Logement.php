<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = ['reference', 'rue', 'superficie', 'loyer', 'quartier_id'];

    public function quartier(){
        return $this->belongsTo(Quartier::class);
    }

    
}
