@extends('layout.default')

@section('title', 'New project')
    
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">PROJECTS</a></li>
                    <li class="breadcrumb-item active">NEW</li>
                </ul>
                <h1 class="page-header mb-0">New project</h1>
            </div>
        </div>

        <div class="card">
            <div class="tab-content p-4">
                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissable fade show">
                            <span class="close" data-dismiss="alert">x</span>
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::has('exception'))
                        <div class="alert alert-danger alert-dismissable fade show">
                            <span class="close" data-dismiss="alert">x</span>
                            {{ Session::get('exception') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                        @if ($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                        <small class="form-text text-muted">
                            Optional.
                        </small>

                        @if ($errors->has('description'))
                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="ip">IP</label>
                        <input type="text" class="form-control @error('ip') is-invalid @enderror" id="ip" name="ip">
                        <small class="form-text text-muted">
                            Optional.
                        </small>

                        @if ($errors->has('ip'))
                            <div class="invalid-feedback">{{ $errors->first('ip') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">URL</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url">
                        <small class="form-text text-muted">
                            Optional.
                        </small>

                        @if ($errors->has('url'))
                            <div class="invalid-feedback">{{ $errors->first('url') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i>Create project</button>    
                </form>
            </div>
        </div>
    </div>
@endsection