<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      /*$role = $this->faker->randomElement(['Administrator','Auditor','Analist']);
      $userName = (($role == 'Administrator')? $this->userName() : $this->faker->Auditor()) ? $this->faker->Auditor(): $this->faker->Analist();*/
        return [
            'isPremiumAccount'=>true,
            'role'=>"administrateur",
            'userPhoneNumber'=>"699999999",
            'modelUser'=>"",
            'userName'=>"admin",
            'password'=>"nhrkdhfuef25663e3dgegydhbe",
            'isActive'=>true,
                ];
    }
}
