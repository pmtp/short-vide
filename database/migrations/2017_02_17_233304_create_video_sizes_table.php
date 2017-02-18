<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('url');
            $table->string('content_type');
            $table->integer('width');
            $table->integer('height');
            $table->integer('video_reaction_id');
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
        Schema::dropIfExists('video_sizes');
    }
}
