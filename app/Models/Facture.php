<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_facture',
        'client_id',
        'date_facture',
        'total_ht',
        'tva',
        'total_ttc',
        'statut',
        'motif_annulation',
        'facture_signee_path',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class); // Assuming a Client model exists
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function lots()
    {
        return $this->belongsToMany(Lot::class, 'facture_lots')
            ->withPivot('montant_ht', 'tva', 'montant_ttc');
    }
}