<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameMalToEmiratesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('emirates', function (Blueprint $table) {
            $table->string('name_mal')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('emirates', function (Blueprint $table) {
            $table->dropColumn('name_mal');
        });
    }
}
