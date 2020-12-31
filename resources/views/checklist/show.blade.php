@extends('layout.default')

@section('title', 'Checklist')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('checklists.index') }}">CHECKLISTS</a></li>
                    <li class="breadcrumb-item active">DETAILS</li>
                </ul>
                <h1 class="page-header mb-0">{{ $checklist->name }}</h1>
            </div>

            <div class="ml-auto">
                <a href="{{ route('requirements.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Create new requirement</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mx-auto text-center">
                <img src="{{ asset('assets/img/empty.png') }}" alt="Empty">
                <h3>This section seems empty</h3>
                <p class="text-muted mb-2">
                    Plase create a new requirement for this checklist
                </p>
            </div>
        </div>
    </div>
    
@endsection