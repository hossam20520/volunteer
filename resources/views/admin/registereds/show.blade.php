@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.registered.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registereds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.registered.fields.id') }}
                        </th>
                        <td>
                            {{ $registered->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registered.fields.code') }}
                        </th>
                        <td>
                            {{ $registered->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registered.fields.fname') }}
                        </th>
                        <td>
                            {{ $registered->fname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registered.fields.idnumber') }}
                        </th>
                        <td>
                            {{ $registered->idnumber }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registered.fields.branch') }}
                        </th>
                        <td>
                            {{ $registered->branch }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registereds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection