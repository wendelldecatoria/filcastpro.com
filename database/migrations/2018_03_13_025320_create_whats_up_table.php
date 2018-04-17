<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatsUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whats_up', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('writer_id')->default(0);
            $table->string('headline');
            $table->longText('content');
            $table->integer('status'); //0 => deactivated, 1 => active, 2 => archived
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
        Schema::dropIfExists('whats_up');
    }
}
