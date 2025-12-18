@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Create Tab</h2>
                                <p class="text-right w-100 text-sm-center">

                                    <a href="{{route('home')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::model($tab,['route' => ['tabs.update',$tab->id], 'class'=>'pb-4', 'method' => 'put','enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group col-lg-12" id="selector">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Title</label>
                                                    <input type="text"
                                                           class="form-control @error('title') is-invalid @enderror"
                                                           name="title" value="{{$tab->title}}" placeholder="Title">
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
                                                    <label>Image</label>
                                                    <input type="file"
                                                           class="form-control @error('file') is-invalid @enderror"
                                                           name="file" value="" placeholder="Title">
                                                    <span class="text-muted">{{$tab->file}}</span>
                                                    @error('file')
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
                                                    <label>Link</label>
                                                    <input type="text"
                                                           class="form-control @error('link') is-invalid @enderror"
                                                           name="link" value="{{$tab->link}}" placeholder="Link">
                                                    @error('link')
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
                                                        <input type="radio" name="status" {{$tab->status ==1 ? 'checked' : ''}} value="1"> Active
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="status" {{$tab->status == 0 ? 'checked' : ''}} value="0"> Disabled
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row-editor  @error('text') is-invalid @enderror fadeInDown"
                                                     id="editor"
                                                     data-wow-duration="1000ms">
                                                    <label>Text</label>
                                                    <textarea
                                                        class="form-control editor @error('text') is-invalid @enderror"
                                                        id="editor"
                                                        name="text">{{$tab->text}}</textarea>
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

@stop
