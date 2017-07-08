<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    public function daily()
    {

        return $this->belongsTo(Daily::class);
    }

    public function user()
    {

        return $this->belongsToMany(User::class);
    }
}
