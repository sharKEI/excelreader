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
                        <th>Last Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($excels)
                        @foreach ($excels as $excel)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $excel->object->name }}</td>
                                <td>
                                @if(!empty($excel->revisions->last()))
									@if($excel->revisions->last()->attcomp >= 90)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($excel->revisions->last()->attcomp >= 50)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@elseif($excel->revisions->last()->attcomp === NULL)
									<span title="Click to edit" class="m-badge m-badge--metal m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									@if($excel->revisions->last()->attcomp === NULL)
									Value Not Set
									@else
									{{  round($excel->revisions->last()->attcomp, 2, PHP_ROUND_HALF_UP) }}%
									@endif
									</span>
								@else
									<span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
								@endif
                                </td>

                                <td>
								@if(!empty($excel->revisions->last()))
									@if($excel->revisions->last()->attacc >= 90)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($excel->revisions->last()->attacc >= 50)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@elseif($excel->revisions->last()->attacc === NULL)
									<span title="Click to edit" class="m-badge m-badge--metal m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									@if($excel->revisions->last()->attacc === NULL)
									Value Not Set
									@else
									{{  round($excel->revisions->last()->attacc, 2, PHP_ROUND_HALF_UP) }}%
									@endif
									</span>
								@else
									<span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
								@endif
                                </td>
                                <td>
                                @if(!empty($excel->revisions->last()))
									@if($excel->revisions->last()->spatacc >= 90)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($excel->revisions->last()->spatacc >= 50)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@elseif($excel->revisions->last()->spatacc === NULL)
									<span title="Click to edit" class="m-badge m-badge--metal m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									@if($excel->revisions->last()->spatacc === NULL)
									Value Not Set
									@else
									{{  round($excel->revisions->last()->spatacc, 2, PHP_ROUND_HALF_UP) }}%
									@endif
									</span>
								@else
									<span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
								@endif
                                </td>
                                <td>{{ $excel->place->name }}</td>
                                <?php $quarter = $excel->quarter->quarter; $year = $excel->quarter->year ?>
                                <td><div style="display:none;width:0px;height:0px;"></div><div>{{ "Q$quarter $year" }}</div></td>
                                <td>{{ $excel->revisions->last() ? $excel->revisions->last()->updated_by->name :'none' }}</td>
                                <td>{{ $excel->revisions->last() ? $excel->revisions->last()->updated_at : 'none' }}</td>
                                <td>
                                    <div class="form-inline">
                                        <a onclick="addRev({{ $excel->id }})" data-toggle="modal" data-target="#newRevModal" title="Add New Revision" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-add"></i></a>
                                        &nbsp;
                                        @if($excel->revisions->last())
                                            @if($excel->revisions->last()->filename !== null)
                                            <a href="{{ route('revision.show', ['id' => $excel->revisions->last()->id]) }}" title="Download latest revision" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-download"></i></a>
                                            @else
                                            <button href="{{ route('revision.show', ['id' => $excel->revisions->last()->id]) }}" title="Latest revision has no downloadable file" class="m-portlet__nav-link btn m-btn m-btn--icon m-btn--icon-only m-btn--pill" disabled><i class="flaticon-download"></i></button>
                                            @endif
                                        @endif
                                        &nbsp;
                                        <a href="{{ route('excel.show', ['id' => $excel->id]) }}" title="Check Old Revisions" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-refresh"></i></a>
                                    </div>
                                    <div class="form-inline">
                                        @if($excel->revisions->last())<a onclick="modalCalc(this,'{{ json_encode($excel->revisions->last()) }}')" data-toggle="modal" data-target="#calcAttModal" title="Calculate Attribute" class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-interface-1"></i></a>@endif
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
                        <label for="quarter">Upload File &nbsp;<span class="text-info">*Can leave it empty</span></label>
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

<!-- Modal Calc -->
<div class="modal fade" id="calcAttModal" tabindex="-1" role="dialog" aria-labelledby="calcAttModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Calculate Attribute For</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['revision.update', 0], 'method' => 'PUT', 'class' => 'm-form', 'name' => 'calcForm')) }}
            <div class="modal-body">
                <button class="btn btn-default btn-xs" name="quarter" disabled></button>
                <button class="btn btn-default btn-xs" name="place" disabled></button>
                <button class="btn btn-default btn-xs" name="object" disabled></button>
                <input id="revid" type="hidden" name="rev_id" value="">
                <div class="form-group m-form__group">
                    <label>
                    Attribute Completeness &nbsp;
                    <span id="eattcomp" class="text-danger" style="display:none;">An error has occured!</span>
                    <span id="sattcomp" class="text-success" style="display:none;">Calculation success!</span>
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <label class="m-checkbox m-checkbox--single m-checkbox--state m-checkbox--state-success">
                                    <input class="checkCalc" type="checkbox" name="cattcomp" checked="" title="Unset Attribute">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <input class="form-control m-input m-input--square" type="number" step="0.01" min="0" max="100" name="attcomp">
                        <div class="input-group-append">
                            <button class="btn btn-warning" onclick="calcAttComp(this)" type="button" title="Automatic Calculation"><i class="fa fa-calculator"></i></button>
                        </div>
                    </div>
                </div>

                <div class="form-group m-form__group">
                    <label>Attribute Accuracy</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <label class="m-checkbox m-checkbox--single m-checkbox--state m-checkbox--state-success">
                                    <input class="checkCalc" type="checkbox" name="cattacc" checked="" title="Unset Attribute">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <input class="form-control m-input m-input--square" type="number" step="0.01" min="0" max="100" name="attacc">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" title="Automatic Calculation" disabled><i class="fa fa-calculator"></i></button>
                        </div>
                    </div>                
                </div>

                <div class="form-group m-form__group">
                    <label>Spatial Accuracy</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <label class="m-checkbox m-checkbox--single m-checkbox--state m-checkbox--state-success">
                                    <input class="checkCalc" type="checkbox" name="cspatacc" checked="" title="Unset Attribute">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <input class="form-control m-input m-input--square" type="number" step="0.01" min="0" max="100" name="spatacc">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" title="Automatic Calculation" disabled><i class="fa fa-calculator"></i></button>
                        </div>
                    </div>                
                </div>
                <span class="text-info">*Uncheck to set as NULL (Not Set)</span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Update Attributes</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
