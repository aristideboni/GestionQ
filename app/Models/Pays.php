<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = ['LibPays'];

    public function pays(){
        return $this->belongsTo(Pays::class);
    }
}
