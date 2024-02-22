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
        Schema::create('folder_user1', function (Blueprint $table) {

          $table->unsignedBigInteger('folder_id');
          $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');
          $table->timestamps();

          $table->id();
            $table->unsignedBigInteger('user1_id');
            $table->foreign('user1_id')->references('id')->on('user1s')->onDelete('cascade');
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
