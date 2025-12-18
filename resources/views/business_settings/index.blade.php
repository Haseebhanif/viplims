@extends('layouts.dashboard')

@section('content')
    <div class="content" id="selector">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Business Settings</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('home')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    <table id="admin-datatables-min"
                                           class="datatable table w-100  dt-responsive nowrap admin-table-min-sec  table-dark">
                                        <thead>
                                        <tr class="wow fadeInDown" data-wow-duration="1000ms">
                                            <th>Setting</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($business_settings as $business_setting)
                                        <tr>
                                            <td>{{$business_setting->type}}</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" {{$business_setting->value ==1 ? 'checked' : ''}} value="1" onclick="update_setting('{{$business_setting->type}}')" name="{{$business_setting->type}}" class="custom-control-input" id="{{$business_setting->type}}">
                                                    <label class="custom-control-label" for="{{$business_setting->type}}"></label>
                                                </div>
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
        </div>
    </div>
@endsection
@section('script')
    <script>
      function update_setting(key) {
          if($('input[name="'+key+'"]').is(':checked')) {
              $.ajax({
                  url: '{{env('APP_URL').'/api/business_setting/'}}' + key,
                  data: {type:key,value:1},
                  method: 'POST',
                  success: function (response) {
                    console.log(response);
                  },
                  error: function (response) {
                      console.log(response);
                  }
              });
          }else
          {
              $.ajax({
                  url: '{{env('APP_URL').'/api/business_setting/'}}' + key,
                  data: {type:key,value:0},
                  method: 'POST',
                  success: function (response) {
                      console.log(response);
                  },
                  error: function (response) {
                      console.log(response);
                  }
              });
          }
      }
    </script>
@stop
