<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Skill;

class SetupSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            Skill::insert([
                array( // row #0
                    'id' => 1,
                    'name' => 'Singer',
                    'created_at' => '2018-03-30 08:56:08',
                    'updated_at' => '2018-03-30 08:56:08',
                    'group' => 'actor',
                ),
                array( // row #1
                    'id' => 2,
                    'name' => 'Actor',
                    'created_at' => '2018-03-30 08:56:32',
                    'updated_at' => '2018-03-30 08:56:32',
                    'group' => 'actor',
                ),
                array( // row #2
                    'id' => 3,
                    'name' => 'Band',
                    'created_at' => '2018-03-30 08:57:00',
                    'updated_at' => '2018-03-30 08:57:15',
                    'group' => 'actor',
                ),
                array( // row #3
                    'id' => 4,
                    'name' => 'Dancer',
                    'created_at' => '2018-03-30 08:57:31',
                    'updated_at' => '2018-03-30 08:57:28',
                    'group' => 'actor',
                ),
                array( // row #4
                    'id' => 5,
                    'name' => 'Group Dancer',
                    'created_at' => '2018-03-30 08:57:56',
                    'updated_at' => '2018-03-30 08:57:56',
                    'group' => 'actor',
                ),                
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            //
        });
    }
}
