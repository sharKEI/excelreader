@extends('layouts.app')

@section('content')
<!-- start:: Content -->
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
                        <th title="Attribute Completeness" data-field="AttComp">Attribute Completeness</th>
                        <th title="Attribute Completeness" data-field="AttComp">Attribute Accuracy</th>
                        <th title="Attribute Completeness" data-field="AttComp">Spatial Accuracy</th>
                        <th title="Updated By" data-field="UB">Updated By</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($revisions)
                        @foreach ($revisions as $key => $revision)
                            <tr>
                                <td><b>{{ $revision->updated_at }}@if ($key==0) <div style="background-color:yellow;">(latest)</div> @endif</b></td>
                                <td>{{ $revision->notes }}</td>
                                <td>
                                    @if($revision->attcomp >= 90)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($revision->attcomp >= 50)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@elseif($revision->attcomp === NULL)
									<span title="Click to edit" class="m-badge m-badge--metal m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									@if($revision->attcomp === NULL)
									Value Not Set
									@else
									{{  round($revision->attcomp, 2, PHP_ROUND_HALF_UP) }}%
									@endif
									</span>
                                </td>
                                <td>
									@if($revision->attacc >= 90)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($revision->attacc >= 50)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@elseif($revision->attacc === NULL)
									<span title="Click to edit" class="m-badge m-badge--metal m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									@if($revision->attacc === NULL)
									Value Not Set
									@else
									{{  round($revision->attacc, 2, PHP_ROUND_HALF_UP) }}%
									@endif
									</span>
                                </td>
                                <td>
									@if($revision->spatacc >= 90)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($revision->spatacc >= 50)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@elseif($revision->spatacc === NULL)
									<span title="Click to edit" class="m-badge m-badge--metal m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									@if($revision->spatacc === NULL)
									Value Not Set
									@else
									{{  round($revision->spatacc, 2, PHP_ROUND_HALF_UP) }}%
									@endif
									</span>
                                </td>
                                <td>{{ $revision->updated_by->name }}</td>
                                <td>
                                    <div class="form-inline">
                                        @if($revision->filename !== null)
                                            <a href="{{ route('revision.show', ['id' => $revision->id]) }}" title="Download revision" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-download"></i></a>
                                        @else
                                            <button href="{{ route('revision.show', ['id' => $revision->id]) }}" title="Revision has no downloadable file" class="m-portlet__nav-link btn m-btn m-btn--icon m-btn--icon-only m-btn--pill" disabled><i class="flaticon-download"></i></button>
                                        @endif
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
