<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->string('from_user')->nullable();
            $table->string('to_user')->nullable();
            $table->string('message')->nullable();
            $table->date('message_date')->nullable();
            $table->binary('is_read')->nullable();
            $table->binary('is_deleted')->nullable();
            $table->string('room_id')->nullable();
            $table->integer('message_type')->nullable();
            $table->integer('sender_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
}
