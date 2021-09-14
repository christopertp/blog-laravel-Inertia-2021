<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alternative_name')->nullable();
            $table->string('product_code');
            $table->string('short_description')->nullable();
            $table->string('specification')->nullable();
            $table->string('application')->nullable();
            $table->string('packaging')->nullable();
            $table->timestamps();

            $table->index('name');
            $table->index('product_code');
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
