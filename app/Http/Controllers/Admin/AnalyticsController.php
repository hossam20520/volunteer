<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAnalyticRequest;
use App\Http\Requests\StoreAnalyticRequest;
use App\Http\Requests\UpdateAnalyticRequest;
use Gate;
use App\Models\Course;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnalyticsController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('analytic_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $data = array(
            'wstoken' => '1d5a9968a0f01f743ea73b5bf0fee117',
            'wsfunction' =>  'core_course_get_courses',
         );




        $client = new client();
        $res = $client->post(env('FRONT_API_URL'), [
                                // 'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                                'form_params' =>  $data
                                ]);


                               $response = json_decode($res->getBody(), true);
                               $total_courses = count((array)$response);

// dd($response);
                   
//get all courses from database array courses
$courses  = Course::where('department' , 'F')->get();


$ar = [];
foreach ($courses as  $value) {
    $id = $this->get_course_moodle_id($value->courseid)['id'];
    $name = $this->get_course_moodle_id($value->courseid)['fullname'];
    $users = $this->get_users_in_course($id);
    $ar[$users] = $name;
}



$volunteer  = Course::where('department' , 'V')->get();
$vola = [];
foreach ($volunteer as  $value) {
    $id = $this->get_course_moodle_id($value->courseid)['id'];
    $name = $this->get_course_moodle_id($value->courseid)['fullname'];
    $users = $this->get_users_in_course($id);
    $vola[$users] = $name;
}

$nums = [];
$youth  = Course::where('department' , 'Y')->get();
if($youth == []){
    $nums = [0];
}else{
    $nums = [];
foreach ($youth as  $value) {
    $id = $this->get_course_moodle_id($value->courseid)['id'];
    $name = $this->get_course_moodle_id($value->courseid)['fullname'];
    $users = $this->get_users_in_course($id);
    $nums[$users] = $name;
}


}









               
                                $cert = array(
                                    'wstoken' => '1d5a9968a0f01f743ea73b5bf0fee117',
                                    'wsfunction' =>  'mod_certificate_get_issued_certificates',
                                    'certificateid'  => 5
                                       );

                                $res1 = $client->post(env('FRONT_API_URL'), [
                                    // 'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                                    'form_params' =>  $cert
                                    ]);
    
                                    // $res->getHeader('content-type');
                                   $response_1 = json_decode($res1->getBody(), true);
                                   $total_issued_cert = count((array)$response_1['issues']);

                        
                                   
          return view('admin.analytics.index' , ['cert'=> $total_issued_cert , 'total_courses'=> $total_courses , 'id'=>$id , 'users'=> $users  ,
           'ar'=>$ar  , 'vol'=>$vola , 'youth'=>$nums] );
    }

    public function create()
    {
        // abort_if(Gate::denies('analytic_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analytics.create');
    }

    public function store(StoreAnalyticRequest $request)
    {
        $analytic = Analytic::create($request->all());

        return redirect()->route('admin.analytics.index');
    }

    public function edit(Analytic $analytic)
    {
        abort_if(Gate::denies('analytic_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analytics.edit', compact('analytic'));
    }

    public function update(UpdateAnalyticRequest $request, Analytic $analytic)
    {
        $analytic->update($request->all());

        return redirect()->route('admin.analytics.index');
    }

    public function show(Analytic $analytic)
    {
        abort_if(Gate::denies('analytic_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.analytics.show', compact('analytic'));
    }

    public function destroy(Analytic $analytic)
    {
        abort_if(Gate::denies('analytic_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $analytic->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnalyticRequest $request)
    {
        Analytic::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
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
                                   $total_users_2 = count((array)$response_2);

                                   return $total_users_2;

    }


}
