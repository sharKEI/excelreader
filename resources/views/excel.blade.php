@extends('layouts.app')

@section('content')
<!-- start:: Content -->

<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Manage excels
                &nbsp
                <button onclick="window.location.href = '{{ route('excel.create') }}'" class="btn btn-primary">Add New Excel</button>
            </h3>

            <br>

            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="No" data-field="No">No</th>
                        <th title="Object" data-field="Object">Object</th>
                        <th title="Attribute Completeness" data-field="AttComp">Att. Completeness</th>
                        <th title="area" data-field="area">Area</th>
                        <th title="quarter" data-field="quarter">Quarter</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($excels)
                        @foreach ($excels as $key => $excel)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $excel->object->name }}</td>
                                <td>
                                    @if ($excel->attcomp >= 80)
                                    <span class="m-badge m-badge--success m-badge--wide text-white">
                                    @elseif ($excel->attcomp >= 50)
                                    <span class="m-badge m-badge--info m-badge--wide text-white">
                                    @elseif ($excel->attcomp >= 30)
                                    <span class="m-badge m-badge--warning m-badge--wide text-white">
                                    @else
                                    <span class="m-badge m-badge--danger m-badge--wide text-white">
                                    @endif
                                    {{ $excel->attcomp }}
                                    </span>
                                </td>
                                <td>{{ $excel->place->name }}</td>
                                <?php $quarter = $excel->quarter->quarter; $year = $excel->quarter->year ?>
                                <td>{{ "Q$quarter $year" }}</td>
                                <td>
                                    <div class="form-inline">
                                        <a onclick="excelModal({{$excel->id}}, '{{$excel->filename}}')" data-toggle="modal" data-target="#excelModal" title="View" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-eye"></i></a>
                                        &nbsp
                                        {{ Form::open(['onsubmit' => 'editModal(this, "'.$excel['name'].'")', 'method' => 'PUT', 'route' => ['excel.update', $excel->id]]) }}
                                            <input type="hidden" name="name" value="">
                                            <button title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-edit-1"></i></button>
                                        {{ Form::close() }}
                                        &nbsp
                                        {{ Form::open(['onsubmit' => 'delert(this)', 'method' => 'DELETE', 'route' => ['excel.destroy', $excel->id]]) }}
                                            <button type="submit" title="Delete" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-delete"></i></button>
                                        {{ Form::close() }}
                                    </div>  
                                </td>
                            </tr>
                        @endforeach

                    @endif
                </tbody>
            </table>
            <!--end: Datatable -->

        </div>

    </div>
</div>

<!-- Modal -->
<div id="excelModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            {{-- <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> --}}
        <iframe id="excelIFrame" src = "" width='auto' height='100%' allowfullscreen webkitallowfullscreen></iframe>
    </div>
      

</div>

<!-- end:: Content -->
@endsection
