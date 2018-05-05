<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWritersIdInWhatsUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('whats_up', function (Blueprint $table) {

            DB::table('whats_up')->where('writer','=','George Vail Kabristante')->update(['writer_id' => 1]);
            DB::table('whats_up')->where('writer','=','Boy Villasanta')->update(['writer_id' => 2]);
            DB::table('whats_up')->where('writer','=','Danny Vibas')->update(['writer_id' => 3]);
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
            DB::table('whats_up')->update(['writer_id' => 0]);
        });
    }
}
