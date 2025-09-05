<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousLot extends Model
{
    use HasFactory;

    protected $fillable = [
        'lot_id',
        'nom',
        'description',
    ];

    public function lot()
    {
        return $this->belongsTo(Lot::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}