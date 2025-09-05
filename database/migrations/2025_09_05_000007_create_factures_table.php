<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numero_facture')->unique();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->date('date_facture');
            $table->decimal('total_ht', 15, 2)->default(0.00);
            $table->decimal('tva', 15, 2)->default(0.00);
            $table->decimal('total_ttc', 15, 2)->default(0.00);
            $table->string('statut')->default('Émise');
            $table->text('motif_annulation')->nullable();
            $table->string('facture_signee_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factures');
    }
}