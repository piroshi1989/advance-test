<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;
     
    public function definition()
    {
        $address = $this->faker->prefecture . $this->faker->city . $this->faker->streetAddress;
        
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->email,
            'postcode' => $this->faker->numerify('###-####'),
            'address' => $address,
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(40),
        ];
    }
}