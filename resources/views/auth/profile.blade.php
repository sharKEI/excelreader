@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Manage Profile
                &nbsp
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

            <div class="form-group m-form__group">
                <label for="object">Name</label>
                <input value="{{ $user->name }}" class="form-control m-input m-input--square" readonly>
            </div>

            <div class="form-group m-form__group">
                <label for="place">Staff ID</label>
                <input value="{{ $user->staff_id }}" class="form-control m-input m-input--square" readonly>
            </div>

                <button data-toggle="modal" data-target="#editProfileModal" class="btn btn-primary">Edit Profile</button>
                <button data-toggle="modal" data-target="#chgPasswordModal" class="btn btn-warning">Change Password</button>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['user.update'], 'class' => 'm-form')) }}
            <div class="modal-body">

                <div class="form-group m-form__group">
                    <label for="object">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control m-input m-input--square" required>
                </div>
    
                <div class="form-group m-form__group">
                    <label for="place">Staff ID</label>
                    <input type="text" name="staff_id" value="{{ $user->staff_id }}" class="form-control m-input m-input--square" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Edit Profile</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="chgPasswordModal" tabindex="-1" role="dialog" aria-labelledby="chgPasswordModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(array('route' => ['user.chgpass'], 'class' => 'm-form')) }}
            <div class="modal-body">

                <div class="form-group m-form__group">
                    <label for="object">Current Password</label>
                    <input type="password" name="op" class="form-control m-input m-input--square" required>
                </div>
    
                <div class="form-group m-form__group">
                    <label for="place">New Password</label>
                    <input type="password" name="np" class="form-control m-input m-input--square" required>
                </div>

                <div class="form-group m-form__group">
                    <label for="place">Retype New Password</label>
                    <input type="password" name="rp" class="form-control m-input m-input--square" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Change Password</button>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
