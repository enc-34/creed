<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       /* $table->string('list');
            $table->string('contactName');
            $table->string('contactName');
            $table->string('phoneNumber');
            $table->string('whatsapp');
            $table->string('email');
            $table->dateTime('updateAd');
            $table->dateTime('createAd');
            $table->timestamps();;*/
        return [
            'list'=>"number one",
            'contactName'=>"DSITS",
            'phoneNumber'=>"+237690861311",
            'whatsapp'=>"+237681978368",
            'email'=>"dreamsmartitservices@gmail.com",
           
        ];
    }
}
