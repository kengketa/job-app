<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Applicant;
use App\Models\User;
use App\Models\Announcement;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::whereHas('role', function ($q) {
                $q->where('name', 'user');
            })->inRandomOrder()->first()->id,
            'announcement_id' => Announcement::inRandomOrder()->first()->id,
            'prefix' => $this->faker->title,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'birth_date' => $this->faker->date,
            'age' => $this->faker->numberBetween(18, 80),
            'phone' => $this->faker->phoneNumber,
            'birth_place' => $this->faker->city,
            'race' => $this->faker->word,
            'citizen_id' => $this->faker->isbn10,
            'marital_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced']),
            'nationality' => $this->faker->country,
            'district' => $this->faker->city,
            'province' => $this->faker->state,
            'card_issued_date' => $this->faker->date,
            'card_expiration_date' => $this->faker->date,
            'military_service' => $this->faker->word,
            'religion' => $this->faker->word,
            'current_occupation' => $this->faker->jobTitle,
            'reason_for_leaving' => $this->faker->text,
            'additional_course' => $this->faker->text,
            'additional_training' => $this->faker->text,
            'achievements' => $this->faker->text,
            'experience_gained' => $this->faker->text,
            'talent' => $this->faker->text,
        ];
    }
}
