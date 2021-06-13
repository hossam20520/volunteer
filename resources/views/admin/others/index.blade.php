@extends('layouts.admin')
@section('content')
@can('other_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.others.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.other.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Other', 'route' => 'admin.others.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.other.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Other">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.other.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.firstname') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.lastname') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.username') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.company') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.job') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.eq') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.other.fields.password') }}
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
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($others as $key => $other)
                        <tr data-entry-id="{{ $other->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $other->id ?? '' }}
                            </td>
                            <td>
                                {{ $other->email ?? '' }}
                            </td>
                            <td>
                                {{ $other->firstname ?? '' }}
                            </td>
                            <td>
                                {{ $other->lastname ?? '' }}
                            </td>
                            <td>
                                {{ $other->username ?? '' }}
                            </td>
                            <td>
                                {{ $other->company ?? '' }}
                            </td>
                            <td>
                                {{ $other->job ?? '' }}
                            </td>
                            <td>
                                {{ $other->eq ?? '' }}
                            </td>
                            <td>
                                {{ $other->country ?? '' }}
                            </td>
                            <td>
                                {{ $other->city ?? '' }}
                            </td>
                            <td>
                                {{ $other->password ?? '' }}
                            </td>
                            <td>
                                @can('other_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.others.show', $other->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('other_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.others.edit', $other->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('other_delete')
                                    <form action="{{ route('admin.others.destroy', $other->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('other_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.others.massDestroy') }}",
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
  let table = $('.datatable-Other:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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