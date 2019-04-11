@extends('layouts.app')

@section('content')

<!-- start:: Content -->

<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

					<!--begin: Search Form -->
					<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
						<div class="row align-items-center">
							<div class="col-xl-8 order-2 order-xl-1">
								<form action="" method="GET">
								<div class="form-group m-form__group row align-items-center">
									<div class="col-md-4">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__label">
												<label>Object:</label>
											</div>
											<div class="m-form__control">
												<select class="form-control" name="obj">
													<option value="0">All</option>
													@foreach ($objects as $object)
													<option value="{{ $object->id }}"
															{{ app('request')->input('obj') == $object->id ? 'selected' : '' }}>
															{{ $object->name }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__label">
												<label class="m-label m-label--single">Area:</label>
											</div>
											<div class="m-form__control">
												<select class="form-control"  name="area">
													<option value="0">All</option>
													@foreach ($places as $place)
													<option value="{{ $place->id }}"
														{{ app('request')->input('area') == $place->id ? 'selected' : '' }}>
														{{ $place->name }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__label">
												<label class="m-label m-label--single">Quarter:</label>
											</div>
											<div class="m-form__control">
												<select class="form-control" name="quart">
													<option value="0">All</option>
													@foreach ($quarters as $quarter)
													<option value="{{ $quarter->id }}"
															{{ app('request')->input('quart') == $quarter->id ? 'selected' : '' }}>
														Q{{ $quarter->quarter }} {{ $quarter->year }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group m-form__group row align-items-right">
									<div class="col-md-6">
										<div class="m-form__group m-form__group--inline">
											<div class="m-form__control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="m-form__group m-form__group--inline text-white">
											<div class="m-form__control">
												<input type="submit" class="btn btn-primary" value="Filter Selection">
												<a href="{{ url('/') }}" class="btn btn-danger" >Reset Filter</a>
											</div>
										</div>
									</div>
								</div>
								</form>
								<div class="form-group m-form__group row align-items-center">
									<div class="col-md-12">
										<div class="m-input-icon m-input-icon--left">
											<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
											<span class="m-input-icon__icon m-input-icon__icon--left">
												<span><i class="la la-search"></i></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 order-1 order-xl-2 m--align-right">

							</div>
						</div>
					</div>

					<!--end: Search Form -->

            <h3 class="m-portlet__head-text">
                Add New Object
            </h3>

            {{-- Form validation error --}}
            @if ($errors->any())
            <div class="m-alert m-alert--outline m-alert--outline-2x alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

						<!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="No" data-field="id">No</th>
												<th title="Attribute Completeness" data-field="AttComp">Att. Completeness</th>
                        <th title="Object" data-field="Object">Object</th>

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
                                        @if ($excel->revisions->last()->attcomp >= 80)
                                        <span class="m-badge m-badge--success m-badge--wide text-white">
                                        @elseif ($excel->revisions->last()->attcomp >= 50)
                                        <span class="m-badge m-badge--info m-badge--wide text-white">
                                        @elseif ($excel->revisions->last()->attcomp >= 30)
                                        <span class="m-badge m-badge--warning m-badge--wide text-white">
                                        @else
                                        <span class="m-badge m-badge--danger m-badge--wide text-white">
                                        @endif
                                        {{ round($excel->revisions->last()->attcomp, 2, PHP_ROUND_HALF_UP) }}%
                                        </span>
                                    @else
                                        <span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
                                    @endif
                                </td>
                                <td>{{ $excel->place->name }}</td>
                                <?php $quarter = $excel->quarter->quarter; $year = $excel->quarter->year ?>
                                <td><div style="display:none;width:0px;height:0px;">{{ $year.$quarter }}</div>{{ "Q$quarter $year" }}</td>
                                <td>{{ $excel->revisions->last() ? $excel->revisions->last()->updated_by->name :'none' }}</td>
                                <td>
                                    <div class="form-inline">
                                        <a href="{{ route('excel.show', ['id' => $excel->id]) }}" title="Check Revisions" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-refresh"></i></a>
                                        &nbsp
                                        <button onclick="editExcel({{ $excel->object_id.','.$excel->place_id.','.$excel->quarter_id.','.$excel->id }})" data-toggle="modal" data-target="#editExcelModal" title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-edit-1"></i></button>
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

            <form method="post" action="{{route('pdf.store')}}" enctype="multipart/form-data">
              {{csrf_field()}}

                    <div class="input-group control-group increment" >
                      <input type="file" name="filename[]" class="form-control" multiple="true">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                      </div>
                    </div>

                    <!-- <div class="clone hide">
                      <div class="control-group input-group" style="margin-top:10px">
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                          <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                      </div>
                    </div> -->
              </form>
        </div>

    </div>
</div>

<!-- end:: Content -->
@endsection
