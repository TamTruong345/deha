<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setting', function (Blueprint $table) {
            $table->string('setting_host');
            $table->string('setting_port');
            $table->string('setting_username');
            $table->string('setting_mail_send');
            $table->string('setting_password');
            $table->string('setting_reply_to');
            $table->string('setting_mail_per_day');
            $table->string('setting_time_interval');
            $table->integer('setting_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting', function (Blueprint $table) {
            //
        });
    }
}
