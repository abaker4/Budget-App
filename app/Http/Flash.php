<?php

namespace App\Http;

class Flash {

    /**
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


