<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<100;$i++){
            $faker = Faker::create();
            $book = new Book();
            $book->name = $faker->name;
            $book->designation = $faker->jobTitle;
            $book->email = $faker->email;
            $book->joining_date = $faker->date;
            $book->salary = $faker->numberBetween(100,10000);
            $book->mobile_no = $faker->phoneNumber;
            $book->address = $faker->address;
            $book->save();

        }
    }
}
