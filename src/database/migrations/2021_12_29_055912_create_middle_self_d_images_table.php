<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiddleSelfDImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('middle_self_d_images', function (Blueprint $table) {
            $table->bigInteger('article_detail_id')->unsigned();
            $table->bigInteger('image_id')->unsigned();

            $table
                ->foreign('article_detail_id')
                ->references('id')
                ->on('article_details');
            $table
                ->foreign('image_id')
                ->references('id')
                ->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('middle_self_d_images');
    }
}
