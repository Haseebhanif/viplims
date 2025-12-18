<?php include 'head.php';?>
  <section class="w-100 login-min login-min-frm-min pt-5">
    <div class="container register-top-min pt-0">
                <div class="row">
                    <div class="col-md-9  m-0-auto">
                      <a class="navbar-brand text-center w-100 pt-0 wow fadeInDown" data-wow-duration="1000ms" href="index.php">
          <svg width="200px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101.01 19.38"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M67.63,16.74a5,5,0,0,0,3.59-1.4L73,17.27a7,7,0,0,1-5.35,2.12c-4.35,0-7.16-2.9-7.16-6.82a6.67,6.67,0,0,1,6.77-6.82c4.32,0,6.77,3.3,6.55,7.88H63.62A3.68,3.68,0,0,0,67.63,16.74Zm3.11-5.29A3.27,3.27,0,0,0,67.3,8.36a3.51,3.51,0,0,0-3.69,3.08Z"/><path class="cls-1" d="M0,16.6l7.86-8H.18V6.07H11.5V8.63l-7.86,8h8v2.52H0Z"/><path class="cls-1" d="M21,16.74a5,5,0,0,0,3.59-1.4l1.78,1.93a7,7,0,0,1-5.35,2.12c-4.35,0-7.16-2.9-7.16-6.82a6.67,6.67,0,0,1,6.77-6.82c4.32,0,6.77,3.3,6.55,7.88H17A3.68,3.68,0,0,0,21,16.74Zm3.11-5.29a3.27,3.27,0,0,0-3.44-3.08A3.51,3.51,0,0,0,17,11.44Z"/><path class="cls-1" d="M44.18,12.57a6.53,6.53,0,0,1,6.55-6.81,5.64,5.64,0,0,1,4.35,2V0h2.78V19.12H55.08V17.32a5.57,5.57,0,0,1-4.37,2.07A6.59,6.59,0,0,1,44.18,12.57Zm11.05,0a4.14,4.14,0,1,0-8.28,0,4.14,4.14,0,1,0,8.28,0Z"/><path class="cls-1" d="M75.55,16.35,78.06,15a3.73,3.73,0,0,0,3.35,1.91c1.57,0,2.38-.81,2.38-1.73s-1.52-1.28-3.17-1.62c-2.23-.47-4.53-1.2-4.53-3.9,0-2.07,2-4,5.06-4a6,6,0,0,1,5.27,2.54L84.09,9.56a3.38,3.38,0,0,0-2.93-1.49c-1.49,0-2.25.73-2.25,1.57s1.2,1.2,3.09,1.62c2.15.47,4.58,1.18,4.58,3.9,0,1.81-1.57,4.24-5.29,4.22A6.12,6.12,0,0,1,75.55,16.35Z"/><path class="cls-1" d="M93.81,13.31l-2.2,2.41v3.41H88.83V0h2.78V12.52L97.5,6h3.38l-5.11,5.61L101,19.12H97.87Z"/><path class="cls-1" d="M35.92,5.76c-3.3,0-6.06,2.15-6.06,5.71v7.65h2.83v-7.3A3.1,3.1,0,0,1,36,8.39c2.1,0,3.14,1.29,3.14,3.43v7.3H42V11.47C42,7.91,39.22,5.76,35.92,5.76Z"/></g></g></svg></a>
                      <div class="register-right-min col-md-6 m-0-auto pt-4">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item wow fadeInDown" data-wow-duration="1000ms" >
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#admin-login" role="tab" aria-controls="home" aria-selected="true">Admin</a>
                            </li>
                            <li class="nav-item wow fadeInUp" data-wow-duration="1000ms">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#user-login" role="tab" aria-controls="profile" aria-selected="false">User</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="admin-login" role="tabpanel" aria-labelledby="home-tab">
                                <h4 class="register-heading-min wow fadeInDown" data-wow-duration="1000ms">Admin Login</h4>
                                <div class="row register-form-min pb-2 pt-3 pr-3 pl-3">
                                  <form action="admin-dashboard.php" class="w-100">
                                    <div class="col-md-12 m-0-auto">
                                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                          <!-- <label class="text-secondary">Email address</label> -->
                                            <input type="email" class="form-control" placeholder="Email address" value="" required="required"  />
                                        </div>
                                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                         <!--   <label class="text-secondary">Password</label> -->
                                            <input type="password" class="form-control" placeholder=" Password" value="" required="required" />
                                        </div>
                                        <div class="form-group text-left wow fadeInDown" data-wow-duration="1000ms">
                                          <input type="submit" class="btnRegister-min mt-0 pull-left w-100 wow fadeInDown" data-wow-duration="1000ms"  value="Log In"/>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div class="tab-pane  fade show" id="user-login" role="tabpanel" aria-labelledby="profile-tab">
                                <h4  class="register-heading-min wow fadeInDown" data-wow-duration="1000ms">User Login</h4>
                                  <div class="row register-form-min pb-2 pt-3 pr-3 pl-3">
                                   <div class="col-md-12 m-0-auto">
                                    <form action="user-dashboard.php" class="w-100">
                                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                          <!-- <label class="text-secondary">Email address</label> -->
                                            <input type="email" class="form-control" placeholder="Email address" value="" required="required"  />
                                        </div>
                                        <div class="form-group wow fadeInDown" data-wow-duration="1000ms">
                                         <!--   <label class="text-secondary">Password</label> -->
                                            <input type="password" class="form-control" placeholder=" Password" value="" required="required" />
                                        </div>
                                        <div class="form-group text-left wow fadeInDown" data-wow-duration="1000ms">
                                          <input type="submit" class="btnRegister-min mt-0 pull-left w-100"  value="Log In"/>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                             <p class="text-center pt-1 w-100 pb-4 wow fadeInDown" data-wow-duration="1000ms">Create an account? <a href="registration.php" class="text-dark d-inline-block text-decoration-none">Create Account</a> </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
  </section>
  <?php include 'footer-script.php';?>