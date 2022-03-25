@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pixel.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pixels.update", [$pixel->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="pixel_tag">{{ trans('cruds.pixel.fields.pixel_tag') }}</label>
                <input class="form-control {{ $errors->has('pixel_tag') ? 'is-invalid' : '' }}" type="text" name="pixel_tag" id="pixel_tag" value="{{ old('pixel_tag', $pixel->pixel_tag) }}">
                @if($errors->has('pixel_tag'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pixel_tag') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pixel.fields.pixel_tag_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="google_analytic">{{ trans('cruds.pixel.fields.google_analytic') }}</label>
                <input class="form-control {{ $errors->has('google_analytic') ? 'is-invalid' : '' }}" type="text" name="google_analytic" id="google_analytic" value="{{ old('google_analytic', $pixel->google_analytic) }}">
                @if($errors->has('google_analytic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('google_analytic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pixel.fields.google_analytic_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="script">{{ trans('cruds.pixel.fields.script') }}</label>
                <input class="form-control {{ $errors->has('script') ? 'is-invalid' : '' }}" type="text" name="script" id="script" value="{{ old('script', $pixel->script) }}">
                @if($errors->has('script'))
                    <div class="invalid-feedback">
                        {{ $errors->first('script') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pixel.fields.script_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection