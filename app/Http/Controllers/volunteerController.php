<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Registered;
use Session;
use Redirect;

class volunteerController extends Controller
{
    //


public function choose(){
    return view('front.vol');




}


public function chooseEn(){
    return view('front.volen');
}






    public function registerForm(){

        $values = array(
            "username"=> "",
            "password"=> "",
            "email"=> "",
            "firstname"=> "",
            "lastname"=> "",
            "city"=>"",
            "country" => "",
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>""
        );
        return view('front.register' , $values);
    }



    public function registerFormEn(){

        $values = array(
            "username"=> "",
            "password"=> "",
            "email"=> "",
            "firstname"=> "",
            "lastname"=> "",
            "city"=>"",
            "country" => "",
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>""
        );
        return view('front.registerenglish' , $values);
    }
 


    public function register(Request $request){


if($request->password != $request->confirm){

         $values = array(
                "username"=> "",
                "password"=> "",
                "email"=> "",
                "firstname"=> "",
                "lastname"=> "",
                "city"=>"",
                "country" => "",
                "ID"=>"",
                "mid"=>"",
                "phone"=>"",
                "age"=>""
            );
            $message = "كلمة السر ليست متطابقة";
                                            //    $message = "This username already exists, choose another";
             Session::flash('message', $message); 
             Session::flash('alert-class', 'danger-2020'); 


  return view('front.registerenglish' , $values );  
}

    
        $obj =  array(
        "form_params" =>  array(
            "moodlewsrestformat"=> "json",
            "wsfunction"=> "auth_email_signup_user",
            "wstoken"=> "53497a42c19c91fd64d3b65be615a5ca",
            "username"=> $request->username,
            "password"=> $request->password,
            "email"=> $request->email,
            "firstname"=>  $request->fname,
            "lastname"=> $request->lname,
            "city"=> $request->city,
            "country" => $request->country
        )
        );
      
      
        $ID = $request->ID;
        $user = Registered::where('idnumber' , $ID)->first();
        // return $user;
        
        if($user == null){
           
            Session::flash('message', 'You are not volunteer'); 
            Session::flash('alert-class', 'danger-2020'); 

            $values = array(
                "username"=> "",
                "password"=> "",
                "email"=> "",
                "firstname"=> "",
                "lastname"=> "",
                "city"=>"",
                "country" => "",
                "ID"=>"",
                "mid"=>"",
                "phone"=>"",
                "age"=>""
            );
            if($request->langa == "en"){
                return view('front.registerenglish' , $values );
               }else{
                return view('front.register' , $values );
               }
            
        }else{

            $values = array(
                "username"=> "",
                "password"=> "",
                "email"=> "",
                "firstname"=> "",
                "lastname"=> "",
                "city"=>"",
                "country" => "",
                "ID"=>"",
                "mid"=>"",
                "phone"=>"",
                "age"=>""
            );

            $client = new client();
            $res = $client->post(env('FRONT_API_URL')."/webservice/rest/server.php?moodlewsrestformat=json", $obj );
        
                                    $res->getHeader('content-type');
                                    $response = json_decode($res->getBody(), true);
                                    if($response['success']){

                                        Session::flash('alert-class', 'success-2020'); 
                                        Session::flash('message', 'Thank You'); 

                                        $values = array(
                                            "username"=> "",
                                            "password"=> "",
                                            "email"=> "",
                                            "firstname"=> "",
                                            "lastname"=> "",
                                            "city"=>"",
                                            "country" => "",
                                            "ID"=>"",
                                            "mid"=>"",
                                            "phone"=>"",
                                            "age"=>""
                                        );
                                     
                                        if($request->langa == "en"){
                                            return view('front.registerenglish' , $values );
                                           }else{
                                            return view('front.register' , $values );
                                           }
                              
                                        // return  "Success";
                                 
                                 
                                    }else{

                                        $values = array(
                                            "username"=> $request->username,
                                            "password"=> $request->password,
                                            "email"=> $request->email,
                                            "firstname"=>  $request->fname,
                                            "lastname"=> $request->lname,
                                            "city"=> $request->city,
                                            "country" => $request->country,
                                            "ID"=>$ID,
                                            "mid"=>$request->mid,
                                            "phone"=>$request->phone,
                                            "age"=>$request->age
                                        );
                                        // $va = json_encode( $values , true);

                                      

                                        // return $va['username'];

                                        foreach ($response['warnings'] as $key => $value) {
                                            

                                           $it =  $response['warnings'][$key]['item'];

                                           if($it == "username"){
                                               $message = "اسم المستخدم موجود بالفعل";
                                            //    $message = "This username already exists, choose another";
                                               Session::flash('message', $message); 
                                               Session::flash('alert-class', 'danger-2020'); 
                                               if($request->langa == "en"){
                                                return view('front.registerenglish' , $values );
                                               }else{
                                                return view('front.register' , $values );
                                               }
                                             

                                           }


                                           if($it == "password"){
                                            // $message = "Your password is weak!";
                                            $message = "كلمة السر ضعيفة استخدم حروف كابيتال وارقام";
                                            Session::flash('message', $message); 
                                            Session::flash('alert-class', 'danger-2020'); 
                                            if($request->langa == "en"){
                                                return view('front.registerenglish' , $values );
                                               }else{
                                                return view('front.register' , $values );
                                               }
                                        }


                                        if($it == "email"){
                                            // $message = "This email address is already registered!";
                                            $message = "البريد الالكتروني مسجل بالفعل";
                                            Session::flash('message', $message); 
                                            Session::flash('alert-class', 'danger-2020'); 
                                            if($request->langa == "en"){
                                                return view('front.registerenglish' , $values );
                                               }else{
                                                return view('front.register' , $values );
                                               }
                                        }


                                        }
      
                                  
                                    } 
        }


                   
                            // $errorCode =  $response['ErrorCode'];


    }
}
