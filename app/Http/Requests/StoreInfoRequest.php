<?php

namespace App\Http\Requests;

use App\Models\Info;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('info_create');
    }

    public function rules()
    {
        return [
            'header' => [
                'string',
                'required',
            ],
            'title' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'footer' => [
                'string',
                'nullable',
            ],
        ];
    }
}
