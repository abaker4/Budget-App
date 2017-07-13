<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**Many to Many Relationship
     *
     * Type belong to many Users
     */
    public function user()
    {

        $this->belongsToMany(User::class);
    }
}
