@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Create Custom Page</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('pages.index')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::open(['route' => 'pages.store', 'class'=>'pb-4', 'method' => 'post']) !!}
                                    <div class="form-group col-lg-12" id="selector">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Title <span class="text-danger">*</span></label>
                                                    <input type="text"
                                                           class="form-control @error('title') is-invalid @enderror"
                                                           name="title" value="{{old('title')}}" placeholder="Title" id="title"
                                                           autocomplete="off" required>
                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-4" v-if="checked==false">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Slug <span class="text-danger">*</span></label>
                                                    <input required id="slug" type="text" value="{{old('title')}}" name="slug" placeholder="Slug"
                                                           class="w-100 form-control @error('slug') is-invalid @enderror">
                                                   {{-- <small><code>http://domain.com/your-slug</code> Only a-z, numbers,
                                                        hypen allowed</small>--}}
                                                    @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4" v-if="checked==false">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Meta Title <span class="text-danger">*</span></label>
                                                    <input required type="text" name="meta_title" value="{{old('meta_title')}}" placeholder="Meta Title"
                                                           class="w-100 form-control @error('meta_title') is-invalid @enderror">
                                                    @error('meta_title')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-lg-8">
                                                <label class="form-check-label" for="is_parent">Attributes</label>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group wow w-100 fadeInDown mt-3 mb-0"
                                                             data-wow-duration="1000ms">
                                                            <label class="form-check-label" for="is_parent">
                                                                <input class=" form-check-inline" type="checkbox" id="is_parent"
                                                                       name="is_parent" {{old('is_parent') == 1 ? 'checked' : ''}}  value="1" v-model="checked">
                                                                Is Parent?
                                                            </label>
                                                            @error('is_parent')
                                                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group wow w-100 fadeInDown mt-3 mb-0"
                                                             data-wow-duration="1500ms">
                                                            <label class="form-check-label" for="show_bottom">
                                                                <input class=" form-check-inline @error('show_bottom') is-invalid @enderror" {{old('show_bottom') ==1 ? 'checked' : ''}} value="1" type="checkbox"
                                                                       name="show_bottom">
                                                                Show Bottom?
                                                            </label>
                                                            @error('sow_bottom')
                                                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Priority <span class="text-danger">*</span></label>
                                                    <input required type="number" name="priority" placeholder="Priority" value="{{old('priority')}}"
                                                           class="w-100 form-control @error('priority') is-invalid @enderror">
                                                    @error('priority')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" v-if="checked==false">
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Meta Description</label>
                                                    <input type="text"
                                                           class="form-control @error('meta_description') is-invalid @enderror"
                                                           name="meta_description" value="{{old('meta_description')}}" placeholder="Meta Description">
                                                    @error('meta_description')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">

                                                    <label>Parent <span class="text-danger">*</span></label>
                                                    <select required name="parent_page"
                                                            class="form-control w-100 @error('parent_page') is-invalid @enderror">
                                                        <option value="">Select Heading</option>
                                                        @if(!($pages)->isEmpty())
                                                            @foreach($pages as $page)
                                                                <option value="{{$page->id}}" {{old('parent_page') == $page->id ? 'selected' : ''}}>{{$page->title}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @error('parent_page')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row" v-if="checked==false">
                                            <div class="col-lg-12">
                                                <div class="row-editor  @error('page_content') is-invalid @enderror fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Content</label>
                                                    <textarea
                                                        class="form-control @error('page_content') is-invalid @enderror"
                                                        id="editor"
                                                        name="page_content">{{old('page_content')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3" v-if="checked==false">

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
    <script>
        var app = new Vue({
            el: '#selector',
            data: {
                checked: false,
            }
        });
        $('#is_parent').on('change',function () {
            if ($(this).not(':checked').length) {
                SUNEDITOR.create('editor', {
                    display: 'block',
                    width: '100%',
                    height: '500px',
                    popupDisplay: 'full',
                    charCounter: true,
                    charCounterLabel: 'Characters :',
                    imageGalleryUrl: 'https://etyswjpn79.execute-api.ap-northeast-1.amazonaws.com/suneditor-demo',
                    buttonList: [
                        // default
                        ['undo', 'redo'],
                        ['font', 'fontSize', 'formatBlock'],
                        ['paragraphStyle', 'blockquote'],
                        ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                        ['fontColor', 'hiliteColor', 'textStyle'],
                        ['removeFormat'],
                        ['outdent', 'indent'],
                        ['align', 'horizontalRule', 'list', 'lineHeight'],
                        ['table', 'link', 'image', 'video', 'audio', 'math'],
                        ['imageGallery'],
                        ['fullScreen', 'showBlocks', 'codeView'],
                        ['preview', 'print'],
                        ['save', 'template'],
                        // (min-width: 1565)
                        ['%1565', [
                            ['undo', 'redo'],
                            ['font', 'fontSize', 'formatBlock'],
                            ['paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                            ['fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['table', 'link', 'image', 'video', 'audio', 'math'],
                            ['imageGallery'],
                            ['fullScreen', 'showBlocks', 'codeView'],
                            ['-right', ':i-More Misc-default.more_vertical', 'preview', 'print', 'save', 'template']
                        ]],
                        // (min-width: 1455)
                        ['%1455', [
                            ['undo', 'redo'],
                            ['font', 'fontSize', 'formatBlock'],
                            ['paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                            ['fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['table', 'link', 'image', 'video', 'audio', 'math'],
                            ['imageGallery'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']
                        ]],
                        // (min-width: 1326)
                        ['%1326', [
                            ['undo', 'redo'],
                            ['font', 'fontSize', 'formatBlock'],
                            ['paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                            ['fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template'],
                            ['-right', ':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'math', 'imageGallery']
                        ]],
                        // (min-width: 1123)
                        ['%1123', [
                            ['undo', 'redo'],
                            [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                            ['fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template'],
                            ['-right', ':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'math', 'imageGallery']
                        ]],
                        // (min-width: 817)
                        ['%817', [
                            ['undo', 'redo'],
                            [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                            ['bold', 'underline', 'italic', 'strike'],
                            [':t-More Text-default.more_text', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template'],
                            ['-right', ':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'math', 'imageGallery']
                        ]],
                        // (min-width: 673)
                        ['%673', [
                            ['undo', 'redo'],
                            [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                            [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            ['align', 'horizontalRule', 'list', 'lineHeight'],
                            [':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'math', 'imageGallery'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']
                        ]],
                        // (min-width: 525)
                        ['%525', [
                            ['undo', 'redo'],
                            [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                            [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle'],
                            ['removeFormat'],
                            ['outdent', 'indent'],
                            [':e-More Line-default.more_horizontal', 'align', 'horizontalRule', 'list', 'lineHeight'],
                            [':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'math', 'imageGallery'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']
                        ]],
                        // (min-width: 420)
                        ['%420', [
                            ['undo', 'redo'],
                            [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                            [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle', 'removeFormat'],
                            [':e-More Line-default.more_horizontal', 'outdent', 'indent', 'align', 'horizontalRule', 'list', 'lineHeight'],
                            [':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'math', 'imageGallery'],
                            ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']
                        ]]
                    ],
                    placeholder: 'Start typing something...',
                    templates: [
                        {
                            name: 'Template-1',
                            html: '<p>HTML source1</p>'
                        },
                        {
                            name: 'Template-2',
                            html: '<p>HTML source2</p>'
                        }
                    ],
                    codeMirror: CodeMirror,
                    katex: katex
                });
            }
        });

        $("#title").keyup(function(){
            var Title = $(this).val();
            var slug = Title.toLowerCase().replace(/ /g,'-').replace(/[-_+]+/g, '-').replace(/[^\w-]+/g,'');
            $('#slug').val(slug);
        });
        $("#slug").keyup(function(){
            var Title = $(this).val();
            var slug = Title.toLowerCase().replace(/ /g,'-').replace(/[-_+]+/g, '-').replace(/[^\w-]+/g,'');
            $('#slug').val(slug);
        });

    </script>
@stop
