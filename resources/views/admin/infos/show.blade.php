@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.info.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.id') }}
                        </th>
                        <td>
                            {{ $info->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.header') }}
                        </th>
                        <td>
                            {{ $info->header }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.title') }}
                        </th>
                        <td>
                            {{ $info->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.phone') }}
                        </th>
                        <td>
                            {{ $info->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.footer') }}
                        </th>
                        <td>
                            {{ $info->footer }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection