<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->renameColumn('Code', 'code');
            $table->renameColumn('Name', 'name');
            $table->renameColumn('Continent', 'continent');
            $table->renameColumn('Region', 'region');
            $table->renameColumn('SurfaceArea', 'surface_area');
            $table->renameColumn('IndepYear', 'independence_year');
            $table->renameColumn('Population', 'population');
            $table->renameColumn('LifeExpectancy', 'life_expectancy');
            $table->renameColumn('GNP', 'gnp');
            $table->renameColumn('GNPOld', 'gnp_old');
            $table->renameColumn('LocalName', 'local_name');
            $table->renameColumn('GovernmentForm', 'government_form');
            $table->renameColumn('HeadOfState', 'head_of_state');
            $table->renameColumn('Capital', 'capital');
            $table->renameColumn('Code2', 'code2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->renameColumn('code', 'Code');
            $table->renameColumn('name', 'Name');
            $table->renameColumn('continent', 'Continent');
            $table->renameColumn('region', 'Region');
            $table->renameColumn('surface_area', 'SurfaceArea');
            $table->renameColumn('independence_year', 'IndepYear');
            $table->renameColumn('population', 'Population');
            $table->renameColumn('life_expectancy', 'LifeExpectancy');
            $table->renameColumn('gnp', 'GNP');
            $table->renameColumn('gnp_old', 'GNPOld');
            $table->renameColumn('local_name', 'LocalName');
            $table->renameColumn('government_form', 'GovernmentForm');
            $table->renameColumn('head_of_state', 'HeadOfState');
            $table->renameColumn('capital', 'Capital');
            $table->renameColumn('code2', 'Code2');
        });
    }
}
