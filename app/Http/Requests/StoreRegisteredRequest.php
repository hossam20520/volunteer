<?php

namespace App\Http\Requests;

use App\Models\Registered;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRegisteredRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('registered_create');
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
        ];
    }
}
