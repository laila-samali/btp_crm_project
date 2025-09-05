<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('client_nom');
            $table->string('client_adresse');
            $table->string('client_ice')->nullable();
            $table->decimal('total_ht', 15, 2)->default(0.00);
            $table->decimal('tva', 15, 2)->default(0.00);
            $table->decimal('total_ttc', 15, 2)->default(0.00);
            $table->string('statut')->default('Devis envoyé au client');
            $table->string('bon_commande_path')->nullable();
            $table->string('bon_commande_name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('devis');
    }
}