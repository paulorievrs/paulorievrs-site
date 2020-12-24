<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagelinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagelinks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('imageLink', 200);
            $table->unsignedBigInteger('postId');
            $table->integer('imageIndex');

            $table->foreign('postId')->references('id')->on('posts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagelinks');
    }
}
