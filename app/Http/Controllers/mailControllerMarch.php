<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\sendMailMarch;

class mailControllerMarch extends Controller
{
    //
    public function send()
    {
    	Mail::send(new sendMailMarch());

    }

    public function email()
    {
    	$this->load->view('emailMarch');
    }
}
