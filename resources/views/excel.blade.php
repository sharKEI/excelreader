@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Manage excels
                &nbsp
                <button data-toggle="modal" data-target="#newExcelModal" class="btn btn-primary">Add New Excel</button>
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

            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="No" data-field="No">No</th>
                        <th title="Object" data-field="Object">Object</th>
                        <th title="Attribute Completeness - null record check" data-field="AttAcc">Attribute Completeness</th>
						<th title="Attribute Accuracy - FL or label Check" data-field="AttCom">Attribute Accuracy</th>
						<th title="Spatial Accuracy - less than 5 m" data-field="SpaAcc">Spatial Accuracy</th>
                        <th title="area" data-field="area">Area</th>
                        <th title="quarter" data-field="quarter">Quarter</th>
                        <th>Last Updated By</th>
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
                                @if(!empty($excel->revisions->last()))
                                    @if($excel->revisions->last()->attcomp >= 95)
                                    <span class="m-badge m-badge--success m-badge--wide text-white edit-att">
                                    @elseif($excel->revisions->last()->attcomp >= 51)
                                    <span class="m-badge m-badge--warning m-badge--wide text-white edit-att">
                                    @else
                                    <span class="m-badge m-badge--danger m-badge--wide text-white edit-att">
                                    @endif
                                    {{  round($excel->revisions->last()->attcomp, 2, PHP_ROUND_HALF_UP) }}%</span>
                                @else
                                    <span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
                                @endif
                                <span>
									{{ Form::open([ 'method' => 'PUT', 'route' => ['revision.update', $excel->revisions->last()['id']]]) }}
											<input class="percentage" type="hidden" name="attcomp" value="">
									{{ Form::close() }}
								</span>
                                </td>

                                <td>
                                    @if(!empty($excel->revisions->last()))
                                        @if($excel->revisions->last()->attacc >= 95)
                                        <span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white edit-att">
                                        @elseif($excel->revisions->last()->attacc >= 51)
                                        <span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white edit-att">
                                        @else
                                        <span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white edit-att">
                                        @endif
                                        {{  round($excel->revisions->last()->attacc, 2, PHP_ROUND_HALF_UP) }}%</span>
                                    @else
                                        <span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
                                    @endif
                                    <span>
									{{ Form::open([ 'method' => 'PUT', 'route' => ['revision.update', $excel->revisions->last()['id']]]) }}
											<input class="percentage" type="hidden" name="attacc" value="">
									{{ Form::close() }}
								    </span>
                                </td>
                                <td>
                                    @if(!empty($excel->revisions->last()))
                                        @if($excel->revisions->last()->spatacc >= 95)
                                        <span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white edit-att">
                                        @elseif($excel->revisions->last()->spatacc >= 51)
                                        <span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white edit-att">
                                        @else
                                        <span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white edit-att">
                                        @endif
                                        {{  round($excel->revisions->last()->spatacc, 2, PHP_ROUND_HALF_UP) }}%</span>
                                    @else
                                        <span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
                                    @endif
                                    <span>
									{{ Form::open([ 'method' => 'PUT', 'route' => ['revision.update', $excel->revisions->last()['id']]]) }}
											<input class="percentage" type="hidden" name="spatacc" value="">
									{{ Form::close() }}
								    </span>
                                </td>
                                <td>{{ $excel->place->name }}</td>
                                <?php $quarter = $excel->quarter->quarter; $year = $excel->quarter->year ?>
                                <td><div style="display:none;width:0px;height:0px;">{{ $year.$quarter }}</div>{{ "Q$quarter $year" }}</td>
                                <td>{{ $excel->revisions->last() ? $excel->revisions->last()->updated_by->name :'none' }}</td>
                                <td>
                                    <div class="form-inline">
                                        <a onclick="addRev({{ $excel->id }})" data-toggle="modal" data-target="#newRevModal" title="Add New Revision" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-add"></i></a>
                                        &nbsp;
                                        @if($excel->revisions->last())<a href="{{ route('revision.show', ['id' => $excel->revisions->last()->id]) }}" title="Download the latest revisions" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-download"></i></a>@endif
                                        &nbsp;
                                        <a href="{{ route('excel.show', ['id' => $excel->id]) }}" title="Check Old Revisions" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-refresh"></i></a>
                                    </div>
                                    <div class="form-inline">
                                        @if($excel->revisions->last())<a href="{{ route('revision.show', ['id' => $excel->revisions->last()->id]) }}" title="Calculate Attribute" class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-interface-1"></i></a>@endif
                                        &nbsp;
                                        <button onclick="editExcel({{ $excel->object_id.','.$excel->place_id.','.$excel->quarter_id.','.$excel->id }})" data-toggle="modal" data-target="#editExcelModal" title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-edit-1"></i></button>
                                        &nbsp;
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

<!-- Modal Add -->
<div class="modal fade" id="newExcelModal" tabindex="-1" role="dialog" aria-labelledby="newExcelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['excel.store'], 'class' => 'm-form')) }}
            <div class="modal-body">

                    <div class="form-group m-form__group">
                        <label for="object">Object</label>
                        <select name="object" class="form-control m-input m-input--square" required>
                                <option disabled selected>Choose an object...</option>
                            @foreach ($objects as $object)
                                <option value="{{ $object['id'] }}">{{ $object['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group m-form__group">
                        <label for="place">Area</label>
                        <select name="place" class="form-control m-input m-input--square" required>
                                <option disabled selected>Choose an area...</option>
                            @foreach ($places as $place)
                                <option value="{{ $place['id'] }}">{{ $place['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group m-form__group">
                        <label for="quarter">Quarter</label>
                        <select name="quarter" class="form-control m-input m-input--square" required>
                                <option disabled selected>Choose a quarter...</option>
                            @foreach ($quarters->sortBy('quarter')->sortBy('year') as $quarter)
                                <option value="{{ $quarter['id'] }}">Q{{ $quarter['quarter'] }} {{ $quarter['year'] }}</option>
                            @endforeach
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Add Excel</button>
            </div>

            {{ Form::close() }}
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
            <input id="excelId" type="hidden" name="excel_id" value="">
            <div class="modal-body">
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


<!-- Modal Edit -->
<div class="modal fade" id="editExcelModal" tabindex="-1" role="dialog" aria-labelledby="editExcelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit New Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['excel.update', 0], 'method' => 'PUT', 'class' => 'm-form')) }}
            <div class="modal-body">
                <input id="xlid" type="hidden" name="excel_id" value="">
                <div class="form-group m-form__group">
                    <label for="object">Object</label>
                    <select name="object" class="form-control m-input m-input--square">
                            <option disabled selected>Choose an object...</option>
                        @foreach ($objects as $object)
                            <option id="obj{{ $object['id'] }}" value="{{ $object['id'] }}">{{ $object['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-form__group">
                    <label for="place">Area</label>
                    <select name="place" class="form-control m-input m-input--square">
                            <option disabled selected>Choose an area...</option>
                        @foreach ($places as $place)
                            <option id="plc{{ $place['id'] }}" value="{{ $place['id'] }}">{{ $place['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-form__group">
                    <label for="quarter">Quarter</label>
                    <select name="quarter" class="form-control m-input m-input--square">
                            <option disabled selected>Choose a quarter...</option>
                        @foreach ($quarters->sortBy('quarter')->sortBy('year') as $quarter)
                            <option id="qrt{{ $quarter['id'] }}" value="{{ $quarter['id'] }}">Q{{ $quarter['quarter'] }} {{ $quarter['year'] }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Edit Excel Info</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
