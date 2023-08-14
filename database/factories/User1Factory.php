<?php

namespace Database\Factories;
use App\Models\Campaign;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User1>
 */
class User1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'accountId'=>Account::factory(),
            'campanyActivity'=>"",
            'companyName'=>"READY",
            'companyUrl'=>"",
            'picture'=>"",
            'professionalCode'=>$this->faker->postcode(),
            'postalCode'=>$this->faker->postcode(),
            'country'=>$this->faker->city(),
            'firstName'=>"Nana",
            'lastName'=>"Hermione",
            'businessPhoneNumber'=>"698989898",
            'address'=>$this->faker->streetAddress(),
        ];
    }
}
