<?php

use App\Models\campaign;
use App\Models\user1;
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
        Schema::create('user1s_campaigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user1Id');
            $table->foreign('user1Id')->references('id')->on('user1s')->onDelete('cascade');

            $table->unsignedBigInteger('campaignId');
            $table->foreign('campaignId')->references('id')->on('campaigns')->onDelete('cascade');

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
        Schema::dropIfExists('user1s_campaigns');
    }
};
