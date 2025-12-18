@php
    $generalsetting = \App\Models\GeneralSetting::first();
@endphp
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    @yield('css')
    <link href="{{asset('css/suneditor.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/suneditor.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/lib/codemirror.min.css">
    <!-- KaTeX -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.css">
    <style>
        .tab {
            overflow: hidden;
            color: #f4b124;
            font-weight: bold;
            border-bottom: 2px solid #f4b124;
            border-radius: 2px;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: transparent;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 35px;
            transition: 0.3s;
            font-size: 16px;
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            margin: 0;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            color: #f5f5f5;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            color: #fff;
            background-color: #f4b124;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
        }

        /* inline editor */
        .inline-margin {
            margin-top: 10px;
        }

        @media (max-width: 560px) {
            .tab button {
                padding: 12px 24px;
            }
        }
        @media (max-width: 475px) {
            .tab button {
                padding: 12px 16px;
            }
        }
        @media (max-width: 407px) {
            .tab button {
                padding: 12px 10px;
            }
        }
        @media (max-width: 380px) {
            .tab button {
                padding: 12px 8px;
            }
        }
    </style>

</head>
<body>

<div class="wrapper">
    @include('partials.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.header')
        @yield('content')

        @include('partials.footer')
    </div>
</div>

@include('partials.footer_script')

@yield('script')

<script>
    @foreach (session('flash_notification', collect())->toArray() as $message)
    toastr.{!! $message['level'] !!}("{{ $message['message'] }}");
    @endforeach
    @foreach ($errors->all() as $message)
    toastr.error("{{ $message }}");
    @endforeach
    @if(session()->has('error'))
    toastr.error("{{ session()->get('error') }}");
    @endif
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
    $('.sun-editor-editable').on('focus',function () {
        $('#editor').html($('.sun-editor-editable').html())
    });
    $('.sun-editor-editable').on('keyup',function () {
        $('#editor').html($('.sun-editor-editable').html())
    });
</script>


</body>
</html>
