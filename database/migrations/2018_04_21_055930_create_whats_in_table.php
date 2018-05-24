<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatsInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whats_in', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('whats_in');
    }
}
