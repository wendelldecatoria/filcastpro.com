<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticleImageOnWhatsUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('whats_up', function (Blueprint $table) {
            $table->string('article_banner')->nullable();
        });

        DB::table('whats_up')->update(['article_banner' => 'banner-default.jpg']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('whats_up', function (Blueprint $table) {
            $table->dropColumn('article_banner');
        });
    }
}
