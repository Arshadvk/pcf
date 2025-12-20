<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmiratesAndUrlToGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->foreignId('emirates')
                  ->nullable()
                  ->after('title')
                  ->constrained('emirates')
                  ->nullOnDelete();
            $table->string('url')->nullable()->after('emirates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropForeign(['emirates']);
            $table->dropColumn(['emirates', 'url']);
        });
    }
}
