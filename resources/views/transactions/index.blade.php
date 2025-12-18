@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Transactions of {{$subscription_id}}</h2>
                            </div>

                            <table id="admin-datatables-min"
                                   class="datatable table w-100  dt-responsive nowrap admin-table-min-sec table-bordered table-dark">
                                <thead>
                                <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                    <th>ID</th>
                                    <th>Payer Name</th>
                                    <th>Payer Email</th>
                                    <th>Status</th>
                                    <th>Net Amount</th>
                                    <th>Fee Amount</th>
                                    <th>Gross Amount</th>
                                    <th>Transaction Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($transactions->transactions))
                                @foreach($transactions->transactions as $transaction)
                                    <tr class="wow fadeInDown" data-wow-duration="1200ms">
                                        <td>{{$transaction->id}}</td>
                                        <td>{{$transaction->payer_name->given_name.' '.$transaction->payer_name->surname}}</td>
                                        <td>{{$transaction->payer_email}}</td>
                                        <td>{{$transaction->status}}</td>
                                        <td>&dollar;{{$transaction->amount_with_breakdown->net_amount->value}}</td>
                                        <td>&dollar;{{$transaction->amount_with_breakdown->fee_amount->value}}</td>
                                        <td>&dollar;{{$transaction->amount_with_breakdown->gross_amount->value}}</td>
                                        <td>{{\Carbon\Carbon::parse($transaction->time)->format('M d, Y')}}</td>
                                    </tr>
                                @endforeach
                                    @endif

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
