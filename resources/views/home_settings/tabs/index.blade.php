@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Tabs</h2>

                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('tabs.create')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Add
                                        Tab
                                    </a>
                                </p>
                            </div>

                            <table id="admin-datatables-min"
                                   class="datatable table w-100  dt-responsive nowrap admin-table-min-sec table-bordered table-dark">
                                <thead>
                                <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tabs as $tab)
                                    <tr class="wow fadeInDown" data-wow-duration="1200ms">
                                        <td>{{$tab->title}}</td>
                                        <td>{{$tab->status}}</td>
                                        <td>
                                            <ul class="action-icon-min">
                                                <li><a href="{{route('tabs.edit',$tab->id)}}" title="Edit"><i
                                                            class="fa fa-pencil-square-o"></i></a></li>
                                                <li><a href="{{route('tabs.destroy',$tab->id)}}" title="Delete"><i class="fa fa-trash"
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
