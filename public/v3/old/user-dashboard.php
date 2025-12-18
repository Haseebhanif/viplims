<?php include 'head.php';?>
<?php include 'user-header.php';?>
   
  <section class="sectoin-1 slider-sec-min slider-sec-min-user mt-5  mb-0">
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
        <table id="admin-datatables-min" class="table w-100  dt-responsive nowrap admin-table-min-sec admin-table-min-sec-user table-bordered ">
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
  
  
  
  
  <hr class="m-0">
  <?php include 'footer.php';?>
  <?php include 'footer-script.php';?>