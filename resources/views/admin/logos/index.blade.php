@extends('layouts.admin')
@section('content')
@can('logo_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.logos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.logo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.logo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Logo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.logo.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.logo.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.logo.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.logo.fields.priority') }}
                        </th>
                        <th>
                            {{ trans('cruds.logo.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logos as $key => $logo)
                        <tr data-entry-id="{{ $logo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $logo->id ?? '' }}
                            </td>
                            <td>
                                {{ $logo->name ?? '' }}
                            </td>
                            <td>
                                {{ $logo->logo ?? '' }}
                            </td>
                            <td>
                                {{ $logo->priority ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Logo::STATUS_SELECT[$logo->status] ?? '' }}
                            </td>
                            <td>
                                @can('logo_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.logos.show', $logo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('logo_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.logos.edit', $logo->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('logo_delete')
                                    <form action="{{ route('admin.logos.destroy', $logo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('logo_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.logos.massDestroy') }}",
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
  let table = $('.datatable-Logo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection