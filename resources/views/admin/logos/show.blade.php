@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.logo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.logos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.logo.fields.id') }}
                        </th>
                        <td>
                            {{ $logo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logo.fields.name') }}
                        </th>
                        <td>
                            {{ $logo->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logo.fields.logo') }}
                        </th>
                        <td>
                            {{ $logo->logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logo.fields.priority') }}
                        </th>
                        <td>
                            {{ $logo->priority }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.logo.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Logo::STATUS_SELECT[$logo->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.logos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection