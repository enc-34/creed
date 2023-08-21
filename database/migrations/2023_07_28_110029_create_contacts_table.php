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
            $table->string('list')->nullable()->default(null);
            $table->string('contactName')->nullable()->default(null);
            $table->string('phoneNumber')->nullable()->default(null);
            $table->string('whatsapp')->nullable()->default(null);
            $table->string('email')->index();
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
