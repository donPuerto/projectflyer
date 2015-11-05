<?php

namespace App\Http;
use Illuminate\Support\Facades\Session;

Class Flash {

    public function create($title, $message, $level, $key ='flash_message'){
        session()->flash($key,[
            'title'   => $title,
            'message' => $message,
            'level' => $level

        ]);
    }

    public function info($title, $message)
    {
        return $this->create($title,$message,'info');

    } // info

    public function success($title, $message){

        return $this->create($title,$message,'success');

    } //success

    public function error($title, $message){

        return $this->create($title,$message,'error');

    } //error

    public function overlay($title, $message, $level = 'success'){

        return $this->create($title,$message,$level,'flash_message_overlay');

    } //error

}//end flash class