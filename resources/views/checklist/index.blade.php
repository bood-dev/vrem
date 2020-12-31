@extends('layout.default')

@section('title', 'Checklists')

@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('checklists.index') }}">CHECKLISTS</a></li>
                </ul>
                <h1 class="page-header mb-0">Checklists</h1>
            </div>
            
            <div class="ml-auto">
                <a href="{{ route('checklists.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Create new checklist</a>
            </div>
        </div>

        @if ($checklists->isEmpty())
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <img src="{{ asset('assets/img/empty.png') }}" alt="Empty">
                    <h3>This section seems empty</h3>
                    <p class="text-muted mb-2">
                        Plase create a new checklist
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
                                    <input type="text" class="form-control pl-35px" placeholder="Filter orders" />
                                    <div class="input-group-prepend position-absolute top-0 bottom-0" style="z-index: 1020;">
                                        <span class="input-group-text bg-none border-0 pr-0"><i class="fa fa-search opacity-5"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="d-none d-md-inline">Payment Status</span><span class="d-inline d-md-none"><i class="fa fa-credit-card"></i></span> &nbsp;</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="d-none d-md-inline">Fulfillment status</span><span class="d-inline d-md-none"><i class="fa fa-check"></i></span></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <!-- END input-group -->
                        
                        <!-- BEGIN table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2"></th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Order</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Date</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Customer</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Total</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Payment status</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Fulfillment status</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Items</th>
                                        <th class="border-bottom-0 border-top-0 pt-0 pb-2">Delivery method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="width-10 align-middle">
                                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                <input type="checkbox" class="custom-control-input" id="product1">
                                                <label class="custom-control-label" for="product1"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle"><a href="#">#1950</a></td>
                                        <td class="align-middle">Thu 26 Nov, 12:23pm</td>
                                        <td class="align-middle">Amanda Lee</td>
                                        <td>$398.00</td>
                                        <td class="py-1 align-middle"><span class="badge bg-gray-100 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-gray-500 fs-9px fa-fw mr-5px"></i> Paid</span></td>
                                        <td class="align-middle"><span class="badge bg-gray-100 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-gray-500 fs-9px fa-fw mr-5px"></i> Fulfilled</span></td>
                                        <td class="align-middle">3 items</td>
                                        <td class="align-middle">Free shipping</td>
                                    </tr>
                                    <tr>
                                        <td class="width-10 align-middle">
                                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                <input type="checkbox" class="custom-control-input" id="product3">
                                                <label class="custom-control-label" for="product3"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle"><a href="#">#1948</a></td>
                                        <td class="align-middle">Thu 25 Nov, 11:54pm</td>
                                        <td class="align-middle">John Doe</td>
                                        <td>$195.00</td>
                                        <td class="py-1 align-middle"><span class="badge bg-orange-transparent-2 text-orange px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw mr-5px"></i> Pending</span></td>
                                        <td class="align-middle"><span class="badge bg-yellow-transparent-5 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw mr-5px"></i> Unfulfilled</span></td>
                                        <td class="align-middle">2 items</td>
                                        <td class="align-middle">Express</td>
                                    </tr>
                                    <tr>
                                        <td class="width-10 align-middle">
                                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                <input type="checkbox" class="custom-control-input" id="product6">
                                                <label class="custom-control-label" for="product6"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle"><a href="#">#1945</a></td>
                                        <td class="align-middle">Thu 24 Nov, 2:43pm</td>
                                        <td class="align-middle">Lelouch Wong</td>
                                        <td>$900.00</td>
                                        <td class="py-1 align-middle"><span class="badge bg-gray-100 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-gray-500 fs-9px fa-fw mr-5px"></i> Paid</span></td>
                                        <td class="align-middle"><span class="badge bg-primary-transparent-2 text-primary px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-primary-transparent-8 fs-9px fa-fw mr-5px"></i> Ready for pickup</span></td>
                                        <td class="align-middle">2 items</td>
                                        <td class="align-middle">Local pickup</td>
                                    </tr>
                                    <tr>
                                        <td class="width-10 align-middle">
                                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                <input type="checkbox" class="custom-control-input" id="product8">
                                                <label class="custom-control-label" for="product8"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle"><a href="#">#1943</a></td>
                                        <td class="align-middle">Thu 23 Nov, 11:59am</td>
                                        <td class="align-middle">Richard Leong</td>
                                        <td>$195.00</td>
                                        <td class="py-1 align-middle"><span class="badge bg-gray-100 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-gray-500 fs-9px fa-fw mr-5px"></i> Partially refunded</span></td>
                                        <td class="align-middle"><span class="badge bg-danger-transparent-3 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw mr-5px text-danger-transparent-8"></i> Partially fulfilled</span></td>
                                        <td class="align-middle">2 items</td>
                                        <td class="align-middle">Express</td>
                                    </tr>
                                    <tr>
                                        <td class="width-10 align-middle">
                                            <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                <input type="checkbox" class="custom-control-input" id="product9">
                                                <label class="custom-control-label" for="product9"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle"><a href="#">#1942</a></td>
                                        <td class="align-middle">Thu 22 Nov, 8:12am</td>
                                        <td class="align-middle">Clement Tang</td>
                                        <td>$195.00</td>
                                        <td class="py-1 align-middle"><span class="badge bg-gray-100 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-gray-500 fs-9px fa-fw mr-5px"></i> Paid</span></td>
                                        <td class="align-middle"><span class="badge bg-gray-100 text-black-transparent-5 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle text-gray-500 fs-9px fa-fw mr-5px"></i> Fulfilled</span></td>
                                        <td class="align-middle">1 item</td>
                                        <td class="align-middle">Express</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END table -->
                        
                        <div class="d-md-flex align-items-center">
                            <div class="mr-md-auto text-md-left text-center mb-2 mb-md-0">
                                Showing 1 to 10 of 57 entries
                            </div>
                            <ul class="pagination mb-0 justify-content-center">
                                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection