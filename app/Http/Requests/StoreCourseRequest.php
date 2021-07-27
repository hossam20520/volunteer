<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_create');
    }

    public function rules()
    {
        return [
            'course' => [
                'string',
                'required',
            ],
            'courseid' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:courses,courseid',
            ],
            'number_of_trainees' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
