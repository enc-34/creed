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
        Schema::create('campaign_list_contact_blog', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('list_contact_blog_id');
            $table->foreign('list_contact_blog_id')->references('id')->on('list_contact_blogs')->onDelete('cascade');

            
            $table->unsignedBigInteger('campaign_id');
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');

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
        Schema::dropIfExists('campaign_list_contact_blog');
    }
};
