<?php include 'head.php';?>
<?php include 'user-header.php';?>
  <div class="wrapper ">
    <div class="sidebar sidebar-bar-sec-min user-sidebar-bar-sec-min shadow">

      <div class="sidebar-wrapper-min " id="sidebar-wrapper-min">

        <ul class="nav mt-0">
          <li class=" wow fadeInDown" data-wow-duration="1000ms">
            <a href="javascript:;" class="main-link">
              <i class="fas fa-fw fa-home"></i>
              <p>Home</p>
            </a>
          </li>

        <li class="has-sub wow fadeInDown" data-wow-duration="1000ms">
     <a class="nav-link main-link" data-toggle="collapse" href="#sub1" aria-expanded="false" aria-controls="sub1">
        <i class="far fa-bar-chart"></i>
              <p>Subscription</p>

     </a>
     <ul class="sub collapse" id="sub1">
                            <li class="active"><a class="dropdown-item" href="paid-invoice.php">paid invoice</a></li>
                       <li><a class="dropdown-item" href="upcoming-invoice.php">next invoice</a></li>

     </ul>
    </li>

          <li class="active wow fadeInDown" data-wow-duration="1000ms">
            <a href="javascript:;" class="main-link">
              <i class="far fa-user"></i>
              <p>Manage Profile</p>
            </a>

          </li>
        
          

          <li class="dropdown wow fadeInDown" data-wow-duration="1000ms">

            <a href="javascript:;" class="dropdown-toggle main-link" data-toggle="dropdown">
              <i class="far fa-bar-chart"></i>
              <p>Portfolios</p>
            </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
          </li>



        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
 
      <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-0  mb-0">
    <div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-12">
                     <div class="card mb-0 wow fadeInDown" data-wow-duration="1000ms">
                        
                        <div class="card-body success-sec-min pt-4 pb-4">
                            <h1>thank you!</h1>
                            <i class="fas fa-check"></i>
                            <p>Your coupon is on it's way to your email. But first...</p>
                            <a href="javascript:;">Click here to book your online appointment immediately. it only takes a minute</a>
                            <p>we can't wait to meet you and your do!</p>

                        </div>

                    </div>
                    
                  
         </div>
    </div>
</div>
  </section>

      </div>

    

    </div>
  </div>
  
<?php include 'footer-script.php';?>


