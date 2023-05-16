<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVirtualColumnToCountryLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('country_languages', function (Blueprint $table) {
            $table->string('CountryCode_Language')
                ->virtualAs('concat(CountryCode, Language)')
                ->index()
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('country_languages', function (Blueprint $table) {
            $table->dropColumn('CountryCode_Language');
        });
    }
}
