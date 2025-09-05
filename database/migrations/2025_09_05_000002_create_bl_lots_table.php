<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlLotsTable extends Migration
{
    public function up()
    {
        Schema::create('bl_lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bon_livraison_id')->constrained()->onDelete('cascade');
            $table->foreignId('lot_id')->constrained()->onDelete('cascade');
            $table->integer('quantite_livree')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bl_lots');
    }
}