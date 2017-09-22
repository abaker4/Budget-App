<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyCategory extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {

        return $this->hasMany(User::class);
    }
}
