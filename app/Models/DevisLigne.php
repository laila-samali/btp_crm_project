<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevisLigne extends Model
{
    use HasFactory;

    protected $fillable = [
        'devis_id',
        'code_lot',
        'description',
        'prix_ht',
    ];

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }
}