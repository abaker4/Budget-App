<?php

use Illuminate\Database\Seeder;

class DailyCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('daily_category')->insert([
            "title" => "Restaurants",
        ]);

        DB::table('daily_category')->insert([
            "title" => "Alcohol/Bars",
        ]);

        DB::table('daily_category')->insert([
            "title" => "Coffee Shops",
        ]);

        DB::table('daily_category')->insert([
            "title" => "Clothing",
        ]);

        DB::table('daily_category')->insert([
            "title" => "Fast Food",
        ]);
        DB::table('daily_category')->insert([
            "title" => "Groceries",
        ]);
        DB::table('daily_category')->insert([
            "title" => "Gas/Fuel",
        ]);


    }
}
