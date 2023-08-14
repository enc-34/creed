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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->boolean('isPremiumAccount')->nullable()->default(false);
            $table->string('role')->nullable()->default();
            $table->string('modelUser')->nullable()->default();
            $table->string('userName')->nullable()->default();
            $table->string('email')->nullable()->default();
            $table->string('userPhoneNumber')->nullable(false)->default();
            $table->string('password')->nullable()->default();
            $table->boolean('isActive')->nullable()->default(true);
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
        Schema::dropIfExists('accounts');
    }
};
