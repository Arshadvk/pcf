<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterUsersEmirateToForeignKey extends Migration
{
    public function up()
    {
        // 1 Add new emirates_id column
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('emirates_id')
                  ->nullable()
                  ->after('email')
                  ->constrained('emirates')
                  ->nullOnDelete();
        });

        // 2 Migrate existing string emirate values → emirates_id
        DB::table('users')->whereNotNull('emirate')->get()->each(function ($user) {
            $emirate = DB::table('emirates')
                ->where('name', $user->emirate)
                ->first();

            if ($emirate) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['emirates_id' => $emirate->id]);
            }
        });

        // 3 Drop old string column
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('emirate');
        });
    }

    public function down()
    {
        // 1 Recreate old string column
        Schema::table('users', function (Blueprint $table) {
            $table->string('emirate')->nullable()->after('email');
        });

        // 2 Restore string values from foreign key
        DB::table('users')->whereNotNull('emirates_id')->get()->each(function ($user) {
            $emirate = DB::table('emirates')->where('id', $user->emirates_id)->first();

            if ($emirate) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['emirate' => $emirate->name]);
            }
        });

        // 3 Drop foreign key column
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['emirates_id']);
            $table->dropColumn('emirates_id');
        });
    }
}
