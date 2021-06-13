@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.other.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.others.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">{{ trans('cruds.other.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="firstname">{{ trans('cruds.other.fields.firstname') }}</label>
                <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', '') }}">
                @if($errors->has('firstname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('firstname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.firstname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lastname">{{ trans('cruds.other.fields.lastname') }}</label>
                <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', '') }}">
                @if($errors->has('lastname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lastname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.lastname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="username">{{ trans('cruds.other.fields.username') }}</label>
                <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username" id="username" value="{{ old('username', '') }}" required>
                @if($errors->has('username'))
                    <div class="invalid-feedback">
                        {{ $errors->first('username') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.username_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company">{{ trans('cruds.other.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', '') }}">
                @if($errors->has('company'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job">{{ trans('cruds.other.fields.job') }}</label>
                <input class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" type="text" name="job" id="job" value="{{ old('job', '') }}">
                @if($errors->has('job'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="eq">{{ trans('cruds.other.fields.eq') }}</label>
                <input class="form-control {{ $errors->has('eq') ? 'is-invalid' : '' }}" type="text" name="eq" id="eq" value="{{ old('eq', '') }}" required>
                @if($errors->has('eq'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eq') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.eq_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.other.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.other.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.other.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.other.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="age">{{ trans('cruds.other.fields.age') }}</label>
                <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="number" name="age" id="age" value="{{ old('age', '') }}" step="1">
                @if($errors->has('age'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.age_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('accept_terms') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="accept_terms" value="0">
                    <input class="form-check-input" type="checkbox" name="accept_terms" id="accept_terms" value="1" {{ old('accept_terms', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="accept_terms">{{ trans('cruds.other.fields.accept_terms') }}</label>
                </div>
                @if($errors->has('accept_terms'))
                    <div class="invalid-feedback">
                        {{ $errors->first('accept_terms') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.other.fields.accept_terms_helper') }}</span>
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