@extends('layouts.admin')
@section('content')
@can('pixel_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.pixels.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pixel.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pixel.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Pixel">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pixel.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.pixel.fields.pixel_tag') }}
                        </th>
                        <th>
                            {{ trans('cruds.pixel.fields.google_analytic') }}
                        </th>
                        <th>
                            {{ trans('cruds.pixel.fields.script') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pixels as $key => $pixel)
                        <tr data-entry-id="{{ $pixel->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pixel->id ?? '' }}
                            </td>
                            <td>
                                {{ $pixel->pixel_tag ?? '' }}
                            </td>
                            <td>
                                {{ $pixel->google_analytic ?? '' }}
                            </td>
                            <td>
                                {{ $pixel->script ?? '' }}
                            </td>
                            <td>
                                @can('pixel_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.pixels.show', $pixel->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('pixel_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.pixels.edit', $pixel->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('pixel_delete')
                                    <form action="{{ route('admin.pixels.destroy', $pixel->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('pixel_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pixels.massDestroy') }}",
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
  let table = $('.datatable-Pixel:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection