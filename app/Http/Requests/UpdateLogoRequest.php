<?php

namespace App\Http\Requests;

use App\Models\Logo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLogoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('logo_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'logo' => [
                'string',
                'nullable',
            ],
            'priority' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
