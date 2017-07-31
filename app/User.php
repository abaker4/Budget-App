<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\MonthlyExpense;
use App\DailyExpense;



class User extends Authenticatable
{
    use Notifiable;

//    // User Properties
//    /**
//     * User's full name e.g "Austin Baker"
//     * @var string
//     */
//    private $name;
//    private $email;
//
//    /**
//     * Savings percentage of a user's monthly income e.g. .10
//     * @var float
//     */
////    public $save_percent;
//
//    /**
//     * The reference date for budget calculations - can be reset by user
//     * @var string
//     */
//    public $reference_date;
//
//    private $id;
//    private $remember_token;
//    private $password;
//    private $created_at;
//    private $updated_at;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name', 'email', 'password','save_percent','reference_date'
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


    public function updateSavingPercentage($percentage)
    {
        $this->save_percent = $percentage;
        $this->save();
    }


}
