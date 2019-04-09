@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Map Collections
                &nbsp
                <button data-toggle="modal" data-target="#newMapModal" class="btn btn-primary">Add New Map</button>
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
            <hr>

            {{-- thumbnail here --}}
            <style>/* Centered text */
                    .centered {
                      position: absolute;
                      top: 45%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                    }
            </style>
            <!-- Page Content -->
            @if($maps)
            @foreach($places as $place)
            <div class="container">

                <h4>{{ $place->name }}</h4>

                <hr class="mt-2 mb-5">

                <div class="row text-center text-lg-left">
                    @foreach($maps as $map)
                    @if($map->place->name == $place->name)
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="javascript:;" onclick="modalMap(this)" class="d-block mb-4 h-100">
                            <img data-toggle="modal" data-target="#modalMap" style="height:8rem;width:80rem;" class="img-fluid img-thumbnail map" src="{{ url('/')."/storage/uploads/maps/$place->name/$map->id $map->img" }}" alt="">
                            <div id="passTitle" class="centered text-white" >
                                <h4>{{ $map->title }}</h4>
                                @if(Auth::user()['id'] == $map->updated_by->id || Auth::user()['admin'])
                                {{ Form::open(['onsubmit' => 'delert(this)', 'method' => 'DELETE', 'route' => ['map.destroy', $map->id]]) }}
                                <button type="submit" title="Delete" class="btn btn-danger btn-sm"><i class="flaticon-delete"></i></button>
                                {{ Form::close() }}
                                @endif
                            </div>
                            <input id="passUser" type="hidden" value="{{ $map->updated_by->name }}">
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
            @endforeach
            @endif
        <!-- /.container -->

        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newMapModal" tabindex="-1" role="dialog" aria-labelledby="newMapModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['map.store'], 'class' => 'm-form', 'enctype' =>'multipart/form-data')) }}
            <div class="modal-body">
                    <div class="form-group m-form__group">
                        <label for="name">Map Title</label>
                        <input class="form-control m-input m-input--square" type="text" name="title" required>
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
                        <label for="map">Upload Map</label>
                        <input class="form-control m-input m-input--square" type="file" name="img">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Add Map</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="modalMap" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        {{-- <div class="modal-content"> --}}
                <div id="mapCard" class="card" style="width: 200rem;">
                        <img id="mapsrc" class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" id="mapTitle">Card title</h5>
                          <p class="card-text" id="mapUser">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        {{-- </div> --}}
    </div>
</div>

<!-- end:: Content -->
@endsection
