<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*Esto seria lo mas adecuado pero nos pieden tener sedders separados
        $users = User::factory(10)->create();
        $books = Book::factory(10)->create();

        
        Loan::factory(20)
            ->recycle($users)
            ->recycle($books)
            ->create(); */

        //llamamos a los sedders

        $this->call([
            UserSeeder::class,// Primero crea usuarios
            BookSeeder::class,
            LoanSeeder::class,//Finalmente crea préstamos enlazados
        ]);


    }
}
