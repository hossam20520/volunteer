<?php

namespace App\Http\Requests;

use App\Models\Registered;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRegisteredRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('registered_edit');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'required',
            ],
            'fname' => [
                'string',
                'nullable',
            ],
            'idnumber' => [
                'string',
                'nullable',
            ],
            'branch' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'age' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
