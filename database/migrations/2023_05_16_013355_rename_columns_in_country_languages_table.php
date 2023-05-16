<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInCountryLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('country_languages', function (Blueprint $table) {
            $table->renameColumn('CountryCode', 'country_code');
            $table->renameColumn('Language', 'language');
            $table->renameColumn('IsOfficial', 'is_official');
            $table->renameColumn('Percentage', 'percentage');
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
            $table->renameColumn('country_code', 'CountryCode');
            $table->renameColumn('language', 'Language');
            $table->renameColumn('is_official', 'IsOfficial');
            $table->renameColumn('percentage', 'Percentage');
        });
    }
}
