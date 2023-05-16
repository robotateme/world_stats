<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRenameWorldTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('city', 'cities');
        Schema::rename('countrylanguage', 'country_languages');
        Schema::rename('country', 'countries');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('cities','city');
        Schema::rename('country_languages', 'countrylanguage');
        Schema::rename('countries', 'country');
    }
}
