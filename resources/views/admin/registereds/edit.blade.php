@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.registered.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.registereds.update", [$registered->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.registered.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $registered->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fname">{{ trans('cruds.registered.fields.fname') }}</label>
                <input class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname" id="fname" value="{{ old('fname', $registered->fname) }}">
                @if($errors->has('fname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.fname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="idnumber">{{ trans('cruds.registered.fields.idnumber') }}</label>
                <input class="form-control {{ $errors->has('idnumber') ? 'is-invalid' : '' }}" type="text" name="idnumber" id="idnumber" value="{{ old('idnumber', $registered->idnumber) }}">
                @if($errors->has('idnumber'))
                    <div class="invalid-feedback">
                        {{ $errors->first('idnumber') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.idnumber_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch">{{ trans('cruds.registered.fields.branch') }}</label>
                <input class="form-control {{ $errors->has('branch') ? 'is-invalid' : '' }}" type="text" name="branch" id="branch" value="{{ old('branch', $registered->branch) }}">
                @if($errors->has('branch'))
                    <div class="invalid-feedback">
                        {{ $errors->first('branch') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.branch_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.registered.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $registered->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="age">{{ trans('cruds.registered.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', $registered->age) }}" step="1">
                @if($errors->has('age'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.age_helper') }}</span>
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