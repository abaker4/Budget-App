<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class DailyExpense extends Model
{
    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Nothing is restricted from being mass assigned
     * @var array
     */
    protected $guarded =[];


    /**
     * Daily Expense belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }





}
