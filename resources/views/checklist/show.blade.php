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

        @if ($requirements->isEmpty())
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <img src="{{ asset('assets/img/empty.png') }}" alt="Empty">
                    <h3>This section seems empty</h3>
                    <p class="text-muted mb-2">
                        Plase create a new requirement for this checklist
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
                                    <input type="text" class="form-control pl-35px" placeholder="Filter checklists" />
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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">ID</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Description</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Security level 1</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Security level 2</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Security level 3</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requirements as $requirement)
                                        <tr>
                                            <td class="align-middle"><a href="{{ route('requirements.edit', $requirement->id) }}">{{ $requirement->chapter_level.'.'.$requirement->section_level.'.'.$requirement->description_level}}</a></td>
                                            <td class="align-middle">{{ $requirement->description }}</td>
                                            <td class="align-middle">@if ($requirement->is_security_level_1) <i class="fas fa-check"></i> @endif</td>
                                            <td class="align-middle">@if ($requirement->is_security_level_2) <i class="fas fa-check"></i> @endif</td>
                                            <td class="align-middle">@if ($requirement->is_security_level_3) <i class="fas fa-check"></i> @endif</td>
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