<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_reads', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('is_read');
            $table->bigInteger('notification_id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
        });

         Schema::table('notification_reads', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('notification_id')->references('id')->on('notifications');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_reads');
    }
}
