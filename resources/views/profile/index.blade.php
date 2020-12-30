@extends('layout.default')

@section('title', 'Profile')

@push('scripts')
    
@endpush

@section('content')
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN container -->
        <div class="container">
            <!-- BEGIN row -->
            <div class="row justify-content-center">
                <!-- BEGIN col-10 -->
                <div class="col-xl-10">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-9 -->
                        <div class="col-xl-9">
                            <!-- BEGIN #general -->
                            <div id="general" class="mb-5">
                                <h4><i class="far fa-user fa-fw"></i> General</h4>
                                <p>View and update your general account information and settings.</p>
                                <div class="card">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div>Name</div>
                                                <div class="text-gray-700">{{ $user->name }}</div>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center">
                                            <div class="flex-fill">
                                                <div>E-mail</div>
                                                <div class="text-gray-700">{{ $user->email }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END #general -->

                            <!-- BEGIN #password -->
                            <div id="security" class="mb-5">
                                <h4><i class="fas fa-shield-alt"></i> Security</h4>
                                <p>Configure the security settings for your account.</p>
                                <div class="card">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex align-items-center">
                                            <div class="flex-fill">
                                                <form action="{{ route('profile.change_password') }}" method="POST">
                                                    @csrf
                                                    @if (Session::has('success'))
                                                        <div class="alert alert-success alert-dismissable fade show">
                                                            <span class="close" data-dismiss="alert">x</span>
                                                            {{ Session::get('success') }}
                                                        </div>
                                                    @endif

                                                    <h5>Password</h5>
                                                    <div class="form-group">
                                                        <label for="currentPassword">Current password</label>
                                                        <input type="password" class="form-control @error('currentPassword') is-invalid @enderror" id="currentPassword" name="currentPassword" placeholder="********">

                                                        @if ($errors->has('currentPassword'))
                                                            <div class="invalid-feedback">{{ $errors->first('currentPassword') }}</div>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="newPassword">New password</label>
                                                        <input type="password" class="form-control @error('newPassword') is-invalid @enderror" id="newPassword" name="newPassword">
                                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                                            Your password must be at least 8 characters.
                                                        </small>

                                                        @if ($errors->has('newPassword'))
                                                            <div class="invalid-feedback">{{ $errors->first('newPassword') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="verifyPassword">Verify password</label>
                                                        <input type="password" class="form-control @error('verifyPassword') is-invalid @enderror" id="verifyPassword" name="verifyPassword">

                                                        @if ($errors->has('verifyPassword'))
                                                            <div class="invalid-feedback">{{ $errors->first('verifyPassword') }}</div>
                                                        @endif
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Change password</button>    
                                                </form>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex align-items-center">
                                            <div class="flex-fill">
                                                <h5>Two factor authentication</h5>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" disabled>
                                                    <label class="custom-control-label" for="customSwitch1">Disabled</label>
                                                </div>
                                                <div class="text-gray-700 d-flex align-items-center">
                                                    <i class="fa fa-circle fs-8px fa-fw text-muted mr-1"></i> Coming soon...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END #password -->
                        </div>
                        <!-- END col-9-->
                        <!-- BEGIN col-3 -->
                        <div class="col-xl-3">
                            <!-- BEGIN #sidebar-bootstrap -->
                            <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                                <nav class="nav">
                                    <a class="nav-link" href="#general" data-toggle="scroll-to">General</a>
                                    <a class="nav-link" href="#security" data-toggle="scroll-to">Security</a>
                                </nav>
                            </nav>
                            <!-- END #sidebar-bootstrap -->
                        </div>
                        <!-- END col-3 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END col-10 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #content -->
@endsection