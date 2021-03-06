@extends('layouts.admin')
@section('content')
@can('registered_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.registereds.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.registered.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Registered', 'route' => 'admin.registereds.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.registered.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Registered">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.fname') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.idnumber') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.branch') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.age') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.branch_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.joined_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.have_account') }}
                        </th>
                        <th>
                            {{ trans('cruds.registered.fields.gender') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Registered::HAVE_ACCOUNT_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registereds as $key => $registered)
                        <tr data-entry-id="{{ $registered->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registered->id ?? '' }}
                            </td>
                            <td>
                                {{ $registered->code ?? '' }}
                            </td>
                            <td>
                                {{ $registered->fname ?? '' }}
                            </td>
                            <td>
                                {{ $registered->idnumber ?? '' }}
                            </td>
                            <td>
                                {{ $registered->branch ?? '' }}
                            </td>
                            <td>
                                {{ $registered->phone ?? '' }}
                            </td>
                            <td>
                                {{ $registered->age ?? '' }}
                            </td>
                            <td>
                                {{ $registered->country ?? '' }}
                            </td>
                            <td>
                                {{ $registered->branch_code ?? '' }}
                            </td>
                            <td>
                                {{ $registered->joined_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Registered::HAVE_ACCOUNT_SELECT[$registered->have_account] ?? '' }}
                            </td>
                            <td>
                                {{ $registered->gender ?? '' }}
                            </td>
                            <td>
                                @can('registered_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.registereds.show', $registered->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('registered_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.registereds.edit', $registered->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('registered_delete')
                                    <form action="{{ route('admin.registereds.destroy', $registered->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('registered_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registereds.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Registered:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection