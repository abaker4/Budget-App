<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class DailyExpense extends Model
{
    /**
     * Nothing is restricted from being mass assigned
     *
     * @var array
     */
    protected $guarded =[];


    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
