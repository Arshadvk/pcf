<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCommitteesTableAddTypeAndYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('committees', function (Blueprint $table) {
            $table->enum('committee_type', ['national', 'emirates','leaders'])
                ->default('emirates')
                ->after('name');

            $table->unsignedBigInteger('national_committee_id')
                ->nullable()
                ->after('committee_type');

            $table->foreign('national_committee_id')
                ->references('id')
                ->on('national_committees')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('committees', function (Blueprint $table) {
            $table->dropForeign(['national_committee_id']);
            $table->dropColumn('national_committee_id');
            $table->dropColumn('committee_type');
        });
    }
}
