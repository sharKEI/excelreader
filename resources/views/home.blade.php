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
							<div class="form-group m-form__group row align-items-center">
								<div class="col-md-4">
									<div class="m-form__group m-form__group--inline">
										<div class="m-form__label">
											<label>Area:</label>
										</div>
										<div class="m-form__control">
											<select class="form-control m-bootstrap-select" id="m_form_status">
												<option value="">All</option>
												<option value="1">Cheras</option>
												<option value="2">Kuala Selangor</option>
												<option value="3"> Putrajaya</option>
												<option value="4"> Sungai Besar</option>
											</select>
										</div>
									</div>
									<div class="d-md-none m--margin-bottom-10"></div>
								</div>
								<div class="col-md-4">
									<div class="m-form__group m-form__group--inline">
										<div class="m-form__label">
											<label class="m-label m-label--single">Quarter:</label>
										</div>
										<div class="m-form__control">
											<select class="form-control m-bootstrap-select" id="m_form_type">
												<option value="">All</option>
												<option value="1">Q5 (2018)</option>
											</select>
										</div>
									</div>
									<div class="d-md-none m--margin-bottom-10"></div>
								</div>
								<div class="col-md-4">
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
							<th title="Object" data-field="Obj">Object</th>
							{{-- <th title="Attribute Accuracy - FL or label Check" data-field="AttCom">Attribute Accuracy</th> --}}
							<th title="Attribute Completeness - null record check" data-field="AttAcc">Attribute Completeness</th>
							{{-- <th title="Spatial Accuracy - less than 5 m" data-field="SpaAcc">Spatial Accuracy</th> --}}
							<th title="Area" data-field="Area">Area</th>
							<th title="Type" data-field="Quarter">Quarter</th>

						</tr>
					</thead>
					<tbody>
						@foreach($excels as $key => $excel)
						<tr>
							<td>{{ $key }}</td>
							<td>{{ $excel->object->name }}</td>
							<td>
							@if($excel->revisions->last()->attcomp >= 80)
							<span class="m-badge m-badge--success m-badge--wide">
							@elseif($excel->revisions->last()->attcomp >= 50)
							<span class="m-badge m-badge--info m-badge--wide">
							@elseif($excel->revisions->last()->attcomp >= 30)
							<span class="m-badge m-badge--warning m-badge--wide">
							@else
							<span class="m-badge m-badge--danger m-badge--wide">
							@endif
							{{ $excel->revisons->last()->attcomp }}%</span>
							</td>
							{{-- <td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">100%</td> --}}
							{{-- <td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td> --}}
							<td>{{ $excel->place->name }}</td>
							<td>Q{{ $excel->quarter->quarter }} {{ $excel->quarter->year }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<!--end: Datatable -->
			</div>
		</div>
	</div>
@endsection
