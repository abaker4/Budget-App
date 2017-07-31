<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
//    /**
//     * The name of a specific type of expense, eg "Income, Expense, Savings"
//     * @var str
//     */
//    public $title;
//    private $id;
//    private $created_at;
//    private $updated_at;


    /**
     * Onboarding Types
     */
    const INCOME = 1;
    const EXPENSE = 2;

    /**Many to Many Relationship
     *
     * Type belong to many Users
     */
    public function user()
    {

        $this->belongsToMany(User::class);
    }
}
