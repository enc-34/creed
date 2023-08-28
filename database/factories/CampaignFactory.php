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
            'planning'=>new DateTime(),
            'campaignContenu'=>"GOOD TO GREAT WITH CREED",
            'compaignObjective'=>"Booster le CA par des ventes",
            'campaignName'=>"Let's GO",
            'template'=>"hello_word",
        ];
    }
}
