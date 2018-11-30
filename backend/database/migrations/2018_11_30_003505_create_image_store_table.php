<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_store', function (Blueprint $table) {
            $table->unsignedInteger('image_id');
            $table->unsignedInteger('store_id');

            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('store_id')->references('id')->on('stores');

            $table->primary(['store_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_store');
    }
}
