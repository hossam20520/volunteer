<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;

class MailController extends Controller
{
    //


    public  function basic_email() {
        $data = array('name'=>"Virat Gandhi" , 'username'=> 'username' , 'password'=>'password');
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('hossamhassan889@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
     public static  function html_email($data , $to) {
       
        Mail::send('mail', $data, function($message) {
           $message->to($to, 'Tutorials Point')->subject
              ('Laravel HTML Testing Mail');
           $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
    //  public function attachment_email() {
    //     $data = array('name'=>"Virat Gandhi");
    //     Mail::send('mail', $data, function($message) {
    //        $message->to('abc@gmail.com', 'Tutorials Point')->subject
    //           ('Laravel Testing Mail with Attachment');
    //        $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
    //        $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
    //        $message->from('xyz@gmail.com','Virat Gandhi');
    //     });
    //     echo "Email Sent with attachment. Check your inbox.";
    //  }

}
