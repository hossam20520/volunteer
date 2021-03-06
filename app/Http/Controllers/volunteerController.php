<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Registered;
use Session;
use App\Controllers\MailController;
use Redirect;

use App\Models\Other;
class volunteerController extends Controller
{
    //


public function contact(){
    return view('front.contact');
}










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
            "branch"=>"",
            "country" => "",
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>"",
            "gender"=> ""
        );
        return view('front.register' , $values);
    }





    public function registerFormEnNot(){

        $values = array(
            "username"=> "",
            "password"=> "",
            "email"=> "",
            "firstname"=> "",
            "lastname"=> "",
            "company"=> "",
            "job"=> "",
            "eq"=> "",
            "country"=> "",
            "city"=> "",
            "phone"=> "",
            "age"=> "",
            "accept_terms"=> "",
            "gender"=>"",
            "idpassport"=> "",
            "fullname"=>"",
            "nationality"=>"",
            "IDNUM"=>""
        );
        return view('front.others.registereng' , $values);
    }


    public function registerFormNot(){

        $values = array(
            "username"=> "",
            "password"=> "",
            "email"=> "",
            "firstname"=> "",
            "lastname"=> "",
            "company"=> "",
            "job"=> "",
            "eq"=> "",
            "country"=> "",
            "city"=> "",
            "phone"=> "",
            "age"=> "",
            "accept_terms"=> "",
            "gender"=>"",
            "idpassport"=> "",
            "fullname"=>"",
            "nationality"=>"",
            "IDNUM"=>""
        );
        return view('front.others.register' , $values);

    }






    public function nonVolunteer(Request $request){

        $username = preg_replace("/\s+/", "", $request->username); 

        // start if 
        if($request->password != $request->confirm){

            $values = array(
                "username"=> $username,
                "password"=> $request->password,
                "email"=> $request->email,
                "firstname"=>  $request->fname,
                "lastname"=>  $request->lname,
                "company"=> $request->company,
                "job"=> $request->job,
                "eq"=> $request->eq,
                "country"=> $request->country,
                "city"=> $request->city,
                "phone"=> $request->phone,
                "age"=> $request->age,
                "gender"=>$request->gender,
                "idpassport"=> $request->idpassport,
                "fullname"=>$request->fullname,
                "nationality"=>$request->nationality,
                "IDNUM"=>$request->IDNUM
            );
                    $message = "???????? ???????? ???????? ??????????????";
                     //$message = "This username already exists, choose another";
                     Session::flash('message', $message); 
                     Session::flash('alert-class', 'danger-2020'); 
        
                     if($request->langa == "en"){
                        return view('front.others.registereng' , $values );
                       }else{
                        return view('front.others.register' , $values );
                       }

        }


        // end if 


//    start if 2

        if($request->age < 16){

            $values = array(
                "username"=> $username,
                "password"=> $request->password,
                "email"=> $request->email,
                "firstname"=>  $request->fname,
                "lastname"=> $request->lname,
                "company"=> $request->company,
                "job"=> $request->job,
                "eq"=> $request->eq,
                "country"=> $request->country,
                "city"=> $request->city,
                "phone"=> $request->phone,
                "age"=> $request->age,
                "gender"=>$request->gender,
                "idpassport"=> $request->idpassport,
                "fullname"=>$request->fullname,
                "nationality"=>$request->nationality,
                "IDNUM"=>$request->IDNUM
            );
                    $message = "?????? ?????? ???? 16 ??????";
                                                    //$message = "This username already exists, choose another";
        Session::flash('message', $message); 
        Session::flash('alert-class', 'danger-2020'); 

        if($request->langa == "en"){
            return view('front.others.registereng' , $values );
            }else{
            return view('front.others.register' , $values );
            }
        
        }


        // end if 2




        $obj =  array(
            "form_params" =>  array(
                "moodlewsrestformat"=> "json",
                "wsfunction"=> "auth_email_signup_user",
                "wstoken"=> "53497a42c19c91fd64d3b65be615a5ca",
                "username"=> $username,
                "password"=> $request->password,
                "email"=> $request->email,
                "firstname"=>  $request->fname,
                "lastname"=> $request->lname,
                "customprofilefields[6][type]"=> "string",
                "customprofilefields[6][value]"=> "no",
                "customprofilefields[6][name]" => "profile_field_volunteer",
                "city"=> $request->city,
                "country" => $request->country,
                "customprofilefields[7][type]"=> "string",
                "customprofilefields[7][value]"=> $request->phone,
                "customprofilefields[7][name]" => "profile_field_phone",
                "customprofilefields[8][type]"=> "string",
                "customprofilefields[8][value]"=>"not_volunteer",
                "customprofilefields[8][name]" => "profile_field_Branch",
            )
            );









            $client = new client();
            $res = $client->post(env('FRONT_API_URL')."/webservice/rest/server.php?moodlewsrestformat=json", $obj );
        
                                    $res->getHeader('content-type');
                                    $response = json_decode($res->getBody(), true);

                                    

                            // print_r(count($response));

                                    if(count($response) !== 2 ){   








                                        if($response['errorcode']  == "invalidparameter"){
                                            $values = array(
                                                "username"=> "",
                                                "password"=> $request->password,
                                                "email"=> $request->email,
                                                "firstname"=>  $request->fname,
                                                "lastname"=> $request->lname,
                                                "company"=> $request->company,
                                                "job"=> $request->job,
                                                "eq"=> $request->eq,
                                                "country"=> $request->country,
                                                "city"=> $request->city,
                                                "phone"=> $request->phone,
                                                "age"=> $request->age,
                                                "gender"=>$request->gender,
                                                "idpassport"=> $request->idpassport,
                                                "fullname"=>$request->fullname,
                                                "nationality"=>$request->nationality,
                                                "IDNUM"=>$request->IDNUM
                                            );
    
                                            $message = "?????? ???????????????? ?????? ???? ?????????? ???? ???????? ?????????? ???????????? ???????????????????? ";
                                            Session::flash('alert-class', 'danger-2020'); 
                                            Session::flash('message', $message); 
                                            if($request->langa == "en"){
                                                return view('front.others.registereng' , $values );
                                                }else{
                                                return view('front.others.register' , $values );
                                                }


                                            }


                                     }else{

                                    

                                    if($response['success']){
                                        Other::insert([
                                        "username"=> $username,
                                        "password"=> $request->password,
                                        "email"=> $request->email,
                                        "firstname"=>  $request->fname,
                                        "lastname"=> $request->lname,
                                        "company"=> $request->company,
                                        "job"=> $request->job,
                                        "eq"=> $request->eq,
                                        "country"=> $request->country,
                                        "city"=> $request->city,
                                        "phone"=> $request->phone,
                                        "age"=> $request->age,
                                        "accept_terms"=> true,
                                        "gender"=>$request->gender,
                                        "idpassport"=> $request->idpassport,
                                        "fullname"=>$request->fullname,
                                        "nationality"=>$request->nationality
                                       
                                        ]);


                                        // print_r($response);

                                    
                                            Session::flash('username', $username); 
                                            Session::flash('password', $request->password); 
                                            Session::flash('alert-class', 'success-2020'); 
                                            Session::flash('message', 'Thank You'); 
                                       
                                            if($request->checkout == true ){
                                                return Redirect::to('https://ercelearning.com/gateway/checkout/');
                                             }

                                        $values = array(
                                            "username"=> "",
                                            "password"=> "",
                                            "email"=> "",
                                            "firstname"=> "",
                                            "lastname"=> "",
                                            "company"=> "",
                                            "job"=> "",
                                            "eq"=> "",
                                            "country"=> "",
                                            "city"=> "",
                                            "phone"=> "",
                                            "age"=> "",
                                            "accept_terms"=> "",
                                            "gender"=>"",
                                            "idpassport"=> "",
                                            "fullname"=>"",
                                            "nationality"=>"",
                                            "IDNUM"=>"",
                                        );
                                     
                                        if($request->langa == "en"){
                                            return view('front.success_en' , $values );
                                           }else{
                                            return view('front.success_ar' , $values );
                                           }
                              
                                        // return  "Success";
                                 
                                 
                                    }else{

                                        $values = array(
                                            "username"=> $username,
                                            "password"=> $request->password,
                                            "email"=> $request->email,
                                            "firstname"=>  $request->fname,
                                            "lastname"=> $request->lname,
                                            "company"=> $request->company,
                                            "job"=> $request->job,
                                            "eq"=> $request->eq,
                                            "country"=> $request->country,
                                            "city"=> $request->city,
                                            "phone"=> $request->phone,
                                            "age"=> $request->age,
                                            "accept_terms"=> true,
                                            "gender"=>$request->gender,
                                            "idpassport"=> $request->idpassport,
                                            "fullname"=>$request->fullname,
                                            "nationality"=>$request->nationality,
                                            "IDNUM"=>$request->IDNUM,
                                        );
                                        // $va = json_encode( $values , true);

                                      

                                        // return $va['username'];
                                    //    print_r($response['warnings']);
                                        foreach ($response['warnings'] as $key => $value) {
                                            

                                           $it =  $response['warnings'][$key]['item'];

                                           if($it == "username"){
                                               $message = "?????? ???????????????? ?????????? ????????????";
                                            //    $message = "This username already exists, choose another";
                                                  Session::flash('message', $message); 
                                                  Session::flash('alert-class', 'danger-2020'); 
                                               if($request->langa == "en"){
                                                return view('front.others.registereng' , $values );
                                               }else{
                                                return view('front.others.register' , $values );
                                               }
                                             

                                           }


                              


                                        if($it == "email"){
                                            // $message = "This email address is already registered!";
                                            $message = "???????????? ???????????????????? ???????? ????????????";
                                            Session::flash('message', $message); 
                                            Session::flash('alert-class', 'danger-2020'); 
                                            if($request->langa == "en"){
                                                return view('front.others.registereng' , $values );
                                               }else{
                                                return view('front.others.register' , $values );
                                               }
                                        }

                                        $message = "???????? ???????? ?????? ???? ?????????? ?????? ??????";
                                        Session::flash('message', $message); 
                                        Session::flash('alert-class', 'danger-2020'); 
                                          if($request->langa == "en"){
                                            return view('front.others.registereng' , $values );
                                           }else{
                                            return view('front.others.register' , $values );
                                           }


                                        }
      
                                  
                                    } 

                                }
                                


    }






    











    public function registerFormEn(){

        $values = array(
            "username"=> "",
            "password"=> "",
            "email"=> "",
            "firstname"=> "",
            "lastname"=> "",
            "branch"=>"",
            "country" => "",
            "city" => "",
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>"",
            "gender"=>""
        );
        return view('front.registerenglish' , $values);
    }
 


public function register(Request $request){

 $username = preg_replace("/\s+/", "", $request->username); 
 $username = $username;
 $fullname =  $request->fname." ".$request->lname;


 $user = Registered::where('code' ,$request->ID)->where('have_account' , "yes")->first();

 if( $user != null){

    $values = array(
        "username"=> $username,
        "password"=> $request->password,
        "email"=> $request->email,
        "firstname"=> $request->fname,
        "lastname"=> $request->lname ,
        "branch"=> $request->branch,
        "country" => $request->country,
        "city" => $request->city,
        "ID"=>$request->ID,
        "mid"=>$request->mid,
        "phone"=>$request->phone,
        "age"=> $request->age,
        "gender"=> $request->gender
    );
            $message = "?????? ???? ?????????? ???????????? ??????????";
                                            //$message = "This username already exists, choose another";
             Session::flash('message', $message); 
             Session::flash('alert-class', 'danger-2020'); 

             if($request->langa == "en"){
                return view('front.registerenglish' , $values );
               }else{
                return view('front.register' , $values );
               }

}


 if($request->password != $request->confirm){

    $values = array(
        "username"=> $username,
        "password"=> $request->password,
        "email"=> $request->email,
        "firstname"=>  $request->fname,
        "lastname"=> $request->lname,
        "branch"=> $request->branch,
        "country" => $request->country,
        "city" => $request->city,
        "ID"=>$request->ID,
        "mid"=>$request->mid,
        "phone"=>$request->phone,
        "age"=>$request->age,
        "gender"=> $request->gender
    );
            $message = "???????? ???????? ???????? ??????????????";
                                            //$message = "This username already exists, choose another";
             Session::flash('message', $message); 
             Session::flash('alert-class', 'danger-2020'); 

             if($request->langa == "en"){
                return view('front.registerenglish' , $values );
               }else{
                return view('front.register' , $values );
               }

}


if($request->age < 16){

    $values = array(
        "username"=> $username ,
        "password"=> $request->password,
        "email"=> $request->email,
        "firstname"=>  $request->fname,
        "lastname"=> $request->lname,
        "branch"=> $request->branch,
        "country" => $request->country,
        "city" => $request->city,
        "ID"=>$request->ID,
        "mid"=>$request->mid,
        "phone"=>$request->phone,
        "age"=>$request->age,
        "gender"=> $request->gender
    );
            $message = "?????? ?????? ???? 16 ??????";
                                            //$message = "This username already exists, choose another";
             Session::flash('message', $message); 
             Session::flash('alert-class', 'danger-2020'); 

             if($request->langa == "en"){
                return view('front.registerenglish' , $values );
               }else{
                return view('front.register' , $values );
               }

}




    
        $obj =  array(
        "form_params" =>  array(
            "moodlewsrestformat"=> "json",
            "wsfunction"=> "auth_email_signup_user",
            "wstoken"=> "53497a42c19c91fd64d3b65be615a5ca",
            "username"=> $username,
            "password"=> $request->password,
            "email"=> $request->email,
            "firstname"=> $request->fname ,
            "lastname"=> $request->lname,
            "customprofilefields[6][type]"=> "string",
            "customprofilefields[6][value]"=> "yes",
            "customprofilefields[6][name]" => "profile_field_volunteer",
            "customprofilefields[7][type]"=> "string",
            "customprofilefields[7][value]"=> $request->phone,
            "customprofilefields[7][name]" => "profile_field_phone",
            "customprofilefields[8][type]"=> "string",
            "customprofilefields[8][value]"=>$request->branch,
            "customprofilefields[8][name]" => "profile_field_Branch",
            "customprofilefields[9][type]"=> "string",
            "customprofilefields[9][value]"=>$request->ID,
            "customprofilefields[9][name]" => "profile_field_Nationalid",
            "city"=> $request->city,
            "country" => $request->country
        )
        );
      
      
        $ID = $request->ID;
        $user = Registered::where('code' , $ID)->first();
        // return $user;
        
        if($user == null){
           
            Session::flash('message', 'You are not volunteer'); 
            Session::flash('alert-class', 'danger-2020'); 

            $values = array(
                "username"=> $username,
                "password"=> $request->password,
                "email"=> $request->email,
                "firstname"=>  $request->fname,
                "lastname"=> $request->lname,
                "branch"=> $request->branch,
                "country" => $request->country,
                "city" => $request->city,
                "ID"=>$request->ID,
                "mid"=>$request->mid,
                "phone"=>$request->phone,
                "age"=>$request->age,
                "gender"=> $request->gender
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
                "branch"=>"",
                "country" => "",
                "city" => "",
                "ID"=>"",
                "mid"=>"",
                "phone"=>"",
                "age"=>"",
                "gender"=>""
            );



            

            $client = new client();
            $res = $client->post(env('FRONT_API_URL')."/webservice/rest/server.php?moodlewsrestformat=json", $obj );
        
                                    $res->getHeader('content-type');
                                    $response = json_decode($res->getBody(), true);

                                    // return $response;

                                    // exception


                                    // $isTouch = isset($response);

                                    // print_r(count($response));

                                    if(count($response) !== 2 ){


                                        if($response['errorcode']  == "invalidparameter"){
                                            $values = array(
                                                "username"=> "",
                                                "password"=> $request->password,
                                                "email"=> $request->email,
                                                "firstname"=>  $request->fname,
                                                "lastname"=> $request->lname,
                                                "branch"=> $request->branch,
                                                "country" => $request->country,
                                                "city" => $request->city,
                                                "ID"=>$request->ID,
                                                "mid"=>$request->mid,

                                                "phone"=>$request->phone,
                                                "age"=>$request->age,
                                                "gender"=> $request->gender
                                            );
    
                                            $message = "?????? ???????????????? ?????? ???? ?????????? ???? ???????? ?????????? ???????????? ???????????????????? ";
                                            Session::flash('alert-class', 'danger-2020'); 
                                            Session::flash('message', $message); 
                                   
    
                                            if($request->langa == "en"){
                                                return view('front.registerenglish' , $values );
                                               }else{
                                                return view('front.register' , $values );
                                               }
    
    
    
                                        }

                                    }else{

                                   

                           
                                //    if($isTouch){

                                   
                                    try {
                                 
                             
                                           
                                     
                                    if($response['success']){
                                        Registered::where('code' , $ID)->update(["age"=>$request->age  , "branch"=>$request->branch,
                                         "phone"=>$request->phone , "gender"=>$request->gender , "country"=>$request->country , "have_account"=>"yes"  ]);  


                                        Session::flash('username', $username); 
                                        Session::flash('password', $request->password);

                                        Session::flash('alert-class', 'success-2020'); 
                                        Session::flash('message', 'Thank You'); 

                                        $values = array(
                                            "username"=> "",
                                            "password"=> "",
                                            "email"=> "",
                                            "firstname"=> "",
                                            "lastname"=> "",
                                            "branch"=>"",
                                            "country" => "",
                                            "city" => "",
                                            "ID"=>"",
                                            "mid"=>"",
                                            "phone"=>"",
                                            "age"=>"",
                                            "gender"=>""
                                        );
                                        // $data = array('name'=>"Virat Gandhi" , 'username'=> 'username' , 'password'=>'password');

                                        // MailController::html_email($data , "hossamhassan889@gmail.com");
                                        if($request->langa == "en"){
                                            return view('front.success_en' , $values );
                                           }else{
                                            return view('front.success_ar' , $values );
                                           }
                              
                                        // return  "Success";
                                 
                                 
                                    }else{

                                        $values = array(
                                            "username"=> $username,
                                            "password"=> $request->password,
                                            "email"=> $request->email,
                                            "firstname"=>  $request->fname,
                                            "lastname"=> $request->lname,
                                            "branch"=> $request->branch,
                                            "country" => $request->country,
                                            "city" => $request->city,
                                            "ID"=>$ID,
                                            "mid"=>$request->mid,
                                            "phone"=>$request->phone,
                                            "age"=>$request->age,
                                            "gender"=> $request->gender
                                        );
                                        // $va = json_encode( $values , true);

                                      

                                        // return $va['username'];

                                        foreach ($response['warnings'] as $key => $value) {
                                            

                                           $it =  $response['warnings'][$key]['item'];

                                           if($it == "username"){
                                               $message = "?????? ???????????????? ?????????? ????????????";
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
                                            $message = "???????? ???????? ?????????? ???????????? ???????? ?????????????? ????????????";
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
                                            $message = "???????????? ???????????????????? ???????? ????????????";
                                            Session::flash('message', $message); 
                                            Session::flash('alert-class', 'danger-2020'); 
                                            if($request->langa == "en"){
                                                return view('front.registerenglish' , $values );
                                               }else{
                                                return view('front.register' , $values );
                                               }
                                        }


                                             $message = "???????? ???????? ?????? ???? ?????????? ?????? ??????";
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
                                      
                                //catch exception
               catch(Exception $e) {




           $values = array(
            "username"=> "",
            "password"=> "",
            "email"=> "",
            "firstname"=> "",
            "lastname"=> "",
            "branch"=>"",
            "country" => "",
            "city" => "",
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>"",
            "gender"=>""
        );
        if($request->langa == "en"){
            return view('front.registerenglish' , $values );
           }else{
            return view('front.register' , $values );
           }



                                }

                            }


                       
        }


                   
                         


    }
}
