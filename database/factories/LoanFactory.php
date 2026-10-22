<?php

namespace Database\Factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Book;
use App\Models\User;


/**
 * @extends Factory<Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'member' => fake()->name(),
            'email' => fake()->safeEmail(),
            'loan_date' => fake()->dateTimeBetween('-1 month', 'now'),
            'return_date' => fake()->optional()->dateTimeBetween('now', '+2 month'),//optional() para que tenga un 50% de ser null
        ];
    }
}
