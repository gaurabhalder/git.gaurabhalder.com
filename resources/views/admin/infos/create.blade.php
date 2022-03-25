@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.info.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.infos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="header">{{ trans('cruds.info.fields.header') }}</label>
                <input class="form-control {{ $errors->has('header') ? 'is-invalid' : '' }}" type="text" name="header" id="header" value="{{ old('header', 'techjodo') }}" required>
                @if($errors->has('header'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.header_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.info.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', 'techjodo title') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.info.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer">{{ trans('cruds.info.fields.footer') }}</label>
                <input class="form-control {{ $errors->has('footer') ? 'is-invalid' : '' }}" type="text" name="footer" id="footer" value="{{ old('footer', '') }}">
                @if($errors->has('footer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('footer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.footer_helper') }}</span>
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