<?php

namespace App\Http\Requests;

use App\Models\Pixel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPixelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pixel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pixels,id',
        ];
    }
}
