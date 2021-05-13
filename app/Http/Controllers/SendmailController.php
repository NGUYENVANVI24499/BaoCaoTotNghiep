<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendmailController extends Controller
{
    public function sendmail(){

    	$data1 = [

    		'name'=>'vi',

    	];

    	Mail::send( 'email', $data1, function ( $message ) {
          $message->from( 'vanvi24499@gmail.com', 'Bạn có một lịch công tác mới' );
          $message->to( 'vanvinguyenfc1@gmail.com', 'Tên giảng viên' );
          $message->subject( 'Bạn có một lịch công tác mới' );
        } );
    }
}
