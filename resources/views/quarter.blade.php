@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Add New Quarter
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
                                {{ Form::open(array('route' => ['quarter.store'], 'class' => 'm-form')) }} {{-- This is a form opening tag <form> --}}
        
                                    <div class="input-group">
                                        <select class="form-control m-input m-input--square" name="year" required>
                                                @for ($i = 2010; $i < 2090; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                        </select>
                                        <select class="form-control m-input m-input--square" name="quarter" required>
                                            @for ($i = 1; $i < 5; $i++)
                                                <option value="{{$i}}">Q{{$i}}</option>
                                            @endfor
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Add Quarter</button>
                                        </div>
                                    </div>
                        
                                {{  Form::close() }} {{-- This is a form closing tag </form> --}}
                            </div>
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Search Quarter(s)..." id="generalSearch">
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
                Manage Quarters
            </h3>

            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="No" data-field="No">No</th>
                        <th title="Quarter Name" data-field="quarter">Quarter</th>
                        <th title="Year" data-field="Year">Year</th>
                        <th>Records Available</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($quarters)
                        @foreach ($quarters as $quarter)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>Q{{ $quarter['quarter'] }}</td>
                                <td>{{ $quarter['year'] }}</td>
                                <td>{{ sizeof($quarter->excels) }}</td>
                                <td>
                                    <div class="form-inline">
                                        {{ Form::open(['onsubmit' => 'delert(this)', 'method' => 'DELETE', 'route' => ['quarter.destroy', $quarter->id]]) }}
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
