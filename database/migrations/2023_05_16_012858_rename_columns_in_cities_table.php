<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->renameColumn('ID', 'id');
            $table->renameColumn('Name', 'name');
            $table->renameColumn('CountryCode', 'country_code');
            $table->renameColumn('District', 'district');
            $table->renameColumn('Population', 'population');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->renameColumn('id', 'ID');
            $table->renameColumn('name', 'Name');
            $table->renameColumn('country_code', 'CountryCode');
            $table->renameColumn('district', 'District');
            $table->renameColumn('population', 'Population');
        });
    }
}
