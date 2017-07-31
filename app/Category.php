<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * Monthly Expense Categories
     */
    const INCOME = 1;
    const HOUSING = 2;
    const UTILITIES = 3;
    const INSURANCES = 4;
    const MEMBERSHIPS = 5;
    const GROCERIES = 6;
    const FUEL = 7;


    /**
     * Daily Expense Categories
     */

    const RESTAURANTS = 1;
    const ALCOHOL = 2;
    const COFFEE_SHOPS = 3;
    const CLOTHING = 4;
    const FAST_FOOD = 5;


}
