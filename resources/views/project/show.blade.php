@extends('layout.default')

@section('title', 'Project')
    
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">PROJECTS</a></li>
                    <li class="breadcrumb-item active">DETAILS</li>
                </ul>
                <h1 class="page-header mb-0">{{ $project->name }}</h1>
            </div>
        </div>

        <div class="mb-md-4 mb-3 d-md-flex">
            <div class="dropdown-toggle">
                <a href="#" data-toggle="dropdown" class="text-dark text-decoration-none"><i class="fas fa-user-cog fa-fw fa-lg text-muted mr-1"></i> Developers: 2</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><i class="far fa-user fa-fw fa-lg text-muted mr-1"></i> Mario Santos</a>
                    <a href="#" class="dropdown-item"><i class="far fa-user fa-fw fa-lg text-muted mr-1"></i> Maximo Santana</a>
                </div>
            </div>
            <div class="dropdown-toggle ml-md-4 mt-md-0 mt-2">
                <a href="#" data-toggle="dropdown" class="text-dark text-decoration-none"><i class="fas fa-user-shield fa-fw fa-lg text-muted mr-1"></i> Security: 1</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><i class="far fa-user fa-fw fa-lg text-muted mr-1"></i> Bood Oz</a>
                </div>
            </div>
            <div class="dropdown-toggle ml-md-4 mt-md-0 mt-2">
                <a href="#" data-toggle="dropdown" class="text-dark text-decoration-none"><i class="fas fa-code fa-fw fa-lg text-muted mr-1"></i> https://siteqa.com</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><i class="fas fa-box fa-fw fa-lg text-muted mr-1"></i> <strong>QA:</strong> https://siteqa.com</a>
                    <a href="#" class="dropdown-item"><i class="fas fa-box-open fa-fw fa-lg text-muted mr-1"></i> <strong>Prod:</strong> https://siteproduction.com</a>
                </div>
            </div>
            <div class="ml-md-4 mt-md-0 mt-2"><i class="fas fa-server fa-fw fa-lg mr-1 text-muted"></i> {{ $project->ip }}</div>
            <div class="ml-md-4 mt-md-0 mt-2"><i class="fa fa-code-branch fa-fw fa-lg mr-1 text-muted"></i> Path Control Version</div>            
            <div class="ml-md-4 mt-md-0 mt-2"><i class="far fa-clock fa-fw fa-lg mr-1 text-muted"></i> 14 day(s)</div>
        </div>
    </div>
@endsection