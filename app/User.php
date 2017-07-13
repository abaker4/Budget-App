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
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function publish(MonthlyExpense $monthlyExpense)

    {

        $this->monthlyExpense()->save($monthlyExpense);

    }


    public function monthlyExpense()
    {

        return $this->hasMany(MonthlyExpense::class);
    }




    public function record(DailyExpense $dailyExpense)
    {

        return $this->dailyExpense()->save($dailyExpense);
    }



    public function dailyExpense()
    {

        return $this->hasMany(DailyExpense::class);

    }

    public function type()
    {

        return $this->hasMany(Type::class);
    }


}
