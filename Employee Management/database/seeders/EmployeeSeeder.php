<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the datab    ase seeds.
     */
    public function run(): void
    {
        for($i=0;$i<100;$i++){
            $faker = Faker::create();
        $employee = new Employee();
        $employee->name = $faker->name;
        $employee->designation = $faker->jobTitle;
        $employee->email = $faker->email;
        $employee->joining_date = $faker->date;
        $employee->salary = $faker->numberBetween(100,10000);
        $employee->mobile_no = $faker->phoneNumber;
        $employee->address = $faker->address;
        $employee->save();
        }
        

    }
}
