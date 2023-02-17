<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCountryAndCityToCountryIdAndCityIdInProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->Integer('country_id')->nullable()->after('user_id');
            $table->Integer('city_id')->nullable()->after('country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('country_id');
            $table->dropColumn('city_id');
            $table->string('country')->nullable()->after('user_id');
            $table->string('city')->nullable()->after('country');
        });
    }
}
