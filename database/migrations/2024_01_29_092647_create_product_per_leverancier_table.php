<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPerLeverancierTable extends Migration
{
    public function up()
    {
        Schema::create('product_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->date('datum_levering');
            $table->integer('aantal');
            $table->date('datum_eerstvolgende_levering')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_per_leverancier');
    }
}
