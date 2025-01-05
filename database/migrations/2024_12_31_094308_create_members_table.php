<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('mobile');
            $table->string('dob')->nullable();
            $table->string('zone')->nullable();
            $table->string('email')->nullable();
            $table->string('issued')->nullable();
            $table->string('expiry')->nullable();
            $table->string('status')->default('pending')->nullable();
            $table->string('emirates')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('profession')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('membership_type')->nullable();
            $table->string('membership_number')->nullable();



            $table->string('pin')->nullable();
            $table->string('district')->nullable();
            $table->string('mandalam')->nullable();
            $table->string('panjayath')->nullable();
            $table->string('house_name')->nullable();
            $table->string('before_pdp')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
