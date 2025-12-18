@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Subscriptions</h2>
                            </div>

                            <table id="admin-datatables-min"
                                   class="datatable table w-100  dt-responsive nowrap admin-table-min-sec table-bordered table-dark">
                                <thead>
                                <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Period</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscriptions as $subscription)
                                    <tr class="wow fadeInDown" data-wow-duration="1200ms">
                                        <td>{{$subscription->user->first_name.' '.$subscription->user->last_name}}</td>
                                        <td>{{$subscription->package->title}}</td>
                                        <td>&dollar;{{$subscription->package->price}}</td>
                                        <td>
                                            <ul class="action-icon-min">
                                                <li><a href="{{route('subscription.destroy',$subscription->id)}}" title="Delete"><i class="fa fa-trash"
                                                                                             aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="{{route('subscription.show',$subscription->id)}}" title="View"><i class="fa fa-eye"
                                                                                           aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </td>
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
@endsection

@section('script')

@endsection
