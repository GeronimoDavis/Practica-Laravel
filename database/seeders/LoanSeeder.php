<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;



class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // obtenemos todos los users y books
        $users = User::all();
        $books = Book::all();

        // Creamos 20 préstamos asignando IDs aleatorias de la base de datos y usamos fn para tomar una nueva id cada vez que se ejecute
        Loan::factory(20)->create([
            'user_id' => fn () => $users->random()->id,
            'book_id' => fn () => $books->random()->id,
        ]);


    }
}
