<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPrimaryKeyInCountryLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('country_languages', function (Blueprint $table) {
            $table->dropPrimary();
            $table->unique(['country_code', 'language'], 'fake_pk');
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
            $table->dropIndex('fake_pk');
            $table->primary(['country_code', 'language']);
        });
    }
}
