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
        Schema::create('user1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accountId')->nullable(false)->default();
            $table->foreign('accountId')->references('id')->on('accounts');
            $table->string('campanyActivity')->nullable(false)->default();
            $table->string('companyName')->nullable(false)->default();
            $table->string('companyUrl')->nullable()->default();
            $table->string('picture')->nullable()->default();
            $table->string('professionalCode')->nullable(false)->default();
            $table->string('postalCode')->nullable()->default();
            $table->string('country')->nullable(false)->default();
            $table->string('firstName')->nullable(false)->default();
            $table->string('lastName')->nullable()->default();
            $table->string('businessPhoneNumber')->nullable(false)->default();
            $table->string('address')->nullable()->default();
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
        Schema::dropIfExists('user1s');
    }
};
