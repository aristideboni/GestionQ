<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['LibVille', 'pays_id'];

    public function pays(){
        return $this->belongsTo(Pays::class);
    }
}
