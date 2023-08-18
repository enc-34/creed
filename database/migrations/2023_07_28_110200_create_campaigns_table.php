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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('userList')->nullable()->default(null);
            $table->dateTime('planning')->nullable()->default(null);
            $table->dateTime('updateAd')->nullable()->default(null);
            $table->dateTime('createAd')->nullable()->default(null);
            $table->string('campaignContenu')->nullable()->default(null);
            $table->string('compaignObjective')->nullable()->default(null);
            $table->string('contactList')->nullable()->default(null);
            $table->string('campaignName')->nullable()->default(null);
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
        Schema::dropIfExists('campaigns');
    }
};
