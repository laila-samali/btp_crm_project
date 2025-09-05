<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonLivraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_bl',
        'devis_id',
        'client_nom',
        'client_adresse',
        'client_ice',
        'projet',
        'date_bl',
        'statut',
        'bl_signe_path',
    ];

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }

    public function blLots()
    {
        return $this->hasMany(BlLot::class);
    }
}