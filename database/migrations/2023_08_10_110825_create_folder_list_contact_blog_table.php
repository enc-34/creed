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
        Schema::create('folder_list_contact_blog', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('folder_id');
            $table->foreign('folder_id')->references('id')->on('folders');

            $table->unsignedBigInteger('list_contact_blog_id');
            $table->foreign('list_contact_blog_id')->references('id')->on('list_contact_blogs');


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
        Schema::dropIfExists('folder_list_contact_blog');
    }
};
