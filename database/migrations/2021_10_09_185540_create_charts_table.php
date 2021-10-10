<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartsTable extends Migration
{
    
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->integer('cant');
            $table->decimal('price');
            $table->decimal('total');
            $table->softDeletes();
            $table->enum('status',['PENDIENTE','VENDIDO']);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('charts');
    }
}
