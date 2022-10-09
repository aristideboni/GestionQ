<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;

    protected $fillable = ['LibQuartier', 'ville_id'];
    //protected $guarded=[];
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
