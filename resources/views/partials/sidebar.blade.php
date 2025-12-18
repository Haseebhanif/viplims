<div class="sidebar sidebar-bar-sec-min">
    <div class="logo d-inline-block w-100">

        <a href="{{route('index')}}" class="simple-text logo-min w-100 pb-0 pt-1">

            @if($generalsetting->logo !=null)
                <img src="{{asset($generalsetting->logo)}}" alt="logo" width="140px;">
            @else
                <img src="{{asset('images/viplims-logo-w.svg')}}" alt="logo" width="140px;">
            @endif
        </a>


    </div>
    <div class="sidebar-wrapper-min" id="sidebar-wrapper-min">
        <ul class="nav">
            <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='admin.dashboard' ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}" class="main-link ">
                    <i class="fas fa-fw fa-home"></i>
                    <p>Home</p>
                </a>
            </li>

            {{-- <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='package.index' ? 'active' : ''}}">
                <a href="{{route('package.index')}}" class="main-link ">
                    <i class="far fa-check-circle"></i>
                    <p>Packages</p>
                </a>
            </li> --}}
            
            <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='subscribers.index' ? 'active' : ''}}">
                <a href="{{route('subscribers.index')}}" class="main-link ">
                    <i class="far fa-check-circle"></i>
                    <p>Subscribed Users</p>
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}" class="main-link {{\Illuminate\Support\Facades\Request::route()->getName()=='users.index' ? 'active' : ''}}">
                    <i class="far fa-user"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="has-sub">
                <a class="nav-link main-link " data-toggle="collapse" href="#sub4" aria-expanded="false" aria-controls="sub4">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <p>Frontend Setting</p>
                </a>

                <ul class="sub collapse" id="sub4">
                    <li class="has-sub {{\Illuminate\Support\Facades\Request::route()->getName()=='privacypolicy.index' ? 'active' : ''}}">
                        <a class="nav-link main-link " data-toggle="collapse" href="#sub2" aria-expanded="false" aria-controls="sub2">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            <p>Policy Pages</p>
                        </a>
                        <ul class="sub collapse" id="sub2">
                            <li class="{{\Illuminate\Support\Facades\Request::route()->getAction()==route('privacypolicy.index','privacy_policy') ? 'active' : ''}}"><a class="dropdown-item " href="{{route('privacypolicy.index','privacy_policy')}}">Privacy Policy</a></li>
                            <li class="{{\Illuminate\Support\Facades\Request::route()->getAction()==route('privacypolicy.index','terms_&_conditions') ? 'active' : ''}}"><a class="dropdown-item " href="{{route('privacypolicy.index','terms_&_conditions')}}">Terms & Conditions</a></li>
                        </ul>
                    </li>
                    <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='general_setting.index' ? 'active' : ''}}"><a class="dropdown-item " href="{{route('general_setting.index')}}">General Settings</a></li>
{{--                    <li><a class="dropdown-item" href="{{route('business_setting.index')}}">Business Settings</a></li>--}}
                    <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='pages.index' ? 'active' : ''}}"><a class="dropdown-item " href="{{route('pages.index')}}">Custom Pages</a></li>
                    <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='general_setting.logo' ? 'active' : ''}}"><a class="dropdown-item " href="{{route('general_setting.logo')}}">
                            Logo Settings
                        </a>
                    </li>

                    <li class="{{\Illuminate\Support\Facades\Request::route()->getName()=='general_setting.home' ? 'active' : ''}}"><a class="dropdown-item " href="{{route('general_setting.home')}}">
                            Header Settings
                        </a>
                    </li>
                   {{-- <li class="has-sub">
                        <a class="nav-link main-link" data-toggle="collapse" href="#sub1" aria-expanded="false" aria-controls="sub1">
                            <p>Home Settings</p>
                        </a>
                        <ul class="sub collapse" id="sub1">
                            <li><a class="dropdown-item" href="{{route('slider.index')}}">Slider Settings</a></li>
                            <li><a class="dropdown-item" href="{{route('cards.index')}}">Cards Setting</a></li>
                            <li><a class="dropdown-item" href="{{route('tabs.index')}}">Tab Setting</a></li>
                            <li><a class="dropdown-item" href="">Support Setting</a></li>
                            <li><a class="dropdown-item" href="{{route('videos.index')}}">Video Setting</a></li>
                            <li><a class="dropdown-item" href="">Experience Setting</a></li>
                            <li><a class="dropdown-item" href="{{route('clients.index')}}">Client Setting</a></li>
                        </ul>
                    </li>--}}
                </ul>
            </li>

        </ul>
    </div>
</div>
