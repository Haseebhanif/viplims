@extends('layouts.app')
@section('content')


@section('css')
    .slider-sec-min {
    background: url({{asset($slider->image)}});
    text-transform: capitalize;
    padding: 140px 0 100px;
    display: inline-block;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;

@stop


@if($business_settings['slider']->value == 1)
    <section class="slider-sec-min">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-text">
                    <h1 class="text-white wow fadeInUp" data-wow-duration="1000ms">{{$slider->title}}</h1>
                    <p class="text-white wow fadeInUp" data-wow-duration="1500ms">{!!strip_tags($slider->text) !!}</p>
                    <a class="slider-button wow fadeInUp" data-wow-duration="1500ms" href="{{route('register')}}">Try
                        for free</a>
                    <a class="slider-button wow fadeInUp" data-wow-duration="2000ms" href="{{route('pricing')}}">Free
                        trial</a>
                </div>
            </div>
        </div>
    </section>
@endif
@if($business_settings['card']->value == 1)
    <section class="section-1 mt-5 mb-5">
        <div class="container">
            <div class="row">
                @php $class = array('one','two','three'); @endphp
                @foreach($cards as $key=>$card)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="section-text-min {{$class[array_rand($class,1)]}}"><span>{{$card->type}}</span>
                            <h2>{{$card->title}}</h2>
                            <p>{{$card->text}}</p> @if(isset($card->link))<a href="{{$card->link}}">Learn more <i
                                    class="fa fa-angle-right"></i></a> @endif </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if($business_settings['tab']->value == 1)
    <section class="tab-menu-min">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="text-center text-capti text-tme-color wow fadeInUp pl-sm-3 pr-sm-3"
                        data-wow-duration="1000ms">Connect with speed and flexibility</h2>
                    <div class="col-lg-12 text-center mb-4 mt-0"><span class="outer-line wow fadeInDown"
                                                                       data-wow-duration="1500ms"></span></div>
                    <div class="tab-content-min w-100">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            @foreach($tabs as $key=>$tab)
                                <a
                                    class="nav-item nav-link ml-0 {{$key == 0 ? 'active' :''}} wow fadeInUp"
                                    data-wow-duration="1000ms" id="{{$tab->title}}"
                                    data-toggle="tab" href="#{{$tab->id}}" role="tab" aria-controls="nav-home"
                                    aria-selected="true">{{$tab->title}}</a>

                            @endforeach

                        </div>
                    </div>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        @foreach($tabs as $key=>$tab)
                            <div class="tab-pane fade show {{$key == 0 ? 'active' :''}}" id="{{$tab->id}}"
                                 role="tabpanel" aria-labelledby="{{$tab->title}}">
                                <div class="container p-0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft"
                                             data-wow-duration="1000ms"><span>{{$tab->title}}</span>

                                            {!! $tab->text !!}

                                            <a href="{{$tab->link}}" class="custom-btn mb-sm-3">Learn more</a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4 wow fadeInRight pb-sm-3"
                                             data-wow-duration="1500ms"><img src="{{asset($tab->file)}}" align="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
@if($business_settings['support']->value == 1)
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7 mt-2 col-sm-6 col-xs-12 mt-3">
                    <div class="row section-2-content-left">
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="1000ms">
                            <a href="javascript:;">
                                <h2>The Support Suite</h2>
                                <p>The full service experience</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;">
                                <h2>The Sales Suite</h2>
                                <p>The modern sales solution</p>
                            </a>
                        </div>
                    </div>
                    <div class="row section-2-content-left section-2-content-left-icon mt-5">
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="1500ms">
                            <a href="javascript:;"> <i class="fa fa-play"></i>
                                <h2>support</h2>
                                <p>Integrated customer support</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="1500ms">
                            <a href="javascript:;"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <h2>sell</h2>
                                <p>Sales CRM</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-play"></i>
                                <h2>guide</h2>
                                <p>Knowledge base and smart self-service </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                                <h2>explore</h2>
                                <p>Analytics and reporting </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-comments-o" aria-hidden="true"></i>
                                <h2>chat</h2>
                                <p>Live chat and messaging </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-play"></i>
                                <h2>gather</h2>
                                <p>Community forum </p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInDown" data-wow-duration="2000ms">
                            <a href="javascript:;"> <i class="fa fa-play"></i>
                                <h2>talk</h2>
                                <p>Integrated voice software </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5 col-sm-6 col-xs-12 section-2-content-right">
                    <h2 class=" wow fadeInDown" data-wow-duration="1500ms">Something for everyone</h2>
                    <p class=" wow fadeInDown mt-2" data-wow-duration="1500ms">The customer journey differs for
                        everybody.
                        No matter your business need, our products are flexible enough to pave the path that’s best for
                        your
                        organization.</p>
                    <div class="section-2-content-right-img wow fadeInDown" data-wow-duration="1500ms"
                         id="section-2-content-right-img"><img src="{{asset('images/hover.jpg')}}" align=""></div>
                </div>
            </div>
        </div>
    </section>
@endif
@if($business_settings['video']->value == 1)
    <section class="video-section">
        <div class="container">
            <div class="row mt-5 mb-5">
                <h2 class="text-center text-capti w-100 wow fadeInDown text-tme-color pl-sm-3 pr-sm-3"
                    data-wow-duration="1500ms">{{$video->title}}</h2>
                <span class="outer-line wow fadeInDown" id="span" data-wow-duration="1500ms">
                </span>
                {!! $video->text !!}

                @if($video->video_type =='self_video')
                    <video controls width="100%" autoplay class=" wow fadeInDown " data-wow-duration="1500ms">
                        <source src="{{asset($video->file)}}" type="video/mp4">
                        <source src="{{asset($video->file)}}" type="video/ogg">
                    </video>
                @elseif ($video->video_type =='youtube')
                    <iframe width="100%" height="560px" src="https://www.youtube.com/embed/{{$video->url}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                @else
                    <div id="daily_video" class="w-100 h-100 wow fadeInDown " data-wow-duration="1500ms">
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
@if($business_settings['experience']->value == 1)
    <section class="section-3">
        <div class="container">
            <div class="row section-3-content ">
                <div class="col-lg-12 col-md-6 p-0 col-sm-12 col-xs-12 mt-5 wow fadeInLeft pl-sm-3 pr-sm-3"
                     data-wow-duration="1500ms">
                    <h1>The best customer</h1>
                    <h1>experiences are built</h1>
                    <h1>with Viplims</h1> <a href="javascript:;" class="custom-btn pl-4 pr-4">
                        Free trial
                    </a></div>
                <div class="section-3-content-img  wow fadeInRight pl-sm-3 pr-sm-3" data-wow-duration="1500ms"><img
                        src="{{asset('images/img.jpg')}}"></div>
            </div>
        </div>
    </section>
@endif
@if($business_settings['client']->value == 1)
    <section class="client-section">
        <div class="container">
            <div class="row">
                <h2 class="w-100 text-center text-capti  wow fadeInDown text-tme-color pl-sm-3 pr-sm-3"
                    data-wow-duration="1500ms">learn from the best-our customers</h2>
                <div class="col-lg-12 text-center mb-4 mt-0"><span class="outer-line wow fadeInDown"
                                                                   data-wow-duration="1500ms"></span></div>
                @foreach($clients as $client)
                    <div class="col-md-3 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{asset($client->file)}}" title="{{$client->title}}">
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif
@stop

@section('script')
    <script>
        $( "#span" ).nextAll( "p" ).addClass("mb-0 text-center w-100 wow fadeInDown pl-sm-3 pr-sm-3");
        function getDailyMotionId(url) {
            var m = url.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
            if (m !== null) {
                if (m[4] !== undefined) {
                    return m[4];
                }
                return m[2];
            }
            return null;
        }

        var vidID = getDailyMotionId("{{$video->url}}");

        $("#daily_video").html('<iframe frameborder="0" width="100%" height="560px" src="//www.dailymotion.com/embed/video/' + vidID + '" allowfullscreen></iframe>');
    </script>
@stop
