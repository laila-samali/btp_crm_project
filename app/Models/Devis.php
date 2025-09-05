<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_nom',
        'client_adresse',
        'client_ice',
        'total_ht',
        'tva',
        'total_ttc',
        'statut',
        'bon_commande_path',
        'bon_commande_name',
    ];

    public function devisLignes()
    {
        return $this->hasMany(DevisLigne::class);
    }
}