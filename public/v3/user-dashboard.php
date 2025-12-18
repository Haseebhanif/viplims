<?php include 'head.php';?>
<?php include 'user-header.php';?>
  <div class="wrapper ">
    <div class="sidebar sidebar-bar-sec-min user-sidebar-bar-sec-min shadow">
 
      <div class="sidebar-wrapper-min " id="sidebar-wrapper-min">

        <ul class="nav mt-0">
          <li class="active">
            <a href="javascript:;" class="main-link">
              <i class="fas fa-fw fa-home"></i>
              <p>Home</p>
            </a>
          </li>
           
        <li class="has-sub">
     <a class="nav-link main-link" data-toggle="collapse" href="#sub1" aria-expanded="false" aria-controls="sub1">
        <i class="far fa-bar-chart"></i>
              <p>Subscription</p>
       
     </a>
     <ul class="sub collapse" id="sub1">
                            <li class="active"><a class="dropdown-item" href="paid-invoice.php">paid invoice</a></li>
                       <li><a class="dropdown-item" href="upcoming-invoice.php">next invoice</a></li>

       
       
     </ul>
    </li>
 
          <li>
            <a href="javascript:;" class="main-link">
              <i class="far fa-check-circle"></i>
              <p>My Tasks</p>
            </a>

          </li>
          <li>
            <a href="javascript:;" class="main-link">
              <i class="far fa-bell"></i>
              <p>Inbox</p>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="main-link">
              <i class="far fa-bar-chart"></i>
              <p>Portfolios</p>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="main-link">
              <i class="far fa-user"></i>
              <p>Goals</p>
            </a>
          </li>

          <li class="dropdown">
                   
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
      <!-- Navbar -->
      
      
      <div class="content">
        <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-0  mb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1000ms">
          <div class="user-invoice-box card">
              <div class="media d-flex">
                <div class="media-body text-left user-invoice-title">
                  <h6 class="text-muted">total invoice  </h6>
                  <h3>88,8</h3>
                </div>
                <div class="align-self-center">
                    <i class="fas fa-file-invoice font-large-2 float-right"></i>

                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="1500ms">
          <div class="user-invoice-box card">
              <div class="media d-flex">
                <div class="media-body text-left user-invoice-title">
                  <h6 class="text-muted">paid invoice </h6>
                  <h3>88,68</h3>
                </div>
                <div class="align-self-center">
                    <i class="fas fa-file-invoice font-large-2 float-right"></i>

                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-1 wow fadeInLeft" data-wow-duration="2000ms">
          <div class="user-invoice-box card">
              <div class="media d-flex">
                <div class="media-body text-left user-invoice-title">
                  <h6 class="text-muted">upcoming invoice </h6>
                  <h3>568</h3>
                </div>
                <div class="align-self-center">
                    <i class="fas fa-file-invoice font-large-2 float-right"></i>

                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-12 min-table-min-sec-user-min" >
        <table id="admin-datatables-min" class="table bg-white w-100  dt-responsive nowrap admin-table-min-sec admin-table-min-sec-user table-bordered ">
        <thead>
            <tr class="wow fadeInDown" data-wow-duration="1000ms">
                <th>Package Name</th>
                <th>Subs Date</th>
                <th>Remaining Days</th>
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="wow fadeInDown" data-wow-duration="1200ms">
                <td>monthly</td>
                <td>02/3/2020</td>
                <td>09/7/2020</td>
                  <td>
                    <a href="javascript:;" class="text-dark text-dacuraion-none" title="Manage">Manage</a>
                </td>
            </tr>
            <tr class="wow fadeInDown" data-wow-duration="1200ms">
                <td>quaterly</td>
                <td>03/4/2020</td>
                <td>08/06/2020</td>
                  <td>
                    <a href="javascript:;" class="text-dark text-dacuraion-none" title="Manage">Manage</a>
                </td>
            </tr>
            <tr class="wow fadeInDown" data-wow-duration="1200ms">
                <td>halfyear</td>
                <td>04/5/2020</td>
                <td>07/05/2020</td>
                  <td>
                    <a href="javascript:;" class="text-dark text-dacuraion-none" title="Manage">Manage</a>
                </td>
            </tr>
            <tr class="wow fadeInDown" data-wow-duration="1200ms">
                <td>year</td>
                <td>05/6/2020</td>
                <td>01/01/2020</td>
                  <td>
                    <a href="javascript:;" class="text-dark text-dacuraion-none" title="Manage">Manage</a>
                </td>
            </tr>
            

        </tbody>
    </table>
    </div>
      </div>
    </div>
  </section>
      
      </div>
       <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
               
              <li>
                <a href="javascript:;">
                  About Us
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright pull-right" id="copyright">
            © 2020, Designed by <a href="javascript:;" target="_blank">SAAS</a>.
          </div>
        </div>
      </footer>
   
    </div>
  </div>
<?php include 'footer-script.php';?>

 
 