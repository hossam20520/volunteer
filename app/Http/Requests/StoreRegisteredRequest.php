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
            'country' => [
                'string',
                'nullable',
            ],
            'branch_code' => [
                'string',
                'nullable',
            ],
            'joined_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'gender' => [
                'string',
                'nullable',
            ],
        ];
    }
}
