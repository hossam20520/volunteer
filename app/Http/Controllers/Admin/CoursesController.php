<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Gate;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::all();

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.courses.create');
    }

    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->all());

        return redirect()->route('admin.courses.index');
    }

    public function edit(Course $course)
    {
        abort_if(Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.courses.edit', compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());

        return redirect()->route('admin.courses.index');
    }

    public function show(Course $course)
    {
        abort_if(Gate::denies('course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');







        $courses  = Course::where('department' , 'V')->get();
        if($course->courseid == 5){
            $total_issued_cert = $this->get_certificates(5);
        }else{
            $total_issued_cert = 0;
          
        }
       
       
    
        // $ar = [];
        // $certa  = [];
        // $notCert  = [];
      
        $numberUsers = 0;
        $namecourse = "";
        foreach ($courses as  $value) {
            $id = $this->get_course_moodle_id($course->courseid)['id'];
            $name = $this->get_course_moodle_id($course->courseid)['fullname'];
            $users = $this->get_users_in_course($id);
            $numberUsers = $users;
            $namecourse = $name;
            // $ar[$users] = $name;

            
            // $certa[$total_issued_cert] = "الشهادة";

            // $notCert[($users - $total_issued_cert)] = "لم يستلم الشهادة";

        }





        // $result = array_merge($ar,  $certa , $notCert  );




        return view('admin.courses.show', ['course'=> $course , 'numberUsers'=> $numberUsers , 'namecourse'=>$namecourse , 'total_issued_cert'=>$total_issued_cert  ]);
    }

    public function destroy(Course $course)
    {
        abort_if(Gate::denies('course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->delete();

        return back();
    }

    public function massDestroy(MassDestroyCourseRequest $request)
    {
        Course::whereIn('id', request('ids'))->delete();

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



    public function get_certificates($id){
        $client = new client();
        $cert = array(
            'wstoken' => '1d5a9968a0f01f743ea73b5bf0fee117',
            'wsfunction' =>  'mod_certificate_get_issued_certificates',
            'certificateid'  => $id
               );

        $res1 = $client->post(env('FRONT_API_URL'), [
            // 'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
            'form_params' =>  $cert
            ]);

            // $res->getHeader('content-type');
           $response_1 = json_decode($res1->getBody(), true);
          $total_issued_cert = count((array)$response_1['issues']);

           return $total_issued_cert;

}


}
