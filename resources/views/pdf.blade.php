@extends('layouts.app')

@section('content')

<!-- start:: Content -->

<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Add New Object
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

            <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
              {{csrf_field()}}

                    <div class="input-group control-group increment" >
                      <input type="file" name="filename[]" class="form-control" multiple>
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
