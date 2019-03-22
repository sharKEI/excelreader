@extends('layouts.app')

@section('content')
<!-- start:: Content -->

<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Add New Place
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

            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-8">
                                {{ Form::open(array('route' => ['place.store'], 'class' => 'm-form')) }} {{-- This is a form opening tag <form> --}}
        
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" placeholder="New Place Name..." required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Add Place</button>
                                        </div>
                                    </div>
                        
                                {{  Form::close() }} {{-- This is a form closing tag </form> --}}
                            </div>
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Search place(s)..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Search Form -->

            <h3 class="m-portlet__head-text">
                Manage Places
            </h3>

            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="No" data-field="No">No</th>
                        <th title="Place Name" data-field="Place">Place Name</th>
                        <th>Records Available</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($places)
                        @foreach ($places as $key => $place)
                            <tr>
                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td>
                                    {{ $place['name'] }}
                                </td>
                                <td>{{ sizeof($place->excels) }}</td>
                                <td>
                                    <div class="form-inline">
                                        {{ Form::open(['onsubmit' => 'editModal(this, "'.$place['name'].'")', 'method' => 'PUT', 'route' => ['place.update', $place->id]]) }}
                                            <input type="hidden" name="name" value="">
                                            <button title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-edit-1"></i></button>
                                        {{ Form::close() }}
                                        &nbsp
                                        {{ Form::open(['onsubmit' => 'delert(this)', 'method' => 'DELETE', 'route' => ['place.destroy', $place->id]]) }}
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

<!-- end:: Content -->
@endsection
