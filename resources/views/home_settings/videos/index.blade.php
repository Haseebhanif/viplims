@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Update Video</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('home')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::model($video,['route' => ['videos.update',$video->id], 'class'=>'pb-4', 'method' => 'put','enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group col-lg-12" id="selector">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Title</label>
                                                    <input type="text"
                                                           class="form-control @error('title') is-invalid @enderror"
                                                           name="title" value="{{$video->title}}" placeholder="Title">
                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Video Type</label>
                                                    <select name="video_type" v-model="select"
                                                            class="form-control @error('video_type') is-invalid @enderror">
                                                        <option value="youtube" {{$video->video_type=='youtube' ? 'selected' : ''}} >Youtube</option>
                                                        <option value="dailymotion" {{$video->video_type=='dailymotion' ? 'selected' : ''}}>Dailymotion</option>
                                                        <option value="self_video" {{$video->video_type=='self_video' ? 'selected' : ''}}>Self</option>
                                                    </select>
                                                    @error('video_type')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" v-if="select==='self_video'">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Video</label>
                                                    <input type="file"
                                                           class="form-control @error('file') is-invalid @enderror"
                                                           name="file" placeholder="Video">
                                                    @error('file')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" v-if="select!=='self_video'">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>URL <small v-if="select==='youtube'">For youtube only add <span class="text-danger">Video ID</span></small></label>
                                                    <input type="text"
                                                           class="form-control @error('url') is-invalid @enderror"
                                                           name="url" value="{{$video->url}}" placeholder="URL">
                                                    @error('url')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row-editor  @error('text') is-invalid @enderror fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Status </label>
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="status"
                                                               {{$video->status ==1 ? 'checked' : ''}} value="1"> Active
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="status"
                                                               {{$video->status ==0 ? 'checked' : ''}} value="0">
                                                        Disabled
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row-editor  @error('text') is-invalid @enderror fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Text</label>
                                                    <textarea
                                                        class="form-control editor @error('text') is-invalid @enderror"
                                                        id="editor"
                                                        name="text">{{$video->text}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit"
                                                class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                                data-wow-duration="1000ms">Submit
                                        </button>
                                    </div>
                                    {!! Form::close() !!}
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
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#selector',
            data: {
                select: "self_video"

            }
        });
    </script>
@stop
