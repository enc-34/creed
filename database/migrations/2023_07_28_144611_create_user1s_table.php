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
            $table->unsignedBigInteger('accountId');
            $table->foreign('accountId')->references('id')->on('accounts');
            $table->string('campanyActivity');
            $table->string('companyName');
            $table->string('companyUrl');
            $table->string('picture');
            $table->string('professionalCode');
            $table->string('postalCode');
            $table->string('country');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->string('address');
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
