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
        Schema::create('user1s_folders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user1Id');
            $table->foreign('user1Id')->references('id')->on('user1s');

            $table->unsignedBigInteger('folderId');
            $table->foreign('folderId')->references('id')->on('folders');
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
        Schema::dropIfExists('user1s_folders');
    }
};
