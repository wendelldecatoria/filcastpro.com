<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->integer('age');
            $table->string('gender');
            $table->string('height');
            $table->string('vital');
            $table->string('manager');
            $table->string('email');
            $table->string('online_profile');
            $table->text('works');
            $table->string('profile_image');
            $table->string('thumb_image');
            $table->string('sub_image_1');
            $table->string('sub_image_2');
            $table->string('sub_image_3');
            $table->string('sub_image_4');
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
        Schema::dropIfExists('actors');
    }
}
