@extends('layout.default')

@section('title', 'Home')

@section('content')
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">LAYOUT</a></li>
            <li class="breadcrumb-item active">STARTER PAGE</li>
        </ul>

        <h1 class="page-header">
            Starter Page <small>page header description goes here...</small>
        </h1>

        <p>
            {{ __('You are logged in!') }}
        </p>
    </div>
    <!-- END #content -->
@endsection
