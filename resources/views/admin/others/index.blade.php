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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Other">
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
                        {{ trans('cruds.other.fields.phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.other.fields.age') }}
                    </th>
                    <th>
                        {{ trans('cruds.other.fields.accept_terms') }}
                    </th>
                    <th>
                        {{ trans('cruds.other.fields.idpassport') }}
                    </th>
                    <th>
                        {{ trans('cruds.other.fields.fullname') }}
                    </th>
                    <th>
                        {{ trans('cruds.other.fields.gender') }}
                    </th>
                    <th>
                        {{ trans('cruds.other.fields.nationality') }}
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
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
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
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('other_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.others.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.others.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'email', name: 'email' },
{ data: 'firstname', name: 'firstname' },
{ data: 'lastname', name: 'lastname' },
{ data: 'username', name: 'username' },
{ data: 'company', name: 'company' },
{ data: 'job', name: 'job' },
{ data: 'eq', name: 'eq' },
{ data: 'country', name: 'country' },
{ data: 'city', name: 'city' },
{ data: 'password', name: 'password' },
{ data: 'phone', name: 'phone' },
{ data: 'age', name: 'age' },
{ data: 'accept_terms', name: 'accept_terms' },
{ data: 'idpassport', name: 'idpassport' },
{ data: 'fullname', name: 'fullname' },
{ data: 'gender', name: 'gender' },
{ data: 'nationality', name: 'nationality' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Other').DataTable(dtOverrideGlobals);
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
});

</script>
@endsection