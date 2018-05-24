<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTables extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('whats_in_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tags');
    }
}
