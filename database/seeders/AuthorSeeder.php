<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Alfi', 'email' => 'sahrin201@gmail.com', 'birth' => '1980-01-01']);
        Author::create(['name' => 'Denice', 'email' => 'Denice@gmail.com', 'birth' => '1990-02-15']);
        Author::create(['name' => 'Umar', 'email' => 'Umar@gmail.com', 'birth' => '1990-02-15']);
    }
}
