<?php

namespace App\Http\Requests;

use App\Models\Pixel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePixelRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pixel_edit');
    }

    public function rules()
    {
        return [
            'pixel_tag' => [
                'string',
                'nullable',
            ],
            'google_analytic' => [
                'string',
                'nullable',
            ],
            'script' => [
                'string',
                'nullable',
            ],
        ];
    }
}
