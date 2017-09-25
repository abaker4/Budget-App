<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DailyExpense;

class MonthlyExpense extends Model
{
    /**
     * protects against mass assignment
     * @var array
     */
    protected $guarded = [];

    /**
     * Monthly expense belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
