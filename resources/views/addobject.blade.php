@extends('layouts.app')

@section('content')
<!-- start:: Content -->

    {{-- Server / DB Error --}}
    @if(session('success'))
        {{-- Styling here --}}
        <p style="color:green;">{{ @session('success') }}</p>
    @endif

    @if(session('error'))
        {{-- Styling here --}}
        <p style="color:red;">{{ @session('error') }}</p>
    @endif

    @if(session('warning'))
        {{-- Styling here --}}
        <p style="color:yellow;">{{ @session('warning') }}</p>
    @endif

    <br>

    {{-- Form validation error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>

    {{ Form::open(array('url' => '/object/add', 'class' => '')) }} {{-- This is a form opening tag <form> --}}
        
        <input type="text" name="name">
        <input type="submit" value="Add Object">

    {{  Form::close() }} {{-- This is a form closing tag </form> --}}

<!-- end:: Content -->
@endsection
