<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\MonthlyExpense;
use App\DailyExpense;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [

        'name', 'email', 'password','save_percent', 'reference_date'  
    ];


    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Method creates a new entry for Monthly Expenses in the Database
     * @param \App\MonthlyExpense $monthlyExpense
     */
    public function publish(MonthlyExpense $monthlyExpense)
    {
        $this->monthlyExpense()->save($monthlyExpense);
    }


    /**
     * A User has many Monthly Expenses
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function monthlyExpense()
    {
        return $this->hasMany(MonthlyExpense::class);
    }


    /**
     * Method creates a new entry for Daily Expenses in the Database
     * @param \App\DailyExpense $dailyExpense
     * @return false|\Illuminate\Database\Eloquent\Model
     */
    public function record(DailyExpense $dailyExpense)
    {
        return $this->dailyExpense()->save($dailyExpense);
    }


    /**
     * A User has many Daily Expenses
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dailyExpense()
    {
        return $this->hasMany(DailyExpense::class);
    }


    /**
     * creates/updates saving percentage entry
     * @param $percentage
     */
    public function updateSavingPercentage($percentage)
    {
        $this->save_percent = $percentage;
        $this->save();
    }

}
