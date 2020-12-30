@extends('layout.empty')

@section('title', '404 Error')

@section('content')
    <!-- BEGIN error -->
    <div class="error-page">
        <!-- BEGIN error-page-content -->
        <div class="error-page-content">
            <div class="error-img">
                <div class="error-img-code">404</div>
                <img src="{{ asset('assets/img/404.svg')}}" alt="404" />
            </div>

            <h1>Oops!</h1>
            <h3>We can't seem to find the page you're looking for</h3>
            <p class="text-muted mb-2">
                Here are some helpful links instead:
            </p>
            <p class="mb-4">
                <a href="{{ route('home') }}">Home</a>
                <span class="link-divider"></span>
                <a href="{{ route('checklists.index')}}">Checklists</a>
                <span class="link-divider"></span>
                <a href="{{ route('controls.index') }}">Controls</a>
            </p>
            <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
        </div>
        <!-- END error-page-content -->
    </div>
    <!-- END error -->
@endsection
