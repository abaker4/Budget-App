<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyCategory extends Model
{
    public function user()
    {

        return $this->hasMany(User::class);
    }
}
