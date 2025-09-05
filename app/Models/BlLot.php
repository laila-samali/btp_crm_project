<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlLot extends Model
{
    use HasFactory;

    protected $fillable = [
        'bon_livraison_id',
        'lot_id',
        'quantite_livree',
    ];

    public function bonLivraison()
    {
        return $this->belongsTo(BonLivraison::class);
    }

    public function lot()
    {
        return $this->belongsTo(Lot::class);
    }
}