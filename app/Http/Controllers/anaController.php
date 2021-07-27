<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use GuzzleHttp\Client;

use Symfony\Component\HttpFoundation\Response;

class anaController extends Controller
{
    //


public function firstAid(){

$id = $this->get_course_moodle_id(1)['id'];
$name = $this->get_course_moodle_id(1)['fullname'];
$users = $this->get_users_in_course($id);


$id_2 = $this->get_course_moodle_id(2)['id'];
$name_2 = $this->get_course_moodle_id(2)['fullname'];
$users_3 = $this->get_users_in_course($id);

$ar = array($id=>$name  ,  $id_2=>$name_2);
        return $ar;
    }













    public function get_course_moodle_id($id){


        $data = array(
            'wstoken' => 'e79186b3bb28e8e3a82788817ec8a1d3',
            'wsfunction' =>  'core_course_get_courses_by_field',
            'field' => 'idnumber',
            'value' => $id
         );




        $client = new client();
        $res = $client->post(env('FRONT_API_URL'), [
                                // 'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                                'form_params' =>  $data
                                ]);

                                // $res->getHeader('content-type');
                               $response = json_decode($res->getBody(), true);
                            


        return $response['courses'][0];
    }




    public function get_users_in_course($id){

                              $core_enrol_get_enrolled_users_2 = array(
                                    'wstoken' => '1d5a9968a0f01f743ea73b5bf0fee117',
                                    'wsfunction' =>  'core_enrol_get_enrolled_users',
                                    'courseid'  => $id
                                    );

                                    $client = new client();
                                   $res2 = $client->post(env('FRONT_API_URL'), [
                                    // 'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                                    'form_params' =>  $core_enrol_get_enrolled_users_2
                                    ]);
    
                                    // $res->getHeader('content-type');
                                   $response_2 = json_decode($res2->getBody(), true);
                                   $total_users_2 = count($response_2);

                                   return $total_users_2;

    }
}
