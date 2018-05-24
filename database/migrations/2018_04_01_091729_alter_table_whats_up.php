<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableWhatsUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('whats_up', function (Blueprint $table) {
            $table->string('writer');
            $table->string('title');
            $table->string('image');
            $table->integer('type'); // 1 => article, 2 => featured artist
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('whats_up', function (Blueprint $table) {
            $table->dropColumn('writer');
            $table->dropColumn('title');
            $table->dropColumn('image');
            $table->dropColumn('type');
        });
    }
}
