@extends('layout.default')

@section('title', 'New requirement')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('checklists.index') }}">CHECKLISTS</a></li>
                    <li class="breadcrumb-item"><a href="#">CHECKLIST NAME</a></li>
                    <li class="breadcrumb-item active">NEW</li>
                </ul>
                <h1 class="page-header mb-0">New requirement</h1>
            </div>
        </div>

        <div class="card">
            <div class="tab-content p-4">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                    @if ($errors->has('name'))
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i>Create requirement</button>    

            </div>
        </div>
    </div>
@endsection