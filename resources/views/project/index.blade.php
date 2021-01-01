@extends('layout.default')

@section('title', 'Projects')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">PROJECTS</a></li>
                </ul>
                <h1 class="page-header mb-0">Projects</h1>
            </div>
            
            <div class="ml-auto">
                <a href="{{ route('projects.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Create new project</a>
            </div>
        </div>

        @if ($projects->isEmpty())
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <img src="{{ asset('assets/img/empty.png') }}" alt="Empty">
                    <h3>This section seems empty</h3>
                    <p class="text-muted mb-2">
                        Plase create a new project
                    </p>
                </div>
            </div>
        @else
            <div class="card">
                <div class="tab-content p-4">
                    <div class="tab-pane fade show active" id="allTab">
                        <!-- BEGIN input-group -->
                        <div class="input-group mb-4">
                            <div class="flex-fill position-relative">
                                <div class="input-group">
                                    <input type="text" class="form-control pl-35px" placeholder="Filter projects" />
                                    <div class="input-group-prepend position-absolute top-0 bottom-0" style="z-index: 1020;">
                                        <span class="input-group-text bg-none border-0 pr-0"><i class="fa fa-search opacity-5"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-default" type="button" data-toggle="dropdown"><span class="d-none d-md-inline">Search</span><span class="d-inline d-md-none"><i class="fa fa-credit-card"></i></span> &nbsp;</button>
                            </div>
                        </div>
                        <!-- END input-group -->
                        
                        <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Name</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Project type</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Date</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td class="align-middle"><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></td>
                                            <td class="align-middle">Web Application</td>
                                            <td class="align-middle">{{ $project->created_at }}</td>
                                            <td class="align-middle"><span class="badge bg-yellow-transparent-5 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw mr-5px"></i> In progress</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END table -->
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
    