<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'est_livre',
        'devis_id',
        'bon_livraison_id',
    ];

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }

    public function bonLivraison()
    {
        return $this->belongsTo(BonLivraison::class);
    }

    public function sousLots()
    {
        return $this->hasMany(SousLot::class);
    }
}