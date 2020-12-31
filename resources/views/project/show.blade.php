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

        <div class="card">
            <div class="tab-content p-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Project</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->name }}</h5>
                            <h6 class="card-subtitle mb-3 text-muted">{{ $project->url }}</h6>
                            <p class="card-text mb-3">{{ $project->description }}</p>
                            <div>
                                <div>
                                    <p style="margin-bottom: 5px;">Security analysts</p>
                                    <div class="widget-user-list">
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-1.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-2.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-3.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-4.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-5.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-6.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-7.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link bg-gray-200 text-gray-500 fs-12px font-weight-600">+26</a></div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <p style="margin-bottom: 5px;">Developers</p>
                                    <div class="widget-user-list">
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-1.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-2.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-3.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-4.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-5.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-6.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link"><img src="{{ asset('assets/img/user/user-7.jpg') }}" alt="" /></a></div>
                                        <div class="widget-user-list-item"><a href="#" class="widget-user-list-link bg-gray-200 text-gray-500 fs-12px font-weight-600">+26</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection