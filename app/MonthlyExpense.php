<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DailyExpense;

class MonthlyExpense extends Model
{
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
