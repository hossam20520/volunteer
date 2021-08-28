<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
class ContactController extends Controller
{
    //

public function contact(Request $req){
    // return response()->json(['results'=>  $req->message], 200);

if($req->dep == "firstAid"){
//firstaid@egyptianrc.org

    $data = array('name'=>'Mr.Moahmed',   'email'=>$req->email ,  'Name'=>$req->name    ,  'phone'=> $req->phone , 'subject'=>$req->subjectt  , 'messagee'=>$req->message);
    Mail::send('mail', $data, function($message) {
        $message->to("firstaid@egyptianrc.org", 'First Aid Department')->subject
           ("First Aid Department");
        $message->from("support@ercelearning.com", $req->name);
     });
    return response()->json(['results'=>  true], 200);



}else if($req->dep == "saab"){

    $data = array('name'=>'saab',   'email'=>$req->email ,  'Name'=>$req->name    ,  'phone'=> $req->phone , 'subject'=>$req->subjectt  , 'messagee'=>$req->message);
    Mail::send('mail', $data, function($message) {
        $message->to("hossamhassan889@gmail.com", 'Tutorials Point')->subject
           ("First Aid Department");
        $message->from("support@ercelearning.com", $req->name);
     });
    return response()->json(['results'=>  true], 200);

}else if($req->dep == "mercedes"){

    $data = array('name'=>'mercedes',   'email'=>$req->email ,  'Name'=>$req->name    ,  'phone'=> $req->phone , 'subject'=>$req->subjectt  , 'messagee'=>$req->message);
    Mail::send('mail', $data, function($message) {
        $message->to("hossamhassan889@gmail.com", 'Tutorials Point')->subject
           ("First Aid Department");
        $message->from("support@ercelearning.com", $req->name);
     });
    return response()->json(['results'=>  true], 200);
    //  
}else if($req->dep == "audi"){

    $data = array('name'=>'audi',   'email'=>$req->email ,  'Name'=>$req->name    ,  'phone'=> $req->phone , 'subject'=>$req->subjectt  , 'messagee'=>$req->message);
    Mail::send('mail', $data, function($message) {
        $message->to("hossamhassan889@gmail.com", 'Tutorials Point')->subject
           ("First Aid Department");
        $message->from("support@ercelearning.com", $req->name);
     });
    return response()->json(['results'=>  true], 200);
 
}else{
    
    $data = array('name'=>'audi',   'email'=>$req->email ,  'Name'=>$req->name    ,  'phone'=> $req->phone , 'subject'=>$req->subjectt  , 'messagee'=>$req->message);
    Mail::send('mail', $data, function($message) {
        $message->to("hossamhassan889@gmail.com", 'Tutorials Point')->subject
           ("First Aid Department");
        $message->from("support@ercelearning.com", $req->name);
     });
    return response()->json(['results'=>  true], 200); 
}


}



}
