@extends('layout.default')

@section('title', 'Home')

@section('content')
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <h1 class="page-header mb-3">
            Hi, {{ Auth::user()->name }}. <small>here's what's happening with your applications today.</small>
        </h1>

        <!-- BEGIN row -->
        <div class="row">
            <!-- BEGIN col-6 -->
            <div class="col-xl-6">
                <!-- BEGIN card -->
                <div class="card text-white-transparent-7 mb-3 overflow-hidden">
                    <!-- BEGIN card-img-overlay -->
                    <div class="card-img-overlay d-block d-lg-none bg-blue rounded"></div>
                    <!-- END card-img-overlay -->

                    <!-- BEGIN card-img-overlay -->
                    <div class="card-img-overlay d-none d-md-block bg-blue rounded" style="background-image: url(assets/img/bg/wave-bg.png); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;"></div>
                    <!-- END card-img-overlay -->

                    <!-- BEGIN card-img-overlay -->
                    <div class="card-img-overlay d-none d-md-block bottom-0 top-auto">
                        <div class="row">
                            <div class="col-md-8 col-xl-6"></div>
                            <div class="col-md-4 col-xl-6 mb-n2">
                                <img src="{{ asset('assets/img/dashboard.svg') }}" alt="Dashboard" class="d-block ml-n3 mb-5" style="max-height: 310px" />
                            </div>
                        </div>
                    </div>
                    <!-- END card-img-overlay -->

                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">
                        <!-- BEGIN row -->
                        <div class="row">
                            <!-- BEGIN col-8 -->
                            <div class="col-md-8">
                                <!-- stat-top -->
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h5 class="text-white-transparent-8 mb-3">Weekly Earning</h5>
                                        <h3 class="text-white mt-n1 mb-1">$2,999.80</h3>
                                        <p class="mb-1 text-white-transparent-6 text-truncate">
                                            <i class="fa fa-caret-up"></i> <b>32%</b> increase compare to last week
                                        </p>
                                    </div>
                                </div>

                                <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                                <!-- stat-bottom -->
                                <div class="row">
                                    <div class="col-6 col-lg-5">
                                        <div class="mt-1">
                                            <i class="fa fa-fw fa-shopping-bag fs-28px text-black-transparent-5"></i>
                                        </div>
                                        <div class="mt-1">
                                            <div>Store Sales</div>
                                            <div class="font-weight-600 text-white">$1,629.80</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-5">
                                        <div class="mt-1">
                                            <i class="fa fa-fw fa-retweet fs-28px text-black-transparent-5"></i>
                                        </div>
                                        <div class="mt-1">
                                            <div>Referral Sales</div>
                                            <div class="font-weight-600 text-white">$700.00</div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                                <div class="mt-3 mb-2">
                                    <a href="#" class="btn btn-yellow btn-rounded btn-sm pl-5 pr-5 pt-2 pb-2 fs-14px font-weight-600"><i class="fa fa-wallet mr-2 ml-n2"></i> Withdraw money</a>
                                </div>
                                <p class="fs-12px">
                                    It usually takes 3-5 business days for transferring the earning to your bank account.
                                </p>
                            </div>
                            <!-- END col-8 -->

                            <!-- BEGIN col-4 -->
                            <div class="col-md-4 d-none d-md-block" style="min-height: 380px;"></div>
                            <!-- END col-4 -->
                        </div>
                        <!-- END row -->
                    </div>
                    <!-- END card-body -->
                </div>
                <!-- END card -->
            </div>
            <!-- END col-6 -->

            <!-- BEGIN col-6 -->
            <div class="col-xl-6">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-sm-6">
                        <!-- BEGIN card -->
                        <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange" style="min-height: 202px;">
                            <!-- BEGIN card-img-overlay -->
                            <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                                <img src="{{ asset('assets/img/icon/order.svg') }}" alt="Order" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                            </div>
                            <!-- END card-img-overlay -->

                            <!-- BEGIN card-body -->
                            <div class="card-body position-relative">
                                <h5 class="text-white-transparent-8 mb-3 fs-16px">New Orders</h5>
                                <h3 class="text-white mt-n1">56</h3>
                                <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                    <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
                                </div>
                                <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 16% increase <br />compare to last week</div>
                                <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                            </div>
                            <!-- BEGIN card-body -->
                        </div>
                        <!-- END card -->

                        <!-- BEGIN card -->
                        <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal" style="min-height: 202px;">
                            <!-- BEGIN card-img-overlay -->
                            <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                                <img src="{{ asset('assets/img/icon/visitor.svg') }}" alt="Visitor" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                            </div>
                            <!-- END card-img-overlay -->

                            <!-- BEGIN card-body -->
                            <div class="card-body position-relative">
                                <h5 class="text-white-transparent-8 mb-3 fs-16px">Page Visitors</h5>
                                <h3 class="text-white mt-n1">60.5k</h3>
                                <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                    <div class="progrss-bar progress-bar-striped bg-white" style="width: 50%"></div>
                                </div>
                                <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 33% increase <br />compare to last week</div>
                                <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-6 -->

                    <!-- BEGIN col-6 -->
                    <div class="col-sm-6">
                        <!-- BEGIN card -->
                        <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink" style="min-height: 202px;">
                            <!-- BEGIN card-img-overlay -->
                            <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                                <img src="{{ asset('assets/img/icon/email.svg') }}" alt="Email" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                            </div>
                            <!-- END card-img-overlay -->

                            <!-- BEGIN card-body -->
                            <div class="card-body position-relative">
                                <h5 class="text-white-transparent-8 mb-3 fs-16px">Unread email</h5>
                                <h3 class="text-white mt-n1">30</h3>
                                <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                    <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
                                </div>
                                <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-down"></i> 5% decrease <br />compare to last week</div>
                                <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->

                        <!-- BEGIN card -->
                        <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo" style="min-height: 202px;">
                            <!-- BEGIN card-img-overlay -->
                            <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                                <img src="{{ asset('assets/img/icon/browser.svg') }}" alt="Browser" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                            </div>
                            <!-- end card-img-overlay -->

                            <!-- BEGIN card-body -->
                            <div class="card-body position-relative">
                                <h5 class="text-white-transparent-8 mb-3 fs-16px">Page Views</h5>
                                <h3 class="text-white mt-n1">320.4k</h3>
                                <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                    <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
                                </div>
                                <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 20% increase <br />compare to last week</div>
                                <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- BEGIN col-6 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END col-6 -->
        </div>
        <!-- END row -->

        <!-- BEGIN row -->
        <div class="row">
            <!-- BEGIN col-6 -->
            <div class="col-xl-6">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-6">
                        <!-- BEGIN card -->
                        <div class="card mb-3">
                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1">Total Users</h5>
                                        <div>Store user account registration</div>
                                    </div>
                                    <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                                </div>

                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-1">184,593</h3>
                                        <div class="text-success font-weight-600 fs-13px">
                                            <i class="fa fa-caret-up"></i> +3.59%
                                        </div>
                                    </div>
                                    <div class="width-50 height-50 bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa fa-user fa-lg text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->

                        <!-- BEGIN card -->
                        <div class="card mb-3">
                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1">Social Media</h5>
                                        <div>Facebook page stats overview</div>
                                    </div>
                                    <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                                </div>

                                <!-- BEGIN row -->
                                <div class="row">
                                    <!-- BEGIN col-6 -->
                                    <div class="col-6 text-center">
                                        <div class="width-50 height-50 bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center mb-2 ml-auto mr-auto">
                                            <i class="fa fa-thumbs-up fa-lg text-primary"></i>
                                        </div>
                                        <div class="font-weight-600 text-dark">306.5k</div>
                                        <div class="fs-13px">Likes</div>
                                    </div>
                                    <!-- END col-6 -->

                                    <!-- BEGIN col-6 -->
                                    <div class="col-6 text-center">
                                        <div class="width-50 height-50 bg-primary-transparent-2 rounded-circle d-flex align-items-center justify-content-center mb-2 ml-auto mr-auto">
                                            <i class="fa fa-comments fa-lg text-primary"></i>
                                        </div>
                                        <div class="font-weight-600 text-dark">27.5k</div>
                                        <div class="fs-13px">Comments</div>
                                    </div>
                                    <!-- END col-6 -->
                                </div>
                                <!-- END row -->
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-6 -->

                    <!-- BEGIN col-6 -->
                    <div class="col-6">
                        <!-- BEGIN card -->
                        <div class="card mb-3">
                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1">Vulnerabilities</h5>
                                        <div class="fs-13px">Traffic source and category</div>
                                    </div>
                                    <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                                </div>

                                <div class="mb-4">
                                    <h3 class="mb-1">54</h3>
                                    <div class="text-success fs-13px font-weight-600">
                                        <i class="fa fa-caret-up"></i> +20.9%
                                    </div>
                                </div>

                                <div class="progress mb-4" style="height: 10px;">
                                    <div class="progress-bar" style="width: 42.66%"></div>
                                    <div class="progress-bar bg-teal" style="width: 36.80%"></div>
                                    <div class="progress-bar bg-yellow" style="width: 15.34%"></div>
                                    <div class="progress-bar bg-pink" style="width: 9.20%"></div>
                                    <div class="progress-bar bg-gray-200" style="width: 5.00%"></div>
                                </div>

                                <div class="fs-13px">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <i class="fa fa-circle fs-9px fa-fw text-primary mr-2"></i> Informational
                                        </div>
                                        <div class="font-weight-600 text-dark">42.66%</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <i class="fa fa-circle fs-9px fa-fw text-teal mr-2"></i> Low
                                        </div>
                                        <div class="font-weight-600 text-dark">36.80%</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <i class="fa fa-circle fs-9px fa-fw text-warning mr-2"></i> Medium
                                        </div>
                                        <div class="font-weight-600 text-dark">15.34%</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <i class="fa fa-circle fs-9px fa-fw text-danger mr-2"></i> High
                                        </div>
                                        <div class="font-weight-600 text-dark">9.20%</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-15px">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <i class="fa fa-circle fs-9px fa-fw text-gray-200 mr-2"></i> Others
                                        </div>
                                        <div class="font-weight-600 text-dark">5.00%</div>
                                    </div>
                                </div>
                            </div>
                            <!-- END card-body -->
                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END col-6 -->

            <!-- BEGIN col-6 -->
            <div class="col-xl-6">
                <!-- BEGIN card -->
                <div class="card mb-3">
                    <!-- BEGIN card-body -->
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Sales Analytics</h5>
                                <div class="fs-13px">Weekly sales performance chart</div>
                            </div>
                            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
                        </div>
                        <div id="chart"></div>
                    </div>
                    <!-- END card-body -->
                </div>
                <!-- END card -->
            </div>
            <!-- END col-6 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END #content -->
@endsection
