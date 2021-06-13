@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.other.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.others.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.id') }}
                        </th>
                        <td>
                            {{ $other->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.email') }}
                        </th>
                        <td>
                            {{ $other->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.firstname') }}
                        </th>
                        <td>
                            {{ $other->firstname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.lastname') }}
                        </th>
                        <td>
                            {{ $other->lastname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.username') }}
                        </th>
                        <td>
                            {{ $other->username }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.company') }}
                        </th>
                        <td>
                            {{ $other->company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.job') }}
                        </th>
                        <td>
                            {{ $other->job }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.eq') }}
                        </th>
                        <td>
                            {{ $other->eq }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.country') }}
                        </th>
                        <td>
                            {{ $other->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.city') }}
                        </th>
                        <td>
                            {{ $other->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.other.fields.password') }}
                        </th>
                        <td>
                            {{ $other->password }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.others.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection