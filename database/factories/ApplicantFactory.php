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
            'user_id' => User::inRandomOrder()->first()->id,
            'announcement_id' => Announcement::inRandomOrder()->first()->id,           
            'application_number' => $this->faker->numberBetween(1, 20),
            'photo' => $this->faker->sentence,
            'prefix' => $this->faker->sentence,
            'first_name' => $this->faker->sentence,
            'last_name' => $this->faker->sentence,
            'position' => $this->faker->sentence,
            'address' => $this->faker->sentence,
            'birthdate' => $this->faker->sentence,
            'age' => $this->faker->sentence,
            'phone' => $this->faker->sentence,
            'birthplace' => $this->faker->sentence,
            'ethnicity' => $this->faker->sentence,
            'email' => $this->faker->sentence,
            'citizen_id' => $this->faker->sentence,
            'marital_status' => $this->faker->sentence,
            'nationality' => $this->faker->sentence,
            'district' => $this->faker->sentence,
            'province' => $this->faker->sentence,
            'card_issued_date' => $this->faker->sentence,
            'expiration_date' => $this->faker->sentence,
            'military_service' => $this->faker->sentence,
            'religion' => $this->faker->sentence,
            'current_occupation' => $this->faker->sentence,
            'reason_for_leaving' => $this->faker->sentence,
            'education_and_training_year' => $this->faker->sentence,
            'school_name' => $this->faker->sentence,
            'education_degree' => $this->faker->sentence,
            'grade' => $this->faker->sentence,
            'additional_course' => $this->faker->sentence,
            'training' => $this->faker->sentence,
            'work_experience' => $this->faker->sentence,
            'organization_name' => $this->faker->sentence,
            'position_duties' => $this->faker->sentence,
            'salary' => $this->faker->sentence,
            'resignation_reason' => $this->faker->sentence,
            'achievements' => $this->faker->sentence,
            'experience_gained' => $this->faker->sentence,
            'talent' => $this->faker->sentence,
            'reference_person_name' => $this->faker->sentence,
            'reference_person_lastname' => $this->faker->sentence,
            'current_position' => $this->faker->sentence,
            'workplace_and_phone' => $this->faker->sentence,
            'relationship' => $this->faker->sentence,
            'signature_applicant' => $this->faker->sentence,
            'submit_date' => $this->faker->sentence,
            'signature_recruiter' => $this->faker->sentence,
            'recruiter_date' => $this->faker->sentence,
            'signature_payee' => $this->faker->sentence,
            'payee_date' => $this->faker->sentence,
            'accepted' => $this->faker->sentence,
     
        ];
    }
}
