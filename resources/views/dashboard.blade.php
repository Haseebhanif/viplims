@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Registered Users</h6>
                                            <h3>{{$total_users}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-users font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Packages Sold</h6>
                                            <h3>{{$total_user_package}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-users font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft"
                                 data-wow-duration="1000ms">
                                <div class="user-invoice-box card">
                                    <div class="media d-flex">
                                        <div class="media-body text-left user-invoice-title">
                                            <h6 class="text-muted">Subscribers</h6>
                                            <h3>{{$total_subscribers}}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fas fa-list font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft">
                                <div class="dsh-min-sec mt-2">
                                    <div class="container ">
                                        <div class="row ">
                                            <div class="title w-100 mb-0">
                                                <h5 class="pull-left mt-0 mb-0 d-inline-block">Users</h5>
                                            </div>
                                            <table id="admin-datatables-min"
                                                   class="datatable table-responsive table w-100 mt-3 nowrap admin-table-min-sec table-bordered table-dark">
                                                <thead>
                                                <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                                    {{--<th>Name</th>--}}
                                                    <th>Email</th>
                                                    <th>Company</th>
                                                    <th>Status</th>
                                                    <th>Role</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr class="wow fadeInDown" data-wow-duration="1200ms">
                                                       {{-- <td>{{$user->first_name.' '.$user->last_name}}</td>--}}
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->company}}</td>
                                                        <td>{!! $user->status == '1' ? '<i class="">Active</i>' : '<i class="">Deactive</i>'!!}</td>
                                                        <td>{{ucwords($user->user_type)}}</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft">
                                <div class="dsh-min-sec mt-2">
                                    <div class="container ">
                                        <div class="row">
                                            <div class="title  w-100 mb-3">
                                                <h5 class="pull-left mt-0 mb-0 d-inline-block">Packages</h5>
                                            </div>
                                            <table id="admin-datatables-min"
                                                   class="datatable table w-100  dt-responsive nowrap admin-table-min-sec table-bordered table-dark">
                                                <thead>
                                                <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                                    <th>Title</th>
                                                    <th>Price</th>
                                                    <th>Period</th>
                                                    <th>No. of Purchases</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($packages as $package)
                                                    <tr class="wow fadeInDown" data-wow-duration="1200ms">
                                                        <td>{{$package->title}}</td>
                                                        <td>{{$package->price}}</td>
                                                        <td>{{$package->period}}</td>
                                                        <td>{{\App\Models\UserPackage::GetCountUser($package->id)}}</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>

                                        </div>
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
