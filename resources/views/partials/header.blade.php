<nav class="navbar navbar-expand-lg navbar-top-min-sec  ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            {{--<a class="navbar-brand text-white" href="{{route('admin.dashboard')}}">Dashboard</a>--}}
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

                {{--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pt-4 text-white" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-plus fa-sm text-white"></i>
                    </a>


                    <div  class="dropdown-menu drop-link-style dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="far fa-check-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                            Task
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-clipboard-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Project
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="far fa-comment  fa-sm fa-fw mr-2 text-gray-400"></i>
                            Conversation
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user-times fa-sm fa-fw mr-2 text-gray-400"></i>
                            Invite
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  pt-4 text-white" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-question-circle fa-sm text-white"></i>
                    </a>


                    <div class="drop-link-style shadow dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Viplims quick start
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Help with features
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item pl-2 pr-2" href="#">
                            Apps and integrations
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Ways to use Viplims
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Keyboard shortcuts
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Privacy policy
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Contact support
                        </a>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item  pl-2 pr-2" href="#">
                            Watch tutorial videos
                        </a>


                    </div>
                </li>

                <li class="nav-item">
                    <div class="bg-custom card text-white shadow border-0 mt-1 mb-1">
                        <div class="card-body pt-2 pl-2 pr-2 pb-2 border-0">
                            <p class="text-gray-400 ft-12 d-inline-block mb-0">Trial: 27 days left</p>
                            <div class="text-white-50 small"><a href="javascript:;" class="text-white text-decoration-none">Learn more</a></div>
                        </div>
                    </div>
                </li>--}}
                <li class="nav-item dropdown">


                    <a class="nav-link dropdown-toggle mt-1 mb-1 text-white" href="#" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> -->
                        <img class="img-profile rounded-circle mr-2" src="{{isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('images/user.png')}}">{{Auth::user()->first_name}}

                    </a>

                    <div class="dropdown-menu dropdown-list w-300 drop-link-style dropdown-menu-right shadow "  aria-labelledby="navbarDropdownMenuLink">

                        {{--  <div class="card-body pt-2 border-0 pb-2 border-0 text-white">
                              <p class="text-gray-400 ft-12 d-inline-block mb-0">IT is currently in trial.</p> <a href="javascript:;" class="ft-12">Learn more</a>
                              <div class="text-white-50 small"><i class="fa fa-clock-o mr-2 fa-sm fa-fw text-gray-400"></i>27 days remaining</div>
                          </div>
                          <hr class="m-0">
                          <a class="dropdown-item  border-0 pl-2 pr-2" href="#">
                              <i class="fas fa-check fa-sm fa-fw text-gray-400 mr-2"></i>IT <i class="fas fa-circle fa-sm fa-fw  mr-3 cir-color-yellow"></i>
                          </a>--}}

                        <hr class="m-0">
                        <a class="dropdown-item  border-0 pl-2 pr-2" href="{{route('dashboard')}}">
                        My User Dashbaord
                        </a>
                        <hr class="m-0">
                        <a class="dropdown-item border-0 pl-2 pr-2" href="{{route('logout')}}">
                            Log Out
                        </a>

                    </div>

                </li>

            </ul>
        </div>
    </div>
</nav>
