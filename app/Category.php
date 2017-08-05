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


    /**
     * Daily Expense Categories
     */

    const RESTAURANTS = 1;
    const ALCOHOL = 2;
    const COFFEE_SHOPS = 3;
    const CLOTHING = 4;
    const FAST_FOOD = 5;
    const GROCERIES = 6;
    const FUEL = 7;
    const DAILY_CATEGORY_IDS = [1 => 'Restaurants', 2 => 'Alcohol', 3 => 'Coffee',
        4 => 'Clothing', 5 => 'Fast Food', 6 => 'Groceries', 7 => 'Fuel'];




}
