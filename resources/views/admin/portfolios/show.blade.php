@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.portfolio.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.portfolios.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.id') }}
                        </th>
                        <td>
                            {{ $portfolio->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.name') }}
                        </th>
                        <td>
                            {{ $portfolio->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.type') }}
                        </th>
                        <td>
                            {{ $portfolio->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.link') }}
                        </th>
                        <td>
                            {{ $portfolio->link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.image') }}
                        </th>
                        <td>
                            @if($portfolio->image)
                                <a href="{{ $portfolio->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $portfolio->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.priority') }}
                        </th>
                        <td>
                            {{ $portfolio->priority }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Portfolio::STATUS_SELECT[$portfolio->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.portfolios.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection