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
        Schema::create('list_contact_blogs', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('listName')->nullable();
            $table->string('folderList')->nullable();
            $table->string('description')->nullable();
=======
            $table->string('listName')->nullable()->default(null);
            $table->string('folderList')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
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
        Schema::dropIfExists('list_contact_blogs');
    }
};
