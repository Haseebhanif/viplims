@php
    $generalsetting = \App\Models\GeneralSetting::first();
    $footer_headings = \App\Models\Page::all()->where('show_bottom',1)->where('is_heading',1)->sortBy('priority');
@endphp

@if(($footer_headings->isNotEmpty()))
    <section class="footer-section">
        <footer>
            <div class="container">
                <div class="row">
                    @foreach($footer_headings as $key=>$footer_heading)

                        <div class="col-md-2 col-sm-6 pl-3 pl-lg-0 mt-3 mt-lg-0 col-xs-12 wow fadeInLeft" data-wow-duration="1500ms">

                            <span>{{$footer_heading->title}}</span>
                            @php
                                $footer_links= \App\Models\Page::all()->where('show_bottom',1)->where('is_heading',0)->where('parent_page',$footer_heading->id)->sortBy('priority');
                            @endphp
                            <ul>
                                @foreach($footer_links as $footer_link)
                                    <li><a href="{{route('custom-pages.show_custom_page',$footer_link->slug)}}">{{$footer_link->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    @endforeach
                </div>
            </div>
        </footer>
    </section>
@endif
<section class="footer-section-sub">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-5 pl-0 col-md-5 col-sm-6 col-12 wow fadeInLeft" data-wow-duration="1500ms">
                        <p class="mt-3 mb-0">Subscribe to our newsletter.</p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-12 wow fadeInLeft pr-0  pr-sm-3"
                         data-wow-duration="1500ms">
                        <div class="email-field-sub">
                            {!! Form::open(['route' => 'subscribers.store', 'method' => 'post']) !!}

                            <input type="email" class="email" name="email" placeholder="What's your email?">
                            <button class="form-submit-btn" type="submit">Subscribe</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 pr-0 wow fadeInRight" data-wow-duration="1500ms">
                <ul class="footer-social">

                    @if($generalsetting->twitter !=null)
                        <li><a href="{{$generalsetting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    @endif
                    @if($generalsetting->facebook !=null)
                        <li><a href="{{$generalsetting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if($generalsetting->linkedin !=null)
                        <li><a href="{{$generalsetting->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                    @if($generalsetting->youtube !=null)
                        <li><a href="{{$generalsetting->youtube}}"><i class="fa fa-youtube"></i></a></li>
                    @endif
                    @if($generalsetting->instagram !=null)
                        <li><a href="{{$generalsetting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    @endif
                    @if($generalsetting->google_plus !=null)
                        <li><a href="{{$generalsetting->google_plus}}"><i class="fa fa-google-plus-g"></i></a></li>
                    @endif
                </ul>
            </div>
            <hr>
            <div class="footer-sub-nav">
                <ul class="pl-sm-3 pr-sm-3 pl-lg-0">
                    <li><a href="{{route('terms_conditions')}}">Terms & Conditions</a></li>
                    <li><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
                    <li><a href="javascript:;">Cookie Policy</a></li>
                    <li><a href="{{route('index')}}">©{{config('app.name', 'Laravel')}} - {{ date("Y") }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
