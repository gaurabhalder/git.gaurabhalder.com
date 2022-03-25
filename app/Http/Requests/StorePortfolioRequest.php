<?php

namespace App\Http\Requests;

use App\Models\Portfolio;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePortfolioRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('portfolio_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'type' => [
                'string',
                'required',
            ],
            'link' => [
                'string',
                'nullable',
            ],
            'priority' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
