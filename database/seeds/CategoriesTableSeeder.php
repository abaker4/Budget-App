<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        'type' => 'Groceries'

       ]);

        DB::table('categories')->insert([
            'type' => 'Restaurants'

        ]);

        DB::table('categories')->insert([
            'type' => 'Alcohol & Bars'

        ]);
        DB::table('categories')->insert([
            'type' => 'Coffee Shops'

        ]);

        DB::table('categories')->insert([
            'type' => 'Gas & Fuel'

        ]);
        DB::table('categories')->insert([
            'type' => 'Clothing'

        ]);

        DB::table('categories')->insert([
            'type' => 'Fast Food'

        ]);



    }
}




