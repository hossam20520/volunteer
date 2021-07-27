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
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fname">{{ trans('cruds.registered.fields.fname') }}</label>
                <input class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname" id="fname" value="{{ old('fname', $registered->fname) }}">
                @if($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.fname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="idnumber">{{ trans('cruds.registered.fields.idnumber') }}</label>
                <input class="form-control {{ $errors->has('idnumber') ? 'is-invalid' : '' }}" type="text" name="idnumber" id="idnumber" value="{{ old('idnumber', $registered->idnumber) }}">
                @if($errors->has('idnumber'))
                    <span class="text-danger">{{ $errors->first('idnumber') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.idnumber_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch">{{ trans('cruds.registered.fields.branch') }}</label>
                <input class="form-control {{ $errors->has('branch') ? 'is-invalid' : '' }}" type="text" name="branch" id="branch" value="{{ old('branch', $registered->branch) }}">
                @if($errors->has('branch'))
                    <span class="text-danger">{{ $errors->first('branch') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.branch_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.registered.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $registered->phone) }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="age">{{ trans('cruds.registered.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', $registered->age) }}" step="1">
                @if($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.registered.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $registered->country) }}">
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_code">{{ trans('cruds.registered.fields.branch_code') }}</label>
                <input class="form-control {{ $errors->has('branch_code') ? 'is-invalid' : '' }}" type="text" name="branch_code" id="branch_code" value="{{ old('branch_code', $registered->branch_code) }}">
                @if($errors->has('branch_code'))
                    <span class="text-danger">{{ $errors->first('branch_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.branch_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="joined_date">{{ trans('cruds.registered.fields.joined_date') }}</label>
                <input class="form-control date {{ $errors->has('joined_date') ? 'is-invalid' : '' }}" type="text" name="joined_date" id="joined_date" value="{{ old('joined_date', $registered->joined_date) }}">
                @if($errors->has('joined_date'))
                    <span class="text-danger">{{ $errors->first('joined_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.joined_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.registered.fields.have_account') }}</label>
                <select class="form-control {{ $errors->has('have_account') ? 'is-invalid' : '' }}" name="have_account" id="have_account">
                    <option value disabled {{ old('have_account', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Registered::HAVE_ACCOUNT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('have_account', $registered->have_account) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('have_account'))
                    <span class="text-danger">{{ $errors->first('have_account') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.have_account_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender">{{ trans('cruds.registered.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', $registered->gender) }}">
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.registered.fields.gender_helper') }}</span>
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