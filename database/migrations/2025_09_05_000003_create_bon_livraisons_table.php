<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonLivraisonsTable extends Migration
{
    public function up()
    {
        Schema::create('bon_livraisons', function (Blueprint $table) {
            $table->id();
            $table->string('numero_bl')->unique();
            $table->foreignId('devis_id')->constrained()->onDelete('cascade');
            $table->string('client_nom');
            $table->string('client_adresse');
            $table->string('client_ice')->nullable();
            $table->string('projet');
            $table->date('date_bl');
            $table->string('statut')->default('Livré');
            $table->string('bl_signe_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bon_livraisons');
    }
}