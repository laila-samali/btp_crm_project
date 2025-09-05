<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sous_lot_id')->constrained()->onDelete('cascade');
            $table->string('code');
            $table->string('description')->nullable();
            $table->integer('quantite')->default(0);
            $table->decimal('prix_unitaire', 10, 2)->default(0.00);
            $table->decimal('budget', 10, 2)->default(0.00);
            $table->decimal('realisation', 10, 2)->default(0.00);
            $table->decimal('marge_estimee', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}