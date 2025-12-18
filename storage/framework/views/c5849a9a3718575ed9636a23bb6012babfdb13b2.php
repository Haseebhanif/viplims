<div class="sidebar sidebar-bar-sec-min">
    <div class="logo d-inline-block w-100">

        <a href="<?php echo e(route('index')); ?>" class="simple-text logo-min w-100 pb-0 pt-1">

            <?php if($generalsetting->logo !=null): ?>
                <img src="<?php echo e(asset($generalsetting->logo)); ?>" alt="logo" width="140px;">
            <?php else: ?>
                <img src="<?php echo e(asset('images/viplims-logo-w.svg')); ?>" alt="logo" width="140px;">
            <?php endif; ?>
        </a>


    </div>
    <div class="sidebar-wrapper-min" id="sidebar-wrapper-min">
        <ul class="nav">
            <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='admin.dashboard' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="main-link ">
                    <i class="fas fa-fw fa-home"></i>
                    <p>Home</p>
                </a>
            </li>

            
            
            <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='subscribers.index' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('subscribers.index')); ?>" class="main-link ">
                    <i class="far fa-check-circle"></i>
                    <p>Subscribed Users</p>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('users.index')); ?>" class="main-link <?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='users.index' ? 'active' : ''); ?>">
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
                    <li class="has-sub <?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='privacypolicy.index' ? 'active' : ''); ?>">
                        <a class="nav-link main-link " data-toggle="collapse" href="#sub2" aria-expanded="false" aria-controls="sub2">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            <p>Policy Pages</p>
                        </a>
                        <ul class="sub collapse" id="sub2">
                            <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getAction()==route('privacypolicy.index','privacy_policy') ? 'active' : ''); ?>"><a class="dropdown-item " href="<?php echo e(route('privacypolicy.index','privacy_policy')); ?>">Privacy Policy</a></li>
                            <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getAction()==route('privacypolicy.index','terms_&_conditions') ? 'active' : ''); ?>"><a class="dropdown-item " href="<?php echo e(route('privacypolicy.index','terms_&_conditions')); ?>">Terms & Conditions</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='general_setting.index' ? 'active' : ''); ?>"><a class="dropdown-item " href="<?php echo e(route('general_setting.index')); ?>">General Settings</a></li>

                    <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='pages.index' ? 'active' : ''); ?>"><a class="dropdown-item " href="<?php echo e(route('pages.index')); ?>">Custom Pages</a></li>
                    <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='general_setting.logo' ? 'active' : ''); ?>"><a class="dropdown-item " href="<?php echo e(route('general_setting.logo')); ?>">
                            Logo Settings
                        </a>
                    </li>

                    <li class="<?php echo e(\Illuminate\Support\Facades\Request::route()->getName()=='general_setting.home' ? 'active' : ''); ?>"><a class="dropdown-item " href="<?php echo e(route('general_setting.home')); ?>">
                            Header Settings
                        </a>
                    </li>
                   
                </ul>
            </li>

        </ul>
    </div>
</div>
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>