<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteProfileIdIntoLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('languages', function (Blueprint $table) {
            $table->dropColumn('profile_id');
            $table->dropColumn('language_level');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('languages', function (Blueprint $table) {
            $table->integer('profile_id');
            $table->integer('language_level');

        });
    }
}
