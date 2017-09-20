<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DailyExpense;

class MonthlyExpense extends Model
{

//    /**
//     * ID corresponding to a specific type of expense, eg "Income, Expense, Savings"
//     * @var int
//     */
//    public $type_id;
//
//    /**
//     * ID corresponding to a specific type of monthly expense, eg "Housing, Groceries, Memberships etc."
//     * @var int
//     */
//    public $monthly_category_id;
//
//    /**
//     * The dollar amount of a specific monthly expense
//     *
//     * @var str
//     */
//    public $amount;
//
//
//    private $id;
//    private $user_id;
//    private $created_at;
//    private $updated_at;

    /**
     * Nothing is restricted form being mass assigned in this model
     *
     * @var array
     */
    protected $guarded = [];


    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dailyExpense()
    {
        return $this->belongsTo(DailyExpense::class);
    }


    /**
     *
     * Monthly expense belongs to a User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }





}
