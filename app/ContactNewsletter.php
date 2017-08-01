<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactNewsletter extends Model
{
    public $email;

    protected $fillable = [
        'email',
    ];


}
