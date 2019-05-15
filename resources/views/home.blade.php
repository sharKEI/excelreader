@extends('layouts.app')

@section('content')
	<div class="m-content">
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							<!-- Title -->
						</h3>
					</div>
				</div>
				<div class="m-portlet__head-tools">
					<ul class="m-portlet__nav">

					</ul>
				</div>
			</div>
			<div class="m-portlet__body">

				<!--begin: Search Form -->
				<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
					<div class="row align-items-center">
						<div class="col-xl-8 order-2 order-xl-1">
							<form action="" method="GET">
							<div class="form-group m-form__group row align-items-center">

								<!-- <div class="col-md-4">
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
								</div> -->

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

				<!--begin: Datatable -->
				<table class="m-datatable" id="html_table" width="100%">
					<thead>
						<tr>
							<th title="No" data-field="No">No</th>
							<th title="Object" data-field="Object">Object</th>
							<th title="Attribute Completeness - null record check" data-field="AttAcc">Attribute Completeness</th>
							<th title="Attribute Accuracy - FL or label Check" data-field="AttCom">Attribute Accuracy</th>
							<th title="Spatial Accuracy - less than 5 m" data-field="SpaAcc">Spatial Accuracy</th>
							<th title="Area" data-field="area">Area</th>
							<th title="Quarter Name" data-field="quarter">Quarter</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($excels as $key => $excel)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $excel->object->name }}</td>

							<td>
							@if(!empty($excel->revisions->last()))
								@if($excel->revisions->last()->attcomp >= 95)
								<span class="m-badge m-badge--success m-badge--wide text-white ">
								@elseif($excel->revisions->last()->attcomp >= 51)
								<span class="m-badge m-badge--warning m-badge--wide text-white ">
								@else
								<span class="m-badge m-badge--danger m-badge--wide text-white ">
								@endif
								{{  round($excel->revisions->last()->attcomp, 2, PHP_ROUND_HALF_UP) }}%</span>
							@else
								<span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
							@endif
							</td>

							<td>
								@if(!empty($excel->revisions->last()))
									@if($excel->revisions->last()->attacc >= 95)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($excel->revisions->last()->attacc >= 51)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									{{  round($excel->revisions->last()->attacc, 2, PHP_ROUND_HALF_UP) }}%</span>
								@else
									<span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
								@endif
							</td>
							<td>
								@if(!empty($excel->revisions->last()))
									@if($excel->revisions->last()->spatacc >= 95)
									<span title="Click to edit" class="m-badge m-badge--success m-badge--wide text-white ">
									@elseif($excel->revisions->last()->spatacc >= 51)
									<span title="Click to edit" class="m-badge m-badge--warning m-badge--wide text-white ">
									@else
									<span title="Click to edit" class="m-badge m-badge--danger m-badge--wide text-white ">
									@endif
									{{  round($excel->revisions->last()->spatacc, 2, PHP_ROUND_HALF_UP) }}%</span>
								@else
									<span class="m-badge m-badge--metal m-badge--wide text-white">None</span>
								@endif
							</td>
							<td>{{ $excel->place->name }}</td>
							<td>Q{{ $excel->quarter->quarter }} {{ $excel->quarter->year }}</td>
							<td>
								@if($excel->revisions->last())<a href="{{ route('revision.show', ['id' => $excel->revisions->last()->id]) }}" title="Download the latest revisions" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-download"></i></a>@endif
								<a href="{{ route('excel.show', ['id' => $excel->id]) }}" title="Check Revisions" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-refresh"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<!--end: Datatable -->
			</div>
		</div>
	</div>
@endsection
