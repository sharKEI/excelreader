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
                Manage File(s)
								&nbsp
                <button data-toggle="modal" data-target="#newFileModal" class="btn btn-primary">Add New File</button>
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
                        <th title="No" data-field="No">No</th>
												<th title="Filename" data-field="filename">Filename</th>
												<th title="Name" data-field="name">Name</th>
                        <th title="quarter" data-field="quarter">Quarter</th>
                        <th>Last Updated By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($files)
                        @foreach ($files as $key => $file)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $file->filename }}</td>
                                <td>{{ $file->name }}</td>
																<td>{{ $quarter='Q'.$file->quarter->quarter.' '.$file->quarter->year}}</td>
																<td>{{ $file->updated_by->name}}</td>


                              <td>
                                    <div class="form-inline">
                                        <button onclick='pdfview("{{url("/storage/uploads/reports/$quarter/$file->id $file->filename")}}")' data-toggle="modal" data-target="#pdfviewModal" title="View File" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-eye"></i></button>
                                        &nbsp
																				<!-- {{url('/pdfjs/viewer.html?file=')}} -->
																				 <button onclick="editFile({{ $file->id.',\''.$file->name.'\','.$file->quarter_id}})" data-toggle="modal" data-target="#editFileModal" title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-edit-1"></i></button>
                                         &nbsp
                                        {{ Form::open(['onsubmit' => 'delert(this)', 'method' => 'DELETE', 'route' => ['pdf.destroy', $file->id]]) }}
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
<div class="modal fade" id="newFileModal" tabindex="-1" role="dialog" aria-labelledby="newFileModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['pdf.store'], 'class' => 'm-form','enctype' => 'multipart/form-data')) }}
            <div class="modal-body">

							<div class="form-group m-form__group">
									<label for="quarter">Name</label>
									<input name="name" type="text" class="form-control m-input m-input--square" required>
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

										<div class="form-group m-form__group">
												<label for="quarter">Upload</label>
												<input type="file" name="filename" class="form-control m-input m-input--square" required>
										</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Add File</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editFileModal" tabindex="-1" role="dialog" aria-labelledby="editFileModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['pdf.update',0], 'class' => 'm-form','method' => 'PUT')) }}
						<input type="hidden" id='file_id' name="file_id" value="">
            <div class="modal-body">

							<div class="form-group m-form__group">
									<label for="quarter">Name</label>
									<input id='name' name="name" type="text" class="form-control m-input m-input--square" required>
							</div>

                    <div class="form-group m-form__group">
                        <label for="quarter">Quarter</label>
                        <select name="quarter" class="form-control m-input m-input--square" required>
                                <option disabled selected>Choose a quarter...</option>
                            @foreach ($quarters->sortBy('quarter')->sortBy('year') as $quarter)
                                <option id='qrt{{$quarter->id}}'value="{{ $quarter['id'] }}">Q{{ $quarter['quarter'] }} {{ $quarter['year'] }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Edit File</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- Modal View -->
<div class="modal fade" id="pdfviewModal" tabindex="-1" role="dialog" aria-labelledby="pdfviewModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <iframe width="800" height="700" align="right" id="pdfview"></iframe>

        </div>
    </div>
</div>
<!-- end:: Content -->
@endsection
