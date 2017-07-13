<?php

namespace App\Http\Utilities;


class Categories
{


    protected static $monthly_categories = [
        "Housing" ,

        "Utilities",

        "Insurances",

        "Memberships" ,

        "Groceries",

        "Fuel Cost",

        ];


        public static function allMonthly()
        {

            return static::$monthly_categories;
        }



        protected static $daily_categories = [

                'Groceries',

                'Restaurants',

                'Alcohol/Bars',

                'Coffee Shops',

                'Gas/Fuel',

                'Clothing',

                'Fast Food',

        ];


        public static function allDaily()
        {

            return static::$daily_categories;
        }
}