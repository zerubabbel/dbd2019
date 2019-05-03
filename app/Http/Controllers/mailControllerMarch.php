<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailControllerMarch extends Controller
{
    //
    public function send()
    {
    	Mail::send(['text'=>'mailMarch'],['name', 'Sarthak'], function($message){
    		$message->to('achiappetta90@gmail.com', 'To Bitfumes')->subject('Test Email');
    		$message->from('achiappetta90@gmail.com', 'Bitfumes');
    	});

    }
}
