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
        Schema::create('contact_list_contact_blog', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts');

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
    /*
    public function down()
    {
        Schema::dropIfExists('contact_list_contact_blog');
    }
    */
};
