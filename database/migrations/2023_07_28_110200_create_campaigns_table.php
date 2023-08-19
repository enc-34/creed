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
<<<<<<< HEAD
            $table->dateTime('planning');
            $table->string('campaignContenu');
            $table->string('compaignObjective');
            $table->string('userList');
            $table->string('campaignName');
=======
            $table->string('userList')->nullable()->default(null);
            $table->dateTime('planning')->nullable()->default(null);
            $table->dateTime('updateAd')->nullable()->default(null);
            $table->dateTime('createAd')->nullable()->default(null);
            $table->string('campaignContenu')->nullable()->default(null);
            $table->string('compaignObjective')->nullable()->default(null);
            $table->string('contactList')->nullable()->default(null);
            $table->string('campaignName')->nullable()->default(null);
>>>>>>> 7605ca9b460b031e704798c1c8ca0f5d1c4f3359
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
