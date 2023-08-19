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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('list')->nullable()->default(null);
            $table->string('contactName')->nullable()->default(null);
            $table->string('phoneNumber')->nullable()->default(null);
            $table->string('whatsapp')->nullable()->default(null);
            $table->string('email')->index();
=======
            $table->string('email')->nullable()->default(null); 
            $table->string('phoneNumber')->nullable()->default(null);
            $table->string('whatsapp')->nullable()->default(null);
            $table->string('contactName')->nullable()->default(null); 
            $table->dateTime('createAd')->nullable()->default(null);
            $table->string('updateAd')->nullable()->default(null);
            $table->string('list')->nullable()->default(null);
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
        Schema::dropIfExists('contacts');
    }
    
};
