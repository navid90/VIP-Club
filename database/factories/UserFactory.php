<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\String_;
use function MongoDB\BSON\toJSON;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jsonUserFactory=[

            'national_code'      => rand(1000000000,9999999999),
            'mobile'             => $this->faker->unique()->phoneNumber(),
            'slug'               => $this->faker->slug(6),
            'profile_photo_path' => $this->faker->filePath(),
            'email_verified_at'  => now(),
            'activation'         => rand(0,1),
            'user_type'          => rand(0,1),
            'status'             => rand(0,3),
            'age'                => $this->faker->date('Y-m-d',now()),
        ];

        return [
            'first_name'            => $this->faker->firstName(),
            'last_name'             => $this->faker->lastName(),
            'email'                 => $this->faker->unique()->safeEmail(),
            'password'              => Hash::make('customer-club'),
            'data'                  => $jsonUserFactory,
            'email_verified_at'     => now(),
            'user_activated_at'     => now(),
            'remember_token'        => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
