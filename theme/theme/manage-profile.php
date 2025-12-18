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
                        <div class="card-header section-title">
                            <h4 class="mb-0 text-dark">Basic Info</h4>
                        </div>
                        <div class="card-body pt-4 pb-4">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label form-control-label">Your Name</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label form-control-label">Your Phone</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label class="col-lg-2 col-form-label form-control-label">Photo</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
   
                                          <div class="custom-file manage-profile-frm-min">
                                            <input type="file" class="custom-file-input" id="choose-images"
                                              aria-describedby="choose-images" value="">
                                            <label class="custom-file-label" for="choose-images"> </label>
                                           </div>
                                        </div>

                                    </div>

                                </div>
                                
                                 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label form-control-label">Your Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label form-control-label">Confirm
Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" >
                                    </div>
                                </div>
                                
                            </form>

                        </div>

                    </div>
                    <div class="form-group w-100 text-right mt-4 mb-4 d-inline-block wow fadeInDown" data-wow-duration="1000ms">
                                     <div class="col-lg-12 p-0 manage-profile-frm-min-btn">
                                         <input type="button" class="btn btn-dark" value="Update Profile">
                                    </div>
                                </div>
                                <div class="card wow fadeInDown" data-wow-duration="1000ms">
                        <div class="card-header section-title">
                            <h4 class="mb-0 text-dark">Addresses</h4>
                        </div>
                         


                        <div class="card-body pt-4 pb-4 text-center">
                            <div class="add-new-address"  data-toggle="modal" data-target="#addresses">
                              <i class="fa fa-plus"></i>

                              <p>Add New Address</p>
                            </div>

                        </div>

                    </div>
                    <div class="card mb-0 wow fadeInDown" data-wow-duration="1000ms">
                        <div class="card-header section-title">
                            <h4 class="mb-0 text-dark">Change your email</h4>
                        </div>
                        <div class="card-body pt-4 pb-4">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group mb-2 row">
                                    <label class="col-lg-2 col-form-label form-control-label">Your Email</label>
                                    <div class="col-lg-10 input-group mb-0">
   
  <input type="email" class="form-control" value="irfan.idevation@gmail.com">
  <div class="input-group-append">
    <span class="input-group-text">Verify</span>
  </div>

 <div class="d-inline-block w-100 mt-1">
                                    
                                    <div class="col-lg-10 p-0 wow fadeInDown" data-wow-duration="1000ms">
                                         <input type="button" class="btn btn-dark custom-btn text-white mt-2" value="Update Email">
                                    </div>
                                </div>
                                    </div>
                                </div>
             

                                
                            </form>

                        </div>

                    </div>
         </div>
    </div>
</div>
  </section>

      </div>

    

    </div>
  </div>
  <div class="modal fade" id="addresses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 section-title">
        <h4 class="modal-title text-dark" id="exampleModalLabel">New Address</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="card mb-0">
                        
                        <div class="card-body pt-4 pb-4">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                    <div class="col-lg-9">
                                         
                                        <textarea placeholder="Your Address"  rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Contry</label>
                                    <div class="col-lg-9">
                                        <select class="custom-select" id="gender2">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
        </select> 

                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label class="col-lg-3 col-form-label form-control-label">City</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
   
                                          <div class="custom-file manage-profile-frm-min">
                                            <select class="custom-select" id="gender2">

          <option selected>Your City</option>
          <option value="1">Karachi</option>
          <option value="2">Karachi</option>
        </select> 
                                           </div>

                                        </div>

                                    </div>

                                </div>
                                
                                 

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Postal
code</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" placeholder="Your postal Code" type="number" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Phone
</label>
                                    <div class="col-lg-9">
                                       <input class="form-control" placeholder="Your phone number" type="number" value="">
                                        <div class="d-inline-block w-100 mt-1">
                                    
                                    <div class="col-lg-12 p-0 text-right">
                                         <input type="button" class="btn btn-dark custom-btn text-white mt-2" value="Save">
                                    </div>
                                </div>
                                    </div>

                                </div>
                                
                            </form>

                        </div>

                    </div>

    </div>
  </div>
</div>
<?php include 'footer-script.php';?>


