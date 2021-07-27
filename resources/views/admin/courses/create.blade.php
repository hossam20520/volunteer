@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="course">{{ trans('cruds.course.fields.course') }}</label>
                <input class="form-control {{ $errors->has('course') ? 'is-invalid' : '' }}" type="text" name="course" id="course" value="{{ old('course', '') }}" required>
                @if($errors->has('course'))
                    <span class="text-danger">{{ $errors->first('course') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="courseid">{{ trans('cruds.course.fields.courseid') }}</label>
                <input class="form-control {{ $errors->has('courseid') ? 'is-invalid' : '' }}" type="number" name="courseid" id="courseid" value="{{ old('courseid', '') }}" step="1" required>
                @if($errors->has('courseid'))
                    <span class="text-danger">{{ $errors->first('courseid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.courseid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="number_of_trainees">{{ trans('cruds.course.fields.number_of_trainees') }}</label>
                <input class="form-control {{ $errors->has('number_of_trainees') ? 'is-invalid' : '' }}" type="number" name="number_of_trainees" id="number_of_trainees" value="{{ old('number_of_trainees', '') }}" step="1">
                @if($errors->has('number_of_trainees'))
                    <span class="text-danger">{{ $errors->first('number_of_trainees') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.number_of_trainees_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.course.fields.department') }}</label>
                <select class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department" id="department">
                    <option value disabled {{ old('department', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Course::DEPARTMENT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('department', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.department_helper') }}</span>
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