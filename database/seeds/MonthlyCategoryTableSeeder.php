<?php

use Illuminate\Database\Seeder;

class MonthlyCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monthly_category')->insert([

            "title" => "Income"
        ]);

        DB::table('monthly_category')->insert([

            "title" => "Housing"
        ]);

        DB::table('monthly_category')->insert([

            "title" => "Utilities"
        ]);

        DB::table('monthly_category')->insert([

            "title" => "Insurances"
        ]);

        DB::table('monthly_category')->insert([

            "title" => "Memberships"
        ]);

        DB::table('monthly_category')->insert([

            "title" => "Groceries"
        ]);

        DB::table('monthly_category')->insert([

            "title" => "Fuel"
        ]);


    }
}
