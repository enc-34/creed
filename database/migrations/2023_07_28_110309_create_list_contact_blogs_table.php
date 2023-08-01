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
        Schema::create('list_contact_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('folderList');
            $table->string('userList');
            $table->dateTime('updateAd');
            $table->dateTime('createAd');
            $table->string('listName');
            $table->integer('numberContact');
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
        Schema::dropIfExists('list_contact_blogs');
    }
};
