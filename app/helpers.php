<?php

/**
 * Flashes a message for visual feedback to the user
 * @param null $title
 * @param null $message
 * @return \Illuminate\Foundation\Application|mixed
 */
function  flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');


    if(func_num_args() == 0){

        return $flash;
    }

    return $flash->message($title, $message);

}