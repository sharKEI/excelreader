@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/clusterize.js/0.18.0/clusterize.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/clusterize.js/0.18.0/clusterize.js"></script>
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Manage Excel Revisions
                &nbsp
                <button data-toggle="modal" data-target="#newRevModal" class="btn btn-primary">Upload New Revision</button>
            </h3>

            {{-- Form validation error --}}
            @if ($errors->any())
            <div class="m-alert m-alert--outline m-alert--outline-2x alert alert-danger alert-dismissible fade show" role="alert">
                <p><b>Error!</b></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="o"><b>Object</b></label>
                    <input type="text" class="form-control" value="{{ $excel->object->name }}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="a"><b>Area</b></label>
                    <input type="text" class="form-control" value="{{ $excel->place->name }}" disabled>
                </div>
                <div class="col-md-4">
                    <label for="q">,<b>Quarter</b></label>
                    <input type="text" class="form-control" value="{{ "Q".$excel->quarter->quarter." ".$excel->quarter->year }}" disabled>
                </div>
            </div>

            <br>
            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="Updated At" data-field="UA">Updated At</th>
                        {{-- <th title="No" data-field="No">No</th> --}}
                        <th title="Revision Note" data-field="RN">Revision Note</th>
                        <th title="Attribute Completeness" data-field="AttComp">Att. Completeness</th>
                        <th title="Updated By" data-field="UB">Updated By</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($revisions)
                        @foreach ($revisions as $key => $revision)
                            <tr>
                                {{-- <td>{{ $key+1 }}</td> --}}
                                <td><b>{{ $revision->updated_at }}@if ($key==0) <span style="background-color:yellow;">(latest)</span> @endif</b></td>
                                <td>{{ $revision->notes }}</td>
                                <td>
                                    @if ($revision->attcomp >= 80)
                                    <span class="m-badge m-badge--success m-badge--wide text-white">
                                    @elseif ($revision->attcomp >= 50)
                                    <span class="m-badge m-badge--info m-badge--wide text-white">
                                    @elseif ($revision->attcomp >= 30)
                                    <span class="m-badge m-badge--warning m-badge--wide text-white">
                                    @else
                                    <span class="m-badge m-badge--danger m-badge--wide text-white">
                                    @endif
                                    {{ $revision->attcomp }}
                                    </span>
                                </td>
                                <td>{{ 'updated_by' }}</td>
                                <td>
                                    <div class="form-inline">
                                        <a href="{{ route('revision.show', ['id' => $revision->id]) }}" title="View Excel" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-eye"></i></a>
                                        {{-- <a onclick="apiExcel({{ $revision->id }})" title="View Excel" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-eye"></i></a> --}}
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
<div class="modal fade" id="newRevModal" tabindex="-1" role="dialog" aria-labelledby="newRevModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Revision</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['revision.store'], 'class' => 'm-form', 'enctype' => 'multipart/form-data')) }}
            <div class="modal-body">
                    <input type="hidden" name="excel_id" value="{{ $excel->id }}">
                    <div class="form-group m-form__group">
                        <label for="object">Revision Notes</label>
                        <input type="text" name="notes" class="form-control m-input m-input--square">
                    </div>

                    
                    <div class="form-group m-form__group">
                        <label for="quarter">Upload File</label>
                        <input type="file" name="xlfile" class="form-control m-input m-input--square">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Add Revision</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>
      
<!-- end:: Content -->
@endsection
