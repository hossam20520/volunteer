@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.other.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.others.update", [$other->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="email">{{ trans('cruds.other.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $other->email) }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="firstname">{{ trans('cruds.other.fields.firstname') }}</label>
                <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', $other->firstname) }}">
                @if($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.firstname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lastname">{{ trans('cruds.other.fields.lastname') }}</label>
                <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', $other->lastname) }}">
                @if($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.lastname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="username">{{ trans('cruds.other.fields.username') }}</label>
                <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username" id="username" value="{{ old('username', $other->username) }}" required>
                @if($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.username_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company">{{ trans('cruds.other.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', $other->company) }}">
                @if($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job">{{ trans('cruds.other.fields.job') }}</label>
                <input class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" type="text" name="job" id="job" value="{{ old('job', $other->job) }}">
                @if($errors->has('job'))
                    <span class="text-danger">{{ $errors->first('job') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eq">{{ trans('cruds.other.fields.eq') }}</label>
                <input class="form-control {{ $errors->has('eq') ? 'is-invalid' : '' }}" type="text" name="eq" id="eq" value="{{ old('eq', $other->eq) }}" required>
                @if($errors->has('eq'))
                    <span class="text-danger">{{ $errors->first('eq') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.eq_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.other.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $other->country) }}">
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.other.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', $other->city) }}">
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.other.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', $other->password) }}">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.other.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $other->phone) }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="age">{{ trans('cruds.other.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', $other->age) }}" step="1">
                @if($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('accept_terms') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="accept_terms" value="0">
                    <input class="form-check-input" type="checkbox" name="accept_terms" id="accept_terms" value="1" {{ $other->accept_terms || old('accept_terms', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="accept_terms">{{ trans('cruds.other.fields.accept_terms') }}</label>
                </div>
                @if($errors->has('accept_terms'))
                    <span class="text-danger">{{ $errors->first('accept_terms') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.accept_terms_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="idpassport">{{ trans('cruds.other.fields.idpassport') }}</label>
                <input class="form-control {{ $errors->has('idpassport') ? 'is-invalid' : '' }}" type="text" name="idpassport" id="idpassport" value="{{ old('idpassport', $other->idpassport) }}">
                @if($errors->has('idpassport'))
                    <span class="text-danger">{{ $errors->first('idpassport') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.idpassport_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fullname">{{ trans('cruds.other.fields.fullname') }}</label>
                <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', $other->fullname) }}">
                @if($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.fullname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gender">{{ trans('cruds.other.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', $other->gender) }}">
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality">{{ trans('cruds.other.fields.nationality') }}</label>
                <input class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}" type="text" name="nationality" id="nationality" value="{{ old('nationality', $other->nationality) }}">
                @if($errors->has('nationality'))
                    <span class="text-danger">{{ $errors->first('nationality') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.nationality_helper') }}</span>
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