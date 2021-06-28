<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Registered;
use Session;
use Redirect;

use App\Models\Other;
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
            "branch"=>"",
            "country" => "",
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>""
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
            "accept_terms"=> ""
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
            "accept_terms"=> ""
        );
        return view('front.others.register' , $values);

    }






    public function nonVolunteer(Request $request){

        $username = preg_replace("/\s+/", "", $request->username); 
        if($request->password != $request->confirm){

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
            );
                    $message = "كلمة السر ليست متطابقة";
                     //$message = "This username already exists, choose another";
                     Session::flash('message', $message); 
                     Session::flash('alert-class', 'danger-2020'); 
        
                     if($request->langa == "en"){
                        return view('front.others.registereng' , $values );
                       }else{
                        return view('front.others.register' , $values );
                       }

        }




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
            );
                    $message = "سنك اقل من 16 سنة";
                                                    //$message = "This username already exists, choose another";
        Session::flash('message', $message); 
        Session::flash('alert-class', 'danger-2020'); 

        if($request->langa == "en"){
            return view('front.others.registereng' , $values );
            }else{
            return view('front.others.register' , $values );
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
                "firstname"=>  $request->fname,
                "lastname"=> $request->lname
                // "city"=> $request->city,
                // "country" => $request->country
            )
            );









            $client = new client();
            $res = $client->post(env('FRONT_API_URL')."/webservice/rest/server.php?moodlewsrestformat=json", $obj );
        
                                    $res->getHeader('content-type');
                                    $response = json_decode($res->getBody(), true);

                                    



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
                                            );
    
                                            $message = "اسم المستخدم يجب ان يتكون من حروف صغيرة باللغة الانجليزية ";
                                            Session::flash('alert-class', 'danger-2020'); 
                                            Session::flash('message', $message); 
                                   
    
                                            if($request->langa == "en"){
                                                return view('front.others.registereng' , $values );
                                                }else{
                                                return view('front.others.register' , $values );
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
                                        "accept_terms"=> true
                                        ]);

                                        Session::flash('alert-class', 'success-2020'); 
                                        Session::flash('message', 'Thank You'); 

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
                                            "accept_terms"=> ""
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
                                            "accept_terms"=> true
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
                                                return view('front.others.registereng' , $values );
                                               }else{
                                                return view('front.others.register' , $values );
                                               }
                                             

                                           }


                                           if($it == "password"){
                                            // $message = "Your password is weak!";
                                            $message = "كلمة السر ضعيفة استخدم حروف كابيتال وارقام";
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
                                            $message = "البريد الالكتروني مسجل بالفعل";
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
            "ID"=>"",
            "mid"=>"",
            "phone"=>"",
            "age"=>""
        );
        return view('front.registerenglish' , $values);
    }
 


public function register(Request $request){

 $username = preg_replace("/\s+/", "", $request->username); 

 if($request->password != $request->confirm){

    $values = array(
        "username"=> $username,
        "password"=> $request->password,
        "email"=> $request->email,
        "firstname"=>  $request->fname,
        "lastname"=> $request->lname,
        "branch"=> $request->branch,
        "country" => $request->country,
        "ID"=>$request->ID,
        "mid"=>$request->mid,
        "phone"=>$request->phone,
        "age"=>$request->age
    );
            $message = "كلمة السر ليست متطابقة";
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
        "ID"=>$request->ID,
        "mid"=>$request->mid,
        "phone"=>$request->phone,
        "age"=>$request->age
    );
            $message = "سنك اقل من 16 سنة";
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
            "firstname"=>  $request->fname,
            "lastname"=> $request->lname
            // "city"=> $request->city,
            // "country" => $request->country
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
                "ID"=>$request->ID,
                "mid"=>$request->mid,
                "phone"=>$request->phone,
                "age"=>$request->age
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
                "ID"=>"",
                "mid"=>"",
                "phone"=>"",
                "age"=>""
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
                                                "ID"=>$request->ID,
                                                "mid"=>$request->mid,
                                                "phone"=>$request->phone,
                                                "age"=>$request->age
                                            );
    
                                            $message = "اسم المستخدم يجب ان يتكون من حروف صغيرة باللغة الانجليزية ";
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
                                        Registered::where('code' , $ID)->update(["age"=>$request->age  , "branch"=>$request->branch, "phone"=>$request->phone]);  



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
                                            "ID"=>"",
                                            "mid"=>"",
                                            "phone"=>"",
                                            "age"=>""
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
                                            "branch"=> $request->branch,
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



                                }

                            }


                                // }
                                
                                // else{

                                //     $values = array(
                                //         "username"=> "",
                                //         "password"=> "",
                                //         "email"=> "",
                                //         "firstname"=> "",
                                //         "lastname"=> "",
                                //         "branch"=>"",
                                //         "country" => "",
                                //         "ID"=>"",
                                //         "mid"=>"",
                                //         "phone"=>"",
                                //         "age"=>""
                                //     );
                                //     if($request->langa == "en"){
                                //         return view('front.registerenglish' , $values );
                                //        }else{
                                //         return view('front.register' , $values );
                                //        }


                                // }
        }


                   
                            // $errorCode =  $response['ErrorCode'];


    }
}
