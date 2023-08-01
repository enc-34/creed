<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'userList'=>"[]",
            'planning'=>new DateTime(),
            'createAd'=>new DateTime(),
            'updateAd'=>new DateTime(),
            'campaignContenu'=>"GOOD TO GREAT WITH CREED",
            'compaignObjective'=>"Booster le CA par des ventes",
            'contactList'=>"[]",
            'campaignName'=>"Let's GO",
        ];
    }
}
