<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'sous_lot_id',
        'code',
        'description',
        'quantite',
        'prix_unitaire',
        'budget',
        'realisation',
        'marge_estimee',
    ];

    public function sousLot()
    {
        return $this->belongsTo(SousLot::class);
    }
}