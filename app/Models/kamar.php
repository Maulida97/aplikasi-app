<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $guarded = [];  


    public function pasien()
    {
        return $this->hasOne(pasien::class,'kamar_id');
    }
    public function sensor(): HasMany
    {
        return $this->hasMany(sensor::class);
    }

}
