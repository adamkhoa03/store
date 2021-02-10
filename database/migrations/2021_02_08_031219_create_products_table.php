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
            $table->string('prd_code');
            $table->string('prd_name');
            $table->string('slug');
            $table->integer('prd_price');
            $table->integer('prd_featured');
            $table->string('prd_status');
            $table->string('prd_properties');
            $table->string('prd_details');
            $table->string('cat_name');
            $table->string('prd_img');
            $table->timestamps();
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
