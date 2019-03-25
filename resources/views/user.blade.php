@extends('layouts.app')

@section('content')
<!-- start:: Content -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

        <div class="m-portlet__body">

            <h3 class="m-portlet__head-text">
                Manage Users
                &nbsp
                <button data-toggle="modal" data-target="#newUserModal" class="btn btn-primary">Add New User</button>
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
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Search user(s)..." id="generalSearch">
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

            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th title="No" data-field="No">No</th>
                        <th>Name</th>
                        <th>Staff ID</th>
                        <th>Admin</th>
                        <th>Active</th>
                        <th>Register At</th>
                        <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users)
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->staff_id }}
                                </td>
                                <td>
                                    @if($user->admin)
                                    {{ Form::open(['method' => 'PUT', 'route' => ['users.update', $user->id]]) }}
                                    <input type="hidden" name="type" value="admin">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button title="Unassign Admin" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill">{{ 'Yes' }}</button>
                                    {{ Form::close() }}
                                    @else 
                                    {{ Form::open(['method' => 'PUT', 'route' => ['users.update', $user->id]]) }}
                                    <input type="hidden" name="type" value="admin">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button title="Assign Admin" class="m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill">{{ 'No' }}</button>
                                    {{ Form::close() }}
                                    @endif
                                </td>
                                <td>    
                                    @if($user->active) 
                                    {{ Form::open(['method' => 'PUT', 'route' => ['users.update', $user->id]]) }}
                                    <input type="hidden" name="type" value="activate">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button title="Deactivate" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill">{{ 'Yes' }}</button>
                                    {{ Form::close() }}
                                    @else 
                                    {{ Form::open(['method' => 'PUT', 'route' => ['users.update', $user->id]]) }}
                                    <input type="hidden" name="type" value="activate">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button title="Activate" class="m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill">{{ 'No' }}</button>
                                    {{ Form::close() }}
                                    @endif
                                </td>
                                <td>{{ explode(' ', $user->created_at)[0] }}</td>
                                <td>
                                    {{ Form::open(['onsubmit' => 'delert(this)', 'method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) }}
                                    <button title="Delete User" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill"><i class="flaticon-delete"></i></button>
                                    {{ Form::close() }}
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
