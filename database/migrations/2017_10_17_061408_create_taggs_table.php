<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaggsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('upload_tag', function (Blueprint $table) {
            $table->integer('upload_id')->unsigned()->index();
            $table->foreign('upload_id')->references('id')->on('uploads')->onDelete('cascade');

            $table->integer('tagg_id')->unsigned()->index();
            $table->foreign('tagg_id')->references('id')->on('taggs')->onDelete('cascade');
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
        Schema::dropIfExists('taggs');
    }
}
