@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pixel.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pixels.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pixel.fields.id') }}
                        </th>
                        <td>
                            {{ $pixel->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pixel.fields.pixel_tag') }}
                        </th>
                        <td>
                            {{ $pixel->pixel_tag }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pixel.fields.google_analytic') }}
                        </th>
                        <td>
                            {{ $pixel->google_analytic }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pixel.fields.script') }}
                        </th>
                        <td>
                            {{ $pixel->script }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pixels.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection