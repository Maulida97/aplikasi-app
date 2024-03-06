<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function sensor()
    {
        return $this->belongsTo(sensor::class);
    }


    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
}
