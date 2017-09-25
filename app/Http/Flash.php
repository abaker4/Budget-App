<?php

namespace App\Http;

class Flash {

    /**
     * returns a default flash message
     * @param $title
     * @param $message
     */
    public function message($title, $message)
    {
        session()->flash('flash_message', [

            'title' => $title,
            'message' => $message,
            'level' => 'info'
        ]);

    }

    /**
     * returns a success flash message
     * @param $title
     * @param $message
     */
    public function success($title, $message)
    {
        session()->flash('flash_message', [

            'title' => $title,
            'message' => $message,
            'level' => 'success'
        ]);

    }

    /**
     * returns a warning flash message
     * @param $title
     * @param $message
     */
    public function warning($title, $message)
    {
        session()->flash('flash_message', [

            'title' => $title,
            'message' => $message,
            'level' => 'warning'
        ]);

    }

}


