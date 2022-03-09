<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->integer('pin')->nullable();
            $table->boolean('activity_exempt')->nullable();
            $table->date('loa_end_date')->nullable();
            $table->integer('discordid')->nullable();
            $table->string('teamspeakid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('dob');
            $table->dropColumn('pin');
            $table->dropColumn('activity_exempt');
            $table->dropColumn('loa_end_date');
            $table->dropColumn('discordid');
            $table->dropColumn('teamspeakid');
        });
    }
};
