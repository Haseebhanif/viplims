@php
    $generalsetting = \App\Models\GeneralSetting::first();
@endphp

@if(Route::currentRouteName() == 'index')
    @php $pages = "home" @endphp
@else
    @php $pages = "" @endphp
@endif

<header class="top-header wow fadeInDown {{$pages}}" id="app" data-wow-duration="1000ms">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg top-nav " id="navbar_top" role="navigation">
                <div class="container">
                    <a class="navbar-brand text-uppercase pt-1 pb-0" href="{{route('index')}}">
                        @if($generalsetting->logo !=null)
                            <img src="{{asset($generalsetting->logo)}}" alt="logo" width="140px;">
                        @else
                            <img src="{{asset('images/viplims-logo.svg')}}" alt="logo" width="140px;">
                        @endif
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                            data-target="#mobilenavbar">
                        &#9776;
                    </button>

                    <div class="collapse navbar-collapse mt-0 " id="mobilenavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a href="{{route('index')}}" class="nav-link sub-menu sub-menu-drop">home</a>
                            </li>
                            @if(empty(auth()->id()))
                                <li class="nav-item"><a href="{{route('user.registration')}}" class="nav-link">Try For Free</a></li>
                            @else
                                <li class="nav-item"><a href="{{route('donation')}}" class="nav-link">Try For Free</a></li>
                            @endif
                            <li class="nav-item"><a href="{{route('contact_us')}}" class="nav-link">contact us</a></li>
                        </ul>

                        <ul class="nav navbar-nav ml-auto right-sec">

                            {{--<li class="nav-item ">
                                <a href="javascript:;"><i class="fa fa-globe fa-lg"></i></a></li>
                            <li class="nav-item ">
                                <a href="javascript:;">Contact Sales</a>
                            </li>--}}
                            @auth
                                <li class="nav-item dropdown">
                                    <a href="#" id="dashboard_dropdown"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       class="try-btn ml-3 ">
                                        {{auth()->user()->first_name.' '.auth()->user()->last_name}} <i
                                            class="fa fa-angle-down" aria-hidden="true"></i> </a>

                                    <div
                                        class="dropdown-menu user-dashboard-min-sec dropdown-list dropdown-menu-right shadow fadeInDown wow"
                                        data-wow-duration="1000ms" aria-labelledby="dashboard_dropdown">
                                        <a class="dropdown-item  border-0 pl-2 pr-2 "
                                           href="{{route('dashboard')}}">
                                            <i class="fa fa-dashboard" aria-hidden="true"></i>
                                             User Dashboard
                                        </a>
                                        @if(auth()->user()->user_type=='admin')
                                            <a class="dropdown-item  border-0 pl-2 pr-2 "
                                               href="{{route('admin.dashboard')}}">
                                                <i class="fa fa-dashboard" aria-hidden="true"></i>
                                                 Admin Dashboard
                                            </a>
                                        @endif
                                        <a class="dropdown-item  border-0 pl-2 pr-2 "
                                           href="{{route('user.edit',auth()->id())}}">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit Profile
                                        </a>
                                        <hr class="m-0">
                                        <a class="dropdown-item border-0 pl-2 pr-2" href="{{route('logout')}}">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Log Out
                                        </a>
                                    </div>
                                </li>

                            @else
                                <li class="nav-item">
                                    <a href="{{route('login')}}">Log in</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user.registration')}}" class="try-btn ml-3">Try for free </a>
                                </li>
                            @endauth
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
