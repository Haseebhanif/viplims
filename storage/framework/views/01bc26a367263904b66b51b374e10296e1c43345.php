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
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

                
                <li class="nav-item dropdown">


                    <a class="nav-link dropdown-toggle mt-1 mb-1 text-white" href="#" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span> -->
                        <img class="img-profile rounded-circle mr-2" src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('images/user.png')); ?>"><?php echo e(Auth::user()->first_name); ?>


                    </a>

                    <div class="dropdown-menu dropdown-list w-300 drop-link-style dropdown-menu-right shadow "  aria-labelledby="navbarDropdownMenuLink">

                        

                        <hr class="m-0">
                        <a class="dropdown-item  border-0 pl-2 pr-2" href="<?php echo e(route('dashboard')); ?>">
                        My User Dashbaord
                        </a>
                        <hr class="m-0">
                        <a class="dropdown-item border-0 pl-2 pr-2" href="<?php echo e(route('logout')); ?>">
                            Log Out
                        </a>

                    </div>

                </li>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/partials/header.blade.php ENDPATH**/ ?>