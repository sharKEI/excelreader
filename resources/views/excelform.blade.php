@extends('layouts.app')

@section('content')
<!-- start:: Content -->

<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Add New Excel
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

            {{ Form::open(array('route' => ['excel.store'], 'class' => 'm-form', 'enctype' => "multipart/form-data")) }}

                <div class="form-group m-form__group">
                    <label for="object">Object</label>
                    <select name="object" class="form-control m-input m-input--square">
                            <option disabled selected>Choose an object...</option>
                        @foreach ($objects as $object)
                            <option value="{{ $object['id'] }}">{{ $object['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-form__group">
                    <label for="place">Area</label>
                    <select name="place" class="form-control m-input m-input--square">
                            <option disabled selected>Choose an area...</option>
                        @foreach ($places as $place)
                            <option value="{{ $place['id'] }}">{{ $place['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group m-form__group">
                    <label for="quarter">Quarter</label>
                    <select name="quarter" class="form-control m-input m-input--square">
                            <option disabled selected>Choose a quarter...</option>
                        @foreach ($quarters as $quarter)
                            <option value="{{ $quarter['id'] }}">Q{{ $quarter['quarter'] }} {{ $quarter['year'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-form__group">
                    <label for="Excel">Upload excel file</label>
                    <input type="file" class="form-control m-input m-input--square" name="xlfile"> 
                </div>

                <div class="form-group m-form__group">
                    <button class="btn btn-primary" type="submit">Add Excel</button>
                </div>



            {{ Form::close() }}

        </div>

    </div>
</div>

<!-- end:: Content -->
@endsection
