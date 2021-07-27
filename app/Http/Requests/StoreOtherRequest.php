<?php

namespace App\Http\Requests;

use App\Models\Other;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOtherRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('other_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'string',
                'nullable',
            ],
            'firstname' => [
                'string',
                'nullable',
            ],
            'lastname' => [
                'string',
                'nullable',
            ],
            'username' => [
                'string',
                'required',
                'unique:others',
            ],
            'company' => [
                'string',
                'nullable',
            ],
            'job' => [
                'string',
                'nullable',
            ],
            'eq' => [
                'string',
                'required',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'password' => [
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
            'idpassport' => [
                'string',
                'nullable',
            ],
            'fullname' => [
                'string',
                'nullable',
            ],
            'gender' => [
                'string',
                'nullable',
            ],
            'nationality' => [
                'string',
                'nullable',
            ],
        ];
    }
}
