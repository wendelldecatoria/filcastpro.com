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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('height')->nullable();
            $table->string('vital')->nullable();
            $table->string('manager')->nullable();
            $table->string('email')->nullable();
            $table->string('online_profile')->nullable();
            $table->text('works')->nullable();
            $table->string('thumb_image');
            $table->integer('is_active')->default(0);
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
