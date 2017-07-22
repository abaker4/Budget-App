<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'title' => 'Income'

        ]);

        DB::table('types')->insert([
            'title' => 'Expense'

        ]);

    }
}

