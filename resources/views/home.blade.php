@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">

	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">-</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">Data Health Check</span>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</div>

	<!-- END: Subheader -->
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
							<th title="Attribute Accuracy - FL or label Check" data-field="AttCom">Attribute Accuracy</th>
							<th title="Attribute Completeness - null record check" data-field="AttAcc">Attribute Completeness</th>
							<th title="Spatial Accuracy - less than 5 m" data-field="SpaAcc">Spatial Accuracy</th>
							<th title="Area" data-field="Area">Area</th>
							<th title="Type" data-field="Quarter">Quarter</th>

						</tr>
					</thead>
					<tbody>
						<!--begin: Cheras -->
						<tr>
							<td>01</td>
							<td>PMU, PPU and SSU</td>
							<td>
								@if($num>80)
									<span class="m-badge m-badge--success m-badge--wide">
								@else if($num>50)
									<span class="m-badge m-badge--warning m-badge--wide">
								@else
									<span class="m-badge m-badge--danger m-badge--wide">
								@end if
									<a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">89% </a>
								</span>
							</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">100%</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Distribution PE</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/27. Distribution PE.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/27. Distribution PE.xlsx" style="color:white">97% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>03</td>
							<td>LVDB</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>04</td>
							<td>Pole</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/19. Pole.xlsx" style="color:white">1% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/19. Pole.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>05</td>
							<td>Busbar</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/28. Busbar.xlsx" style="color:white">98% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/28. Busbar.xlsx" style="color:white">95% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>06</td>
							<td>Circuit Breaker</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/30. Circuit Breaker.xlsx" style="color:white">58% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/30. Circuit Breaker.xlsx" style="color:white">96% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>07</td>
							<td>Distribution Transformer</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/7. Distribution Transformer.xlsx" style="color:white">89% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/7. Distribution Transformer.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>08</td>
							<td>Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/22. Feeder Point.xlsx" style="color:white">87% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/22. Feeder Point.xlsx" style="color:white">93% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>09</td>
							<td>LV Cable Joint</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/6. LV Cable Joint.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/6. LV Cable Joint.xlsx" style="color:white">54% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>10</td>
							<td>LV Feeder Point</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/23. LV Feeder Point.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>11</td>
							<td>LV Fuse</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/10. LV Fuse.xlsx" style="color:white">93% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/10. LV Fuse.xlsx" style="color:white">91% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						<tr>
							<td>12</td>
							<td>LV OH Conductor</td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>13</td>
							<td>LV UG Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/4. LV UG Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/4. LV UG Conductor.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>14</td>
							<td>Main Transformer</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/8. Main Transformer.xlsx" style="color:white">68% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/8. Main Transformer.xlsx" style="color:white">92% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>15</td>
							<td>MV Cable Joint</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>16</td>
							<td>MV OH Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/1. MV OH Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/1. MV OH Conductor.xlsx" style="color:white">13% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>17</td>
							<td>MV UG Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/3. MV UG Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/3. MV UG Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>18</td>
							<td>RMU</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/17. Ring Main Unit.xlsx" style="color:white">83% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/17. Ring Main Unit.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Street Light</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/15. Street Light.xlsx" style="color:white">98% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/15. Street Light.xlsx" style="color:white">98% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Switch Bank</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/29. Switch Bank.xlsx" style="color:white">64% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/29. Switch Bank.xlsx" style="color:white">94% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>1</td>
							<td>1</td>
						</tr>
						<!--end: Cheras -->

						<!--begin: Putrajaya -->
						<tr>
							<td>01</td>
							<td>PMU, PPU and SSU</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/26. PPU-SSU.xlsx" style="color:white">100%</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Distribution PE</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/27. Distribution PE.xlsx" style="color:white">97% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/27. Distribution PE.xlsx" style="color:white">97% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>03</td>
							<td>LVDB</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>04</td>
							<td>Pole</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/19. Pole.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/19. Pole.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>05</td>
							<td>Busbar</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/28. Busbar.xlsx" style="color:white">10% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/28. Busbar.xlsx" style="color:white">4% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>06</td>
							<td>Circuit Breaker</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/30. Circuit Breaker.xlsx" style="color:white">69% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/30. Circuit Breaker.xlsx" style="color:white">88% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>07</td>
							<td>Distribution Transformer</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/7. Distribution Transformer.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/7. Distribution Transformer.xlsx" style="color:white">97% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>08</td>
							<td>Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/22. Feeder Point.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/22. Feeder Point.xlsx" style="color:white">83% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>09</td>
							<td>LV Cable Joint</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/6. LV Cable Joint.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/6. LV Cable Joint.xlsx" style="color:white">93% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>10</td>
							<td>LV Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-success--wide"><a href="data/dhc/2018_q5/ptj/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>11</td>
							<td>LV Fuse</td>
							<td><span class="m-badge m-badge--success m-success--wide"><a href="data/dhc/2018_q5/ptj/10. LV Fuse.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--warning m-success--wide"><a href="data/dhc/2018_q5/ptj/10. LV Fuse.xlsx" style="color:white">74% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						<tr>
							<td>12</td>
							<td>LV OH Conductor</td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>13</td>
							<td>LV UG Conductor</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/4. LV UG Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/4. LV UG Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>14</td>
							<td>Main Transformer</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/8. Main Transformer.xlsx" style="color:white">71% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/8. Main Transformer.xlsx" style="color:white">94% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>15</td>
							<td>MV Cable Joint</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>16</td>
							<td>MV OH Conductor</td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>17</td>
							<td>MV UG Conductor</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/3. MV UG Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/3. MV UG Conductor.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>18</td>
							<td>RMU</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/17. Ring Main Unit.xlsx" style="color:white">97% </a></span></td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/17. Ring Main Unit.xlsx" style="color:white">66% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Street Light</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/15. Street Light.xlsx" style="color:white">75% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/15. Street Light.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Switch Bank</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/29. Switch Bank.xlsx" style="color:white">75% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/29. Switch Bank.xlsx" style="color:white">87% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>3</td>
							<td>1</td>
						</tr>
						<!--end: Putrajaya -->

						<!--begin: Kuala Selangor -->
						<tr>
							<td>01</td>
							<td>PMU, PPU and SSU</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/26. PPU-SSU.xlsx" style="color:white">100%</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Distribution PE</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/27. Distribution PE.xlsx" style="color:white">93% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>03</td>
							<td>LVDB</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/18. LVDB-FP.xlsx" style="color:white">33% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>04</td>
							<td>Pole</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/19. Pole.xlsx" style="color:white">70% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/19. Pole.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>05</td>
							<td>Busbar</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/28. Busbar.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/28. Busbar.xlsx" style="color:white">2% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>06</td>
							<td>Circuit Breaker</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/30. Circuit Breaker.xlsx" style="color:white">60% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/30. Circuit Breaker.xlsx" style="color:white">85% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>07</td>
							<td>Distribution Transformer</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/7. Distribution Transformer.xlsx" style="color:white">90% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/7. Distribution Transformer.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>08</td>
							<td>Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/22. Feeder Point.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/22. Feeder Point.xlsx" style="color:white">84% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>09</td>
							<td>LV Cable Joint</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/6. LV Cable Joint.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/6. LV Cable Joint.xlsx" style="color:white">76% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>10</td>
							<td>LV Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>11</td>
							<td>LV Fuse</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/10. LV Fuse.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/10. LV Fuse.xlsx" style="color:white">20% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>12</td>
							<td>LV OH Conductor</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/2. LV OH Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/2. LV OH Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>13</td>
							<td>LV UG Conductor</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/4. LV UG Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/4. LV UG Conductor.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>14</td>
							<td>Main Transformer</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/8. Main Transformer.xlsx" style="color:white">75% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/8. Main Transformer.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>15</td>
							<td>MV Cable Joint</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>16</td>
							<td>MV OH Conductor</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/1. MV OH Conductor.xlsx" style="color:white">100% </a></span></td>
							<<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/1. MV OH Conductor.xlsx" style="color:white">4% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>17</td>
							<td>MV UG Conductor</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/3. MV UG Conductor.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/3. MV UG Conductor.xlsx" style="color:white">91% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>18</td>
							<td>RMU</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/17. Ring Main Unit.xlsx" style="color:white">91% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/17. Ring Main Unit.xlsx" style="color:white">91% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Street Light</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/15. Street Light.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/15. Street Light.xlsx" style="color:white">1% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Switch Bank</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/29. Switch Bank.xlsx" style="color:white">73% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/29. Switch Bank.xlsx" style="color:white">89% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>2</td>
							<td>1</td>
						</tr>
						<!--end: Kuala Selangor -->
						<!--begin: Sungai Besar -->
						<tr>
							<td>01</td>
							<td>PMU, PPU and SSU</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/26. PPU-SSU.xlsx" style="color:white">100%</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>02</td>
							<td>Distribution PE</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/27. Distribution PE.xlsx" style="color:white">79% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>03</td>
							<td>LVDB</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/18. LVDB-FP.xlsx" style="color:white">41% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>04</td>
							<td>Pole</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/19. Pole.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/19. Pole.xlsx" style="color:white">1% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>05</td>
							<td>Busbar</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/28. Busbar.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/28. Busbar.xlsx" style="color:white">2% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>06</td>
							<td>Circuit Breaker</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/30. Circuit Breaker.xlsx" style="color:white">72% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/30. Circuit Breaker.xlsx" style="color:white">80% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>07</td>
							<td>Distribution Transformer</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/7. Distribution Transformer.xlsx" style="color:white">98% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/7. Distribution Transformer.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>08</td>
							<td>Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/22. Feeder Point.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/22. Feeder Point.xlsx" style="color:white">93% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>09</td>
							<td>LV Cable Joint</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/6. LV Cable Joint.xlsx" style="color:white">88% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/6. LV Cable Joint.xlsx" style="color:white">85% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>10</td>
							<td>LV Feeder Point</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/23. LV Feeder Point.xlsx" style="color:white">88% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/23. LV Feeder Point.xlsx" style="color:white">85% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>11</td>
							<td>LV Fuse</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/10. LV Fuse.xlsx" style="color:white">98% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/10. LV Fuse.xlsx" style="color:white">10% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>12</td>
							<td>LV OH Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/2. LV OH Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/2. LV OH Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>13</td>
							<td>LV UG Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/4. LV UG Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/4. LV UG Conductor.xlsx" style="color:white">99% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>14</td>
							<td>Main Transformer</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/8. Main Transformer.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/8. Main Transformer.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>15</td>
							<td>MV Cable Joint</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/5. MV Cable Joint.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>16</td>
							<td>MV OH Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/1. MV OH Conductor.xlsx" style="color:white">0% </a></span></td>
							<<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/1. MV OH Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>17</td>
							<td>MV UG Conductor</td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/3. MV UG Conductor.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/3. MV UG Conductor.xlsx" style="color:white">88% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>18</td>
							<td>RMU</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/17. Ring Main Unit.xlsx" style="color:white">78% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/17. Ring Main Unit.xlsx" style="color:white">87% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Street Light</td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/15. Street Light.xlsx" style="color:white">100% </a></span></td>
							<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/15. Street Light.xlsx" style="color:white">0% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Switch Bank</td>
							<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/29. Switch Bank.xlsx" style="color:white">66% </a></span></td>
							<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/29. Switch Bank.xlsx" style="color:white">93% </a></span></td>
							<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
							<td>4</td>
							<td>1</td>
						</tr>
						<!--end: Sungai Besar -->
					</tbody>
				</table>

				<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>
<!-- end:: Content -->
@endsection
