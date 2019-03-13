{{-- Server / DB Error --}}
@if(session('success'))
    <div class="m-alert alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <strong>Success!</strong> {{ @session('success') }}					  	
    </div>
@endif

@if(session('error'))
    <div class="m-alert alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <strong>Error!</strong> {{ @session('error') }}					  	
    </div>
@endif

@if(session('warning'))
    <div class="m-alert alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <strong>Warning!</strong> {{ @session('warning') }}					  	
    </div>
@endif