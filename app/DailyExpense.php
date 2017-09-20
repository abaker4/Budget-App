<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class DailyExpense extends Model
{

//    /**
//     * Id corresponding to daily_category table, eg "coffee shops, clothes, alcohol/bars etc."
//     * @var int
//     */
//    public $daily_category_id;
//
//    /**
//     * The dollar amount inputted for daily expense
//     * @var int
//     */
//    public $amount;
//
//
//    private $id;
//    private $user_id;
//    private $created_at;
//    private $updated_at;
    protected $dates = [
        'created_at',
        'updated_at',

    ];

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
