<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlToWhatsUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('whats_up', function (Blueprint $table) {
            $table->string('url')->nullable();
        });

        DB::table('whats_up')->update(['url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/3yYii5upMwA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>']);        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('whats_up', function (Blueprint $table) {
            $table->dropColumn('url');
        });
    }
}
