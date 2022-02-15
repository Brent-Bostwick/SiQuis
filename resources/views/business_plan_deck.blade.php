<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" Content="width=device-width, initial-scale=1" />
    
    <link rel="shortcut icon" href="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" sizes="16x16" type="image/png" />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    <link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css" />
    
    <style>
    #more {display: none;}
    #more2 {display: none;}
    #more3 {display: none;}
    #more4 {display: none;}
    #more5 {display: none;}
    #more6 {display: none;}
    #more7 {display: none;}
    #more8 {display: none;}
    #more9 {display: none;}
    #more10 {display: none;}
    #more11 {display: none;}
    #more12 {display: none;}
    #more13 {display: none;}
    table td {
      position: relative;
    }
    table td input.rate {
      position: absolute;
      display: block;
      top:0;
      left:0;
      margin: 0;
      height: 100%;
      width: 100%;
      border: none;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }
    </style>

    <!-- Title -->
    <title>SiQuisSoftware</title> 
    
  </head>
  <body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHWQ4SS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- MODALS -->

    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
    
            <!-- Close -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
            <!-- Image -->
            <div class="text-center">
              <img src="./assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-3" style="width: 200px;">
            </div>
    
            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>
    
            <!-- Text -->
            <p class="fs-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>
    
            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">
    
                  <!-- Name -->
                  <div class="form-floating">
                    <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                    <label for="registrationFirstNameModal">Your name</label>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <!-- Last name -->
                  <div class="form-floating">
                    <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                    <label for="registrationLastNameModal">Last name</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <!-- Email -->
                  <div class="form-floating">
                    <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                    <label for="registrationEmailModal">Email</label>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <!-- Password -->
                  <div class="form-floating">
                    <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                    <label for="registrationPasswordModal">Password</label>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-12">
    
                  <!-- Submit -->
                  <button class="btn w-100 btn-info mt-3 lift">
                    Request a demo
                  </button>
    
                </div>
              </div>
            </form>
    
          </div>
        </div>
      </div>
    </div>

    <!-- Account: Horizontal  -->
    <div class="modal fade" id="modalAccountHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalAccountHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-4 bg-cover card-img-start" style="background-image: url(https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg);">
    
                <!-- Image (placeholder) -->
                <img src="https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>
                </div>
    
              </div>
              <div class="col-12 col-md-8">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalAccountHorizontalTitle">
                    My Account Information
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Building upon your passions.
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">

                    <!-- Company Name -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalAccountHorizontalCompanyName">
                        Company Name
                      </label>
                      <input type="text" class="form-control" id="modalAccountHorizontalCompanyName" placeholder="Company name *">
                    </div>
    
                    <!-- User Name -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalAccountHorizontalUserName">
                        Your Name
                      </label>
                      <input type="text" class="form-control" id="modalAccountHorizontalUserName" placeholder="Your name *">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalAccountHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalAccountHorizontalEmail" placeholder="Your email *">
                    </div>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalAccountHorizontalPassword">
                        Create a password
                      </label>
                      <input type="password" class="form-control" id="modalAccountHorizontalPassword" placeholder="Create a password *">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn btn-xs w-100 btn-info" type="submit">
                      Sign up
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    Already have an account? <a style="color:orange" data-bs-toggle="modal" href="#modalSignupHorizontal"><i> Log in</i></a>.
                  </p>
                  <p class="mb-0 fs-sm text-center text-muted">
                    * Required fields
                  </p>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Signup: Horizontal Drop-In -->
    <div class="modal fade" id="modalSignupDIHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupDIHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-4 bg-cover card-img-start" style="background-image: url(https://i.postimg.cc/QNfrqX1Z/Drop-in.jpg);">
    
                <!-- Image (placeholder) -->
                <img src="https://i.postimg.cc/QNfrqX1Z/Drop-in.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            
                </div>
    
              </div>
              <div class="col-12 col-md-8">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalSignupDIHorizontalTitle">
                    Sign Up
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Start building upon your passions.<br><br>

                    We're excited to have you join the "Beta-Site" team! By adding your information to our list we'll be able to keep you informed about our Beta-Site and its initial launch. 
                    <br><br>

                    In addition, once launched, you'll gain access to take a look at how the Si Quis platform can help you create and grow your passion business. 
                    <br><br>

                    We'll only send information as our milestones unfold... otherwise we'll keep quite and not add to your in box! 
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">

                    <!-- Company Name -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupDIHorizontalCompanyName">
                        Company Name
                      </label>
                      <input type="text" class="form-control" id="modalSignupDIHorizontalCompanyName" placeholder="Company name">
                    </div>
    
                    <!-- User Name -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupDIHorizontalUserName">
                        Your Name
                      </label>
                      <input type="text" class="form-control" id="modalSignupDIHorizontaltUserName" placeholder="Your name *">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupDIHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSignupDIHorizontalEmail" placeholder="Your email *">
                    </div>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalSignupDIHorizontalPassword">
                        Create a password
                      </label>
                      <input type="password" class="form-control" id="modalSignupDIHorizontalPassword" placeholder="Create a password *">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn btn-xs w-100 btn-info" type="submit">
                      Sign up
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#modalSigninHorizontal">Log in</a>.
                  </p>
                  <p class="mb-0 fs-sm text-center text-muted">
                    * Required fields
                  </p>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Signup: Horizontal Ellie -->
    <div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-4 bg-cover card-img-start" style="background-image: url( https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg);">
    
                <!-- Image (placeholder) -->
                <img src=" https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            
                </div>
    
              </div>
              <div class="col-12 col-md-8">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalSignupHorizontalTitle">
                    Sign Up
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Start building upon your passions.<br><br>

                    We're excited to have you join the "Beta-Site" team! By adding your information to our list we'll be able to keep you informed about our Beta-Site and its initial launch. 
                    <br><br>

                    In addition, once launched, you'll gain access to take a look at how the Si Quis platform can help you create and grow your passion business. 
                    <br><br>

                    We'll only send information as our milestones unfold... otherwise we'll keep quite and not add to your in box! 
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">

                    <!-- Company Name -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupHorizontalCompanyName">
                        Company Name
                      </label>
                      <input type="text" class="form-control" id="modalSignupHorizontalCompanyName" placeholder="Company name">
                    </div>
    
                    <!-- User Name -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupHorizontalUserName">
                        Your Name
                      </label>
                      <input type="text" class="form-control" id="modalSignupHorizontaltUserName" placeholder="Your name *">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSignupHorizontalEmail" placeholder="Your email *">
                    </div>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalSignupHorizontalPassword">
                        Create a password
                      </label>
                      <input type="password" class="form-control" id="modalSignupHorizontalPassword" placeholder="Create a password *">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn btn-xs w-100 btn-info" type="submit">
                      Sign up
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#modalSigninHorizontal">Log in</a>.
                  </p>
                  <p class="mb-0 fs-sm text-center text-muted">
                    * Required fields
                  </p>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Signin: Horizontal  -->
    <div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(./assets/img/photos/photo-1.jpg);">
    
                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            
                </div>
    
              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalSigninHorizontalTitle">
                    Sign In
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Start building upon your passions.
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">
    
                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSigninHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                    </div>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalSigninHorizontalPassword">
                        Enter your password
                      </label>
                      <input type="password" class="form-control" id="modalSigninHorizontalPassword" placeholder="Enter your password">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn btn-xs w-100 btn-info" type="submit">
                      Sign in
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    Don't have an account yet? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#modalSignupHorizontal">Sign up</a>.
                  </p>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Password Reset: Horizontal  -->
    <div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog" aria-labelledby="modalPasswordResetTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(./assets/img/photos/photo-8.jpg);">
    
                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            
                </div>
    
              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalPasswordResetTitle">
                    Reset Password
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Keep your account information secure.
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">
    
                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalPasswordResetEmail">
                        Your email address
                      </label>
                      <input type="email" class="form-control" id="modalPasswordResetEmail" placeholder="Your email">
                    </div>
                                        <!-- Submit -->
                    <button class="btn btn-xs w-100 btn-success mb-5" type="submit">
                      Send "Reset Code" To My Email
                    </button>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalPasswordResetPassword">
                        Create a new password
                      </label>
                      <input type="password" class="form-control" id="modalPasswordResetPassword" placeholder="Create a new password">
                    </div>
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalPasswordResetResetPassword">
                        Retype password
                      </label>
                      <input type="password" class="form-control" id="modalPasswordResetPassword2" placeholder="Retype password">
                    </div>
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalPasswordResetResetPassword">
                        Enter "Reset Code"
                      </label>
                      <input type="password" class="form-control" id="modalPasswordResetPassword2" placeholder="Enter Reset Code">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn btn-xs w-100 btn-info" type="submit">
                      Reset Password
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    If we have your email on file, we will send you a reset code.<br>
                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal" href="#modalSigninHorizontal">Log in</a>.
                  </p>
    
                </div>
              </div>
    
            </div> <!-- / .row -->
          </div>
        </div>
      </div>
    </div>
    
    <!-- Payment -->
    <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
    
            <!-- Close -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalPaymentTitle">
              Add Payment
            </h2>
    
            <!-- Text -->
            <p class="fs-lg text-center text-muted mb-6 mb-md-8">
              Simplify your work flow in minutes.
            </p>
    
            <!-- Form -->
            <form>
    
              <!-- Name -->
              <div class="form-group">
                <label class="form-label" for="modalPaymentName">Name on card</label>
                <input class="form-control" id="modalPaymentName" type="text" placeholder="First Last">
              </div>
    
              <!-- Name -->
              <div class="form-group">
                <label class="form-label" for="modalPaymentNumbber">Card number</label>
                <input class="form-control" id="modalPaymentNumbber" type="number" placeholder="4242 4242 4242 4242">
              </div>
    
              <!-- Name -->
              <div class="form-group">
                <label class="form-label" for="modalPaymentDate">Exp. Date</label>
                <input class="form-control" id="modalPaymentDate" type="text" placeholder="03/2023">
              </div>
    
              <!-- Submit -->
              <button class="btn w-100 btn-info mt-3 lift">
                Add Payment Method
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footnotes -->
    <div class="modal fade" id="modalFootnotes" tabindex="-1" role="dialog" aria-labelledby="modalFootnotesTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <table class="table table-responsive table-sm table-hover">
                  <thead>
                  <tr>
                    <th colspan="2" id="FootNotes_1"class="display-5 text-center p-2">Footnotes - Business Plan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-xs">
                    <td scope="p-2">
                      <a class="list-link" href="#FN_1" data-scroll>[1]</a>
                    </td>
                    <td scope="p-2">
                      <p><a href="https://www.penguinrandomhouse.com/books/239718/the-passion-economy-by-adam-davidson/">The Passion Economy - The New Rules for Thriving in the Twenty-First Century</a><br><small>
                      Adam Davidson, author of The Passion Economy lays out the emergence of an economic paradigm offering new ways of making money, fresh paths toward professional fulfillment, and unprecedented opportunities for curious, ambitious individuals to combine the things they love with their careers.<br></small>
                      <small>by <b>Adam Davidson,</b> Penguin Random House | ISBN 9780804172776 - November 24, 2020</small></p>

                      <p><a href="https://www.forbes.com/sites/benjaminvaughan/2020/07/17/the-rise-of-the-passion-economyand-why-you-should-care/?sh=6eccc67f17b9">The Passion Economy - Defined:</a><br><small>
                      Simply put, the Passion Economy is a new wave of niche communities that are challenging traditional social media giants. Instead of the generalized and non-specific content of larger social media platforms, the niche communities focus on creating and sharing content that resonates with individuals.<br></small>
                      <small>by <b>Benjamin Vaughan,</b> Contributor,</b> FORBES - July 17, 2020</small></p>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_2" data-scroll>[2]</a>
                    </td>
                    <td scope="p-2"><a href="https://a16z.com/2019/10/08/passion-economy/">The Passion Economy and the Future of Work</a><br>
                      <small>by <b>Li Jin,</b> a16z.com,</b> Andreessen Horowitz - October 8, 2019</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_2" data-scroll>[3]</a>
                    </td>
                    <td scope="p-2"><a href="https://www.penguinrandomhouse.com/books/239718/the-passion-economy-by-adam-davidson/">
                      How the Passion Economy will disrupt media, education, and countless other industries</a><br><small>
                      Clayton Christensen's disruption theory and what it means for the Passion Economy<br></small>
                      <small>by <b>Li Jin [Newsletter],</b> Clayton Christensen</b> - May 14, 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_4" data-scroll>[4]</a>
                    </td>
                    <td scope="p-2">
                      <p><a href="https://behavioralscientist.org/the-passion-economy-conversation-with-adam-davidson/">The Passion Economy: A Conversation with Adam Davidson</a><br><small>
                      Adam Davidson, author of The Passion Economy defines the "widget-economy"  <br></small>
                      <small>by <b>Jon Jachimowicz,</b> Behavioral Scientist | February 17, 2020</small></p>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_5" data-scroll>[5]</a>
                    </td>
                    <td scope="p-2"><a href="https://www.embroker.com/blog/what-is-the-gig-economy/">The Gig-Economy - Defined</a><br><small>
                      The gig-economy is a free market system in which temporary, flexible jobs are commonplace and companies bring on independent contractors and freelancers instead of full-time employees, and in many cases, for short-term engagements.</small>
                      <a href="https://www.embroker.com/blog/what-is-the-gig-economy/"><br>
                      What Is The gig-economy?</a><br>
                      <small><b>Embroker Insurance Services, LLC</b> - 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#6_Market" data-scroll>[6]</a>
                    </td>
                    <td scope="p-2"><a href="https://medium.com/digital-marketing-lab/what-is-the-passion-economy-ce326c2a1099">What is the Passion Economy? - Exploring the creator economy</a><br>
                      <small>by <b>Casey Botticello,</b> Digital Marketing Lab,</b> - March 6, 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_7" data-scroll>[7]</a>
                    </td>
                    <td scope="p-2"><a href="https://www.verdict.co.uk/passion-economy-worth/">
                      Digital Disruption - Passion Economy is now worth over $38bn globally</a><br><small>
                      According to Disciple Media, the industry grew to a global market value of $38.66bn in 2019. The London-based company brought together forecast data from sources including OfCom, Deloitte and Forbes.<br></small>
                      by <b>Robert Scammell,</b> Verdict<small> - September 25, 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_8" data-scroll>[8]</a>
                    </td>
                    <td scope="p-2"><b>Total Addressable Market - TAM</b><br>

                      <p><a href="https://www.statista.com/statistics/237974/online-advertising-spending-worldwide/">Digital advertising spending worldwide 2018-2023</a><br><small>
                      Digital advertising spending worldwide amounted to 378.16 billion U.S. dollars in 2020, increasing and not contracting versus the 2019 figure in spite of the economic impact of the covid-19 pandemic.<br></small>
                      <small><b>Statista Research Department,</b> - May 28, 2021</small></p>

                      <p><a href="https://www.businesswire.com/news/home/20210105005787/en/Worldwide-Online-Classifieds-Industry-to-2024---Rise-in-Use-of-Mobile-Wallets-is-Driving-Growth---ResearchAndMarkets.com">Worldwide Online Classifieds Industry to 2024</a><br><small>
                      The global online classified market is expected to reach US $32.33 billion in 2024, increasing at a CAGR  of 9.40%, for the duration spanning 2020-20241.<br></small>
                      <small><b>Businesswire, A Berkshire Hathaway Company,</b> - January 5, 2021</small></p>

                      <p><a href="https://brodmin.com/case-studies/gig-economy-case-study/">gig-economy Size</a><br><small>
                      It is estimated that the Global gig-economy will be worth 347 billion dollars in 2021. On a global scale, design and tech freelance jobs are the most popular with 59% of gig workers doing them, but over saturation of talent in these fields is bringing down the pay.<br></small>
                      <small>by <b>Kris Broda,</b> brodmin.com - January 5, 2021</small></p>

                      <p><a href="https://brodmin.com/case-studies/gig-economy-case-study/">Global e-commerce Forecast 2021</a><br><small>
                      Following a 25.7% surge in 2020, to $4.213 trillion, we expect retail e-commerce sales worldwide to climb a further 16.8% this year, to $4.921 trillion.<br></small>
                      <small>by <b>Arin von Abrams, </b> Insider Intelligence - July 7, 2021</small></p>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_9" data-scroll>[9]</a>
                    </td>
                    <td scope="p-2"><a href="https://www.project-disco.org/competition/050420-evolution-of-ad-spend-and-the-dynamics-of-digital/">
                      Evolution of Ad Spend and the Dynamics of Digital</a><br><small>
                      Pressure on digital native advertisers will only get more intense as traditional media companies increasingly exploit the benefits of personalized digital advertising ... This kind of competition likely means continued value gains for advertisers, plentiful opportunities for creative content producers, and lots of great content for consumers.<br></small>
                      by <b>Kay Jebelli,</b> Verdict<small> - May 4, 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_9" data-scroll>[10]</a>
                    </td>
                    <td scope="p-2"><a href="https://www.verdict.co.uk/passion-economy-worth/">
                      Digital Disruption - Passion Economy is now worth over $38bn globally</a><br><small>
                      According to Disciple Media, the industry grew to a global market value of $38.66bn in 2019. The London-based company brought together forecast data from sources including OfCom, Deloitte and Forbes.<br></small>
                      by <b>Robert Scammell,</b> Verdict<small> - September 25, 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#13_Target" data-scroll>[11]</a>
                    </td>
                    <td scope="p-2"><a href="https://brodmin.com/case-studies/gig-economy-case-study/">Who participates in the gig-economy?</a><br><small>
                      It is estimated that the global gig-economy will be worth 347 billion dollars in 2021. On a global scale, design and tech freelance jobs are the most popular with 59% of gig workers doing them, but over saturation of talent in these fields is bringing down the pay.<br></small>
                      <small>by <b>Kris Broda,</b> brodmin.com - January 5, 2021</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_11" data-scroll>[12]</a>
                    </td>
                    <td scope="p-2"><a href="https://unctad.org/news/how-covid-19-triggered-digital-and-e-commerce-turning-point">
                      How COVID-19 triggered the digital and e-commerce turning point</a><br><small>
                      In years to come, we will look back at 2020 as the moment that changed everything. Nowhere else has unprecedented and unforeseen growth occurred as in the digital and e-commerce sectors, which have boomed amid the COVID-19 crisis.<br></small>
                      by <b>Andrey Popov,</b> Verdict<small> - March 15, 2021</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#Industry" data-scroll>[13]</a>
                    </td>
                    <td scope="p-2"><a href="https://brodmin.com/case-studies/gig-economy-case-study/">gig-economy Size</a><br><small>
                      It is estimated that the Global gig-economy will be worth 347 billion dollars in 2021. On a global scale, design and tech freelance jobs are the most popular with 59% of gig workers doing them, but over saturation of talent in these fields is bringing down the pay.<br></small>
                      <small>by <b>Kris Broda,</b> brodmin.com - January 5, 2021</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link" href="#FN_2" data-scroll>[14]</a>
                    </td>
                    <td scope="p-2"><a href="https://hbr.org/2020/02/the-era-of-antisocial-social-media">
                      The Era of Antisocial Social Media</a><br><small>
                      When you look at who is — and more importantly, who is not — driving the growth and popularity of social platforms, a key demographic appears to be somewhat in retreat: young people. They’re craving privacy, safety, and a respite from the throngs of people on social platforms and gravitating toward more intimate destinations.<br></small>
                      <small>by <b>Sara Wilson,</b> Harvard Business Review</b> - February 05, 2020</small>
                    </td>
                  </tr>
                  <tr>
                    <td scope="p-2">
                      <a class="list-link mb-2" href="#FN_15" data-scroll>[15]</a>
                    </td>
                    <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                      The Cold Start Problem</a><br>
                       <small>The Cold Start Problem reveals what makes winning networks thrive, why some startups fail to successfully scale, and, most crucially, why products that create and compete using the network effect are vitally important today.<br></small>
                      <small>by <b>Andrew Chen,</b> - Dec 7, 2021. Reviewed by: andreessen horowitz</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link mb-2" href="#FN_15" data-scroll>[16]</a>
                    </td>
                    <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                      Global, US Populations by segments</a><br>
                      <small><b>Worldometers.com, World Bank, Statista.com</b></small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link mb-2" href="#FN_17" data-scroll>[17]</a>
                    </td>
                    <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                      How the Coronavirus Outbreak Has – and Hasn’t – Changed the Way Americans Work</a><br>
                      <small><b>Pew Research Center </b> - Dec 9, 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link mb-2" href="#FN_18" data-scroll>[18]</a>
                    </td>
                    <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                      More Connected Than Ever Before: </a><br>
                      <small>How We Build Our Digital Comfort Zones</small>
                      <small><b>Kaspersky Daily </b> - 2020</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2">
                      <a class="list-link mb-2" href="#FN_19" data-scroll>[19]</a>
                    </td>
                    <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                      Why The Creator Economy Is Worth Watching In 2022</a><br><small>
                      With more than 50 million independent content creators, curators, and community builders fueling this new trend, this generation of micro-entrepreneurs is currently valued at $20 billion with estimations that it could grow to a $104.2 billion market in 2022 — with $800 million in venture capital invested...<br></small>
                      <small><b>Forbes,</b> - Dec 29, 2021. Reviewed by: andreessen horowitz</small>
                    </td>
                  </tr>

                  <tr>
                    <td scope="p-2"><a class="list-link" href="#IN_1" data-scroll>(1)</a></td>
                    <td><b>About Our Name: "Si Quis" Software</b><br><small>
                      The concept of classified ads began appearing in England in the 1600s. Handwritten messages were nailed to posts by scribes and became known as “Si Quis”,[5] a term borrowed from ancient Rome where most posted notices began with the words Si Quis — meaning "If anybody knows of…"
                      <br><br>
                      Today the sheer number and variety of classifieds worldwide has grown exponentially into broad, albeit fragmented horizontal markets. Never before has creating and posting a “Si Quis” been so easy and affordable with a reach far beyond the street posts of the 17th century.   
                      <br><br>
                      Most importantly however, never before have individuals had the resources to pursue things they are passionate about, which brings us to back to our name… Si Quis Software.   
                      <br><br>
                      We've taken liberty to expand upon the definitions of "Si Quis", taking it beyond the concept of classifieds in the 1600's and associating it with the emergence of the Passion Economy of the 21st century. "If anybody knows of something related to my passions…”
                      <br><br></small>
                      <a href="https://www.cbc.ca/radio/undertheinfluence/this-was-the-first-classified-ad-ever-published-in-north-america-1.5462237">Under the Influence - The first classified ads ever published</a><br>
                      Classified ads began appearing in England in the 1600s. They were handwritten, and nailed to posts. Scribes made their living writing announcements, which were, for all intents and purposes, classified ads. And these ads weren't called ads — they were called Si quis.<br>
                      by <b>CBC Radio</b><small> - Feb 13, 2020</small>
                    </td>
                  </tr>
                </tbody>
                </table>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>

    <!-- Infonotes -->
    <div class="modal fade" id="modalInfonotes" tabindex="-1" role="dialog" aria-labelledby="modalFootnotesTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <table class="table table-responsive table-sm table-hover">
                  <thead>
                    <tr>
                      <th colspan="2" class="display-4 text-strong text-center p-2">Info Notes - Business Plan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td scope="p-2"><a class="list-link text-info" href="#IN_1" data-scroll>(1)</a></td>
                    <td><b>About Our Name: "Si Quis" Software</b><br><small>
                      The concept of classified ads began appearing in England in the 1600s. Handwritten messages were nailed to posts by scribes and became known as “Si Quis”, a term borrowed from ancient Rome where most posted notices began with the words Si Quis — meaning "If anybody knows of…"
                      <br><br>
                      Today the sheer number and variety of classifieds worldwide has grown exponentially into broad, albeit fragmented horizontal markets. Never before has creating and posting a “Si Quis” been so easy and affordable with a reach far beyond the street posts of the 17th century.   
                      <br><br>
                      Most importantly however, never before have individuals had the resources to pursue things they are passionate about, which brings us to back to our name… Si Quis Software.   
                      <br><br>
                      We've taken liberty to expand upon the definitions of "Si Quis", taking it beyond the concept of classifieds in the 1600's and associating it with the emergence of the Passion Economy of the 21st century. "If anybody knows of something related to my passions…”
                      <br><br></small>
                      <a href="https://www.cbc.ca/radio/undertheinfluence/this-was-the-first-classified-ad-ever-published-in-north-america-1.5462237">Under the Influence - The first classified ads ever published</a><br>
                      Classified ads began appearing in England in the 1600s. They were handwritten, and nailed to posts. Scribes made their living writing announcements, which were, for all intents and purposes, classified ads. And these ads weren't called ads — they were called Si quis.<br>
                      by <b>CBC Radio</b><small> - Feb 13, 2020</small>
                    </td>
                  </tr>
                    <tr>
                      <td scope="p-2">
                        <a class="text-info" data-bs-dismiss="modal">(2)</a>
                      </td>
                      <td scope="p-2">
                        <p><a href="https://www.penguinrandomhouse.com/books/239718/the-passion-economy-by-adam-davidson/">The Passion Economy - The New Rules for Thriving in the Twenty-First Century</a><br>
                        Adam Davidson, author of The Passion Economy lays out the emergence of an economic paradigm offering new ways of making money, fresh paths toward professional fulfillment, and unprecedented opportunities for curious, ambitious individuals to combine the things they love with their careers.<br>
                        <small>by <b>Adam Davidson,</b> Penguin Random House | ISBN 9780804172776 - November 24, 2020</small></p>

                        <p><a href="https://www.forbes.com/sites/benjaminvaughan/2020/07/17/the-rise-of-the-passion-economyand-why-you-should-care/?sh=6eccc67f17b9">The Passion Economy - Defined:</a><br>
                        Simply put, the Passion Economy is a new wave of niche communities that are challenging traditional social media giants. Instead of the generalized and non-specific content of larger social media platforms, the niche communities focus on creating and sharing content that resonates with individuals.<br>
                        <small>by <b>Benjamin Vaughan,</b> Contributor,</b> FORBES - July 17, 2020</small></p>

                        <p><a href="https://passion.io/blog/passion-economy-future-of-work">Passion Economy: What Is It, and Why Is It the Future of Work?</a><br>
                        The Passion Economy lets freelancers and entrepreneurs scale businesses exponentially and earn passive income. It removes the shackles associated with freelance, ‘gig’ work, and provides platforms for users to produce tangible and intangible content that can be consumed at all times, creating a very desirable place for brands to seek their attention.<br>
                        <small>by <b>Liam Donoghue,</b> Marketing Executive,</b> passion.io - 2021</small></p>
                      </td>
                    </tr>

                    <tr>
                      <td scope="p-2">
                        <a class="text-info" data-bs-dismiss="modal">(3)</a>
                      </td>
                      <td scope="p-2"><a href="https://a16z.com/2019/10/08/passion-economy/">The Passion Economy and the Future of Work</a><br>
                        <small>by <b>Li Jin,</b> a16z.com,</b> Andreessen Horowitz - October 8, 2019</small>
                      </td>
                    </tr>

                    <tr>
                      <td scope="p-2">
                        <a class="text-info" data-bs-dismiss="modal">(4)</a>
                      </td>
                      <td scope="p-2"><a href="https://www.penguinrandomhouse.com/books/239718/the-passion-economy-by-adam-davidson/">
                        How the Passion Economy will disrupt media, education, and countless other industries</a><br>
                        Clayton Christensen's disruption theory and what it means for the Passion Economy<br>
                        <small>by <b>Li Jin [Newsletter],</b> Clayton Christensen</b> - May 14, 2020</small>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-pattern-2">
      <div class="container-md">

        <!-- Brand -->
        <a class="navbar-brand lift" href="./index.html" style="color:orange"><b>
          <img src="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" alt="" width="28" height="28" class="d-inline-block align-text-bottom"> Si Quis </b><span class="text-info"> Software</span>
        </a>
    
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button> 

          <!-- Navigation -->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="text-white nav-link" id="navbarLandings" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Who We Are
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-2" aria-labelledby="navbarLandings">
                <div class="row gx-0">
                  <div class="col-12 col-lg-12">
                    <div class="dropdown-body">
                      <div class="row gx-0">
                        <div class="col-sm-12 col-md-6">
                          <!-- Heading -->
                          <h1 class="text-info">
                            <b>Who We Are</b>
                          </h1>
                        </div>

                        <div class="col-sm-12 col-md-6">
                          <!-- Heading -->
                          <h4 class="dropdown-header" style="color:orange">
                            <b>About</b>
                          </h4>
                          <!-- List -->
                          <a class="dropdown-item" href="./SiQuis-ABOUT-1.html">
                            Si Quis Software
                          </a>
                          <a class="dropdown-item" href="./SiQuis-ABOUT-2.html">
                            The Passion Economy
                          </a>
                          <a class="dropdown-item mb-5" href="./SiQuis-ABOUT-3.html">
                            The Team
                          </a>    
                          <!-- Heading -->
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Our Name</b>
                          </h4>
                          <!-- List -->
                          <a class="dropdown-item mb-5" href="./SiQuis-ABOUT-5.html">
                            <i>Si Quis</i>
                          </a>
                          <!-- Heading -->
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Contact Us</b>
                          </h4>
                          <!-- List -->
                          <a href="mailto:support@siquisoft.com" class="text-reset">Email Us</a>

                        </div>
                      </div> 
                    </div>
                  </div>
                </div> 
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="text-white nav-link" id="navbarLandings" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                What We Build
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-2" aria-labelledby="navbarLandings">
                <div class="row gx-0">
                  <div class="col-12 col-lg-12">
                    <div class="dropdown-body">
                      <div class="row gx-0">
                        <div class="col-sm-12 col-md-6">
                          <!-- Heading -->
                          <h1 class="text-info">
                            <b>What We Build</b>
                          </h1>
                        </div>

                        <div class="col-sm-12 col-md-6">
                          <!-- Heading -->
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Overview</b>
                          </h4>
                          <!-- List -->
                          <a class="dropdown-item mb-5" href="./SiQuis-Platform-1.html">
                            Platform
                          </a>
                          <!-- Heading -->
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Back-end</b>
                          </h4>
                          <!-- List -->
                          <a class="dropdown-item" href="./SiQuis-Platform-2.html">
                            Management
                          </a>
                          <a class="dropdown-item mb-5" href="./SiQuis-Platform-3.html">
                            Operations
                          </a>
                          <!-- Heading -->
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Front-end</b>
                          </h4>
                          <!-- List -->
                          <a class="dropdown-item" href="./SiQuis-Platform-4.html">
                            Engaging Themes
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- / .row -->
            </li>

            <li class="nav-item">
              <!-- Button -->
              <a class="btn btn btn-xs text-black lift ms-sm-0 mt-sm-3 ms-lg-10 mt-lg-1" style="background-color:orange" href="./index.html">
                Exit Member Area 
              </a>
            </li>

            <!-- Avatar 
            <li class="nav-item dropstart">
              <a class="text-white nav-link lift" id="navbarLandings" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                <img class="avatar-img rounded-circle bg-black" style="width:30px" src="https://i.postimg.cc/J0Gk2M6X/User-White.png" alt="...">
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-2 mt-8" aria-labelledby="navbarLandings">
                <div class="row gx-0">
                  <div class="col-12 col-lg-12">
                    <div class="dropdown-body">
                      <div class="row gx-0">
                        <div class="col-sm-12 col-md-6">
                           
                          <h1 class="text-info">
                            <b>Account Information</b>
                          </h1>
                        </div>

                        <div class="col-sm-12 col-md-6">
                           
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Acount</b>
                          </h4>
                           
                          <a class="dropdown-item" href="./SiQuis-Account-1.html">
                            General
                          </a>
                          <a class="dropdown-item" href="./SiQuis-Account-2.html">
                            Security
                          </a>
                          <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninHorizontal">
                            Login
                          </a>   
                           
                          <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupHorizontal">
                            Signup
                          </a>
                          <a class="dropdown-item mb-5" data-bs-toggle="modal" href="#modalPasswordReset">
                            Reset Password
                          </a>
                           
                          <h4 class="dropdown-header" style="color:orange">
                            <b>Contact Us</b>
                          </h4>
                          
                          <a href="mailto:support@siquisoft.com" class="text-reset">Email Us</a>
                          -->

                        </div>
                      </div> 
                    </div>
                  </div>
                </div> 
              </div>
            </li>
          </ul>

        </div>
      </div>
    </nav>

    <!-- WELCOME -->
    <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-40 bg-cover jarallax" style="background-image: url(https://i.postimg.cc/pVZ4jQnt/Harbor-Air-Elec.jpg);">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 text-center">

            <!-- Headin -->
            <h1 class="display-1 fw-bold text-white" data-aos="fade-up" data-aos-delay="100">
              Imagine The Possibilities
            </h1>
            <!-- Text -->
            <p class="lead text-white mb-6 mx-auto" data-aos="fade-up" data-aos-delay="100" style="max-width: 600px;">
              <h2 class="text-white">Our plan to succeed in the thriving Passion Economy</h2><br>
            </p>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg> 
      </div>
    </div>

   <!-- Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-3 mt-3">
            <nav id="toc" data-toggle="toc" class="sticky-top">
              <ul class="nav navbar-nav">
                <!-- Heading -->
                <h4 class="text-uppercase mt-5 mb-2">
                  <b>Business Plan</b>
                </h4>
                <h6 class="fw-bold">
                  TABLE OF CONTENTS<br>
                  January 1, 2022
                </h6>
                
                <li>
                  <a class="list-link text-info mt-2" href="#PP_Summary" data-scroll><b>POWERPOINT PRESENTATION</b></a>
                  <div class="mb-1 fs-6">Read time: </span class=""> < 7 minutes.</span></div>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_1" data-scroll>1 | Introduction</a>
                </li>
                <li>
                  <a class="list-link ms-2 " href="#Slide_2" data-scroll>2 | The Passion Economy</a>
                </li>
                <li>
                  <a class="list-link ms-2 " href="#Slide_3" data-scroll>3 | The Problem</a>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_4" data-scroll>4 | The Solution</a>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_5" data-scroll>5 | Why Now?</a>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_6" data-scroll>6 | Market Potential</a>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_7" data-scroll>7 | Competition</a>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_8" data-scroll>8 | Magic Quadrant</a>
                </li>
                <li>
                  <a class="list-link ms-2" href="#Slide_9" data-scroll>9 | Business Model</a>
                </li>
                <li>
                  <a class="list-link" href="#Slide_10" data-scroll>10 | Go To Market</a>
                </li>
                <li>
                  <a class="list-link" href="#Slide_11" data-scroll>11 | Team</a>
                </li>
                <li>
                  <a class="list-link" href="#Slide_12" data-scroll>12 | Financials / Ask</a>
                </li>
                <li>
                  <a class="list-link" href="#Slide_13" data-scroll>13 | Vision</a>
                </li>                 
                <li class="list-item mb-3">
                  <a class="list-link" href="#Slide_14" data-scroll>14 | Footnotes</a>
                </li>
                <li class="mb-3">
                  <div><a class="list-link" href="./SiQuis_Exec_020222.html" ><b>EXECUTIVE SUMMARY</b></a><div>
                  <div class="fs-6">Read time: </span class=""> < 15 minutes.</span></div>
                </li>
                <li class="mb-3">
                  <div><a class="list-link" href="./SiQuis-BusPlan_HOME.html" ><b>DETAILED BUSINESS PLAN</b></a><div>
                  <div class="fs-6">Read time: </span class=""> < 30 minutes.</span></div>
                </li>
                <li class="list-item mb-1">
                  <a class="list-link" href="#TOP_LEGAL"><small><b>Legal Information</b></small></a>
                </li>
                <li class="list-item mb-3">
                  <a class="list-link" href="#FootNotes_1" data-scroll><small><b>Footnotes</a></b></small>
                </li>
                <li class="list-item mb-10">
                  Download:<br>
                  <a class="btn btn btn-xs btn-info text-white lift me-8 my-1" style="width: 200px" href="./SiQuis_PP_Deck_020222.pdf">PP Presentation</a> 
                  <a class="btn btn btn-xs btn-info text-white lift me-8 my-1" style="width: 200px" href="./SiQuis_Exec_Summary_020222.pdf">Executive Summary</a> 
                  <a class="btn btn btn-xs btn-info text-white lift me-8 my-1" style="width: 200px" href="./SiQuis_BusPlan_020222.pdf">Detailed Business Plan</a> 
                </li>
              </ul>            
            </nav>
          </div>

          <div class="col-sm-12 col-md-9 mt-5">
            <div class="row">
            <h1 class="display-4 mt-5" style="color:orange" id="TOP_HOME">
              <img src="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" alt="" width="45" height="45" class="d-inline-block align-text-bottom"><b>Si Quis </b><span class="text-info"> Software</span>
            </h1>
            <small class="text-muted">empowering the passion economy</small>
            <br>

            <hr>
            <h2 class="display-5 text-info" id="PP_Summary">POWERPOINT PRESENTATION </h2>
            <hr>
            <div class="d-block-sm d-none-md">Due to their size and layout, these slides are best viewed on a larger screen.</div>
            <br>
            <div class="mt-2 mb-1" id="Slide_1">Slide 1 | Si Quis Software</div>
              <img src="https://i.postimg.cc/c1wn7Rs5/SQS-PP-01.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="img-fluid mt-5 mb-1" id="Slide_2">Slide 2 | The Passion Economy</div>
              <img src="https://i.postimg.cc/FKxbdQH9/SQS-PP-02.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_3">Slide 3 | The Problem</div>
              <img src="https://i.postimg.cc/FRZB1yN3/SQS-PP-03.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_4">Slide 4 | The Solution</div>
              <img src="https://i.postimg.cc/8kZYSmyV/SQS-PP-04.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_5">Slide 5 | Why Now?</div>
              <img src="https://i.postimg.cc/0Qx48WR9/SQS-PP-05.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_6">Slide 6 | Market Potential</div>
              <img src="https://i.postimg.cc/3w26QMqL/SQS-PP-06.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_7">Slide 7 | Competition</div>
              <img src="https://i.postimg.cc/XvFMNBrk/SQS-PP-07.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_8">Slide 8 | Competition - Magic Quadrant</div>
              <img src="https://i.postimg.cc/L6srYbqX/SQS-PP-08.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_9">Slide 9 | Business Model</div>
              <img src="https://i.postimg.cc/DwJH54P3/SQS-PP-09.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_10">Slide 10 | Go To Market</div>
              <img src="https://i.postimg.cc/pLfx7HXd/SQS-PP-10.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_11">Slide 11 | Team</div>
              <img src="https://i.postimg.cc/J7xfhLzv/SQS-PP-11.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_12">Slide 12 | Financial Projections | Investment Opportunity</div>
              <img src="https://i.postimg.cc/3RXH107x/SQS-PP-12.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_13">Slide 13 | Vision | Thank you!</div>
              <img src="https://i.postimg.cc/pXvnsmrV/SQS-PP-13.png" alt="" class="ms-n3 " style="height: 100%">
            <div class="mt-5 mb-1" id="Slide_14">Slide 14 | Footnotes</div>
              <img src="https://i.postimg.cc/zvx62nQ8/SQS-PP-14.png" alt="" class="ms-n3 " style="height: 100%">


            <div class="mt-5">To gain deeper insight into Si Quis Software, we'd love speaking with you about our journey. You can reach me here:</div>
            <div class="mt-5"><b>Brent Bostwick</b><br>
              <a href="mailto:brent@siquisoft.com" class="text-reset"><span class="text-info">brent@siquisoft.com</span></a></small><br>
              206-498-2957
            </div>
            <div class="mt-5">You can also learn more about Si Quis Software and the Passion Economy by taking a look at
              our Executive Summary or our Detailed Business Plan by clicking on the links here.
            </div>
            <div class="mt-5 mb-5">
              Goto our <a class="" href="./SiQuis_Exec_020222.html" data-scroll>EXECUTIVE SUMMARY</a>
            </div>
            <div class="mt-5">
              Goto our <a class="" href="./SiQuis_Plan_020222.html" data-scroll>DETAILED BUSINESS PLAN</a>
            </div>
            
            <div class="mt-5">
              Thank you !
            </div>
            <hr>

            <h5 class="display-6 text-black mt-5" id="TOP_LEGAL"><b>LEGAL INFORMATION</b></h5>

            <p>To read about our confidentially statement, investment summary, transaction, capitalization table and other important information regarding this plan, please see our detailed documentation contained within the Detailed Business Plan. <br><br><a class="row d-inline text-info ms-1" onclick="changeText10()" id="myBtn10">Read Transaction Information...</a>
            </p>
          
            <div><span id="dots10"></span>
              <span id="more10" class="text-secondary">
                <div class="container mb-5">

                  <hr>
                  <h4 class="text-info" id="13_ConStatement">15.1 | Transaction Information </h4>
                  <hr>

                  <p class="fs-6">
                    TRANSACTION<br>
                    Si Quis Software, LLC is seeking to raise $500,000 USD in the form of (a) sale of Preferred Stock in the amount of $500,000 with a pre-money valuation of $5,000,000 USD, representing a 9.09% equity interest in Si Quis Software, Incorporated. The “first money” in minimum tranche size is $250,000 and will receive an additional 5% in Warrants. Second (and beyond) money in minimum tranche size of $25,000 or the remainder of availability. 
                    <br><br>

                    (b) We anticipate securing a Series A round of financing of $2,000,000 to $5,000,000 to accelerate growth of Si Quis Software 12 months after the initial round of financing. 
                    <br><br>
                    
                    The proceeds will be used to: (i) complete "front-end" programming of the siquisoft platform (the "beta-site"), (ii) launch a version of the beta-site (planned as "Aircraftwest"), (iii) operate the beta-site in real-time, (iv) accelerate back-end programming of the siquisoft platform and (v) fund general operations for approximately one year. 
                  </p>

                  <hr>
                  <h4 class="text-info" id="16_OtherInfo">15.2 | Other Information </h4>
                  <hr>

                  <p class="fs-6">
                    ATTORNEY<br>
                    Matthew P. Smith<br>
                    FIKSO KRETSCHMER SMITH DIXON ORMSETH PS<br>
                    901 5th Avenue | Suite 4000 | Seattle, WA 98121 206.374.7092 (direct) <br>
                    206.448.3444 (fax) | 206.448.1818 (office) matt@fksdo.com<br>
                    <br>

                    OTHER INFORMATION<br>
                    Company: Si Quis Software, LLC, dba Siquisoft.com<br>
                    Will incorporate prior to offering.<br>
                    Type of instrument: Preferred Stock<br>
                    Pre-Money Valuation: $5,000,000<br>
                    Minimum to Close: $500,000 <br>
                    Conditions to Closing: None at this time<br>
                    Liquidation Preference: None at this time<br>
                    Conversion: Not applicable<br>
                    Anti-dilution Provisions Voting: None at this time<br>
                    Protective Provisions: None at this time<br>
                    Information Rights:<br>
                    Subject to customary exceptions, holders of Preferred Stock will be granted access to Si Quis Software's facilities and personnel during normal business hours and with reasonable advance notification. Additionally, the Company will deliver to holders of Preferred Stock:
                    (a) Annual and quarterly financial statements, and
                    (b) an operating budget forecasting Si Quis Software's revenues, expenses, and cash position on a month-to-month basis for each upcoming fiscal year.
                    <br><br>
                         
                    Bring Along:<br>
                    All current and future holders of greater than 1% of the Common Stock and all holders of Preferred Stock, Series A Preferred Stock and Series B Preferred Stock shall be required to enter into an agreement that provides that such stockholders will vote their shares in favor of a sale of the Company if such transaction is approved by the Company's board of directors and the holders of a majority of all outstanding Preferred and Common shares voting together as a single class.
                    <br><br>

                    Right of First Refusal and Co-Sale Board:<br>
                    With respect to any proposed sales by current and future holders of greater than 1% of the Common Stock of Si Quis Software, (i) Si Quis Software first and the holders of Series B Preferred second will have a customary right of first refusal, and (ii) the holders of Series B Preferred will be granted a co-sale right on standard terms and conditions.
                    <br><br>

                    Board: <br>
                    The board of directors will have five members: (i) three will be appointed by a majority of the Company's common stock, and (ii) two will be appointed by a majority of the Common Stock holders.
                    <br><br>
                  </p>
                </div>
              </span>
            </div>

            <div class="container mb-10" id="FootNotes_1">
              <div class="row">
                <a class="text-info ms-sm-2" onclick="changeText11()" id="myBtn11"><br>Display Footnotes...</a>
          
                <div><span id="dots11"></span>
                  <span id="more11" class="text-secondary">
                    <div class="container">
                      <table class="table table-responsive table-sm table-hover">
                        <thead>
                          <tr>
                            <th colspan="2" class="display-5 text-center p-2">Footnotes - Business Plan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_2" data-scroll>[1]</a>
                            </td>
                            <td scope="p-2"><a href="https://a16z.com/2019/10/08/passion-economy/">The Passion Economy and the Future of Work</a><br>
                              <small>by <b>Li Jin,</b> a16z.com,</b> Andreessen Horowitz - October 8, 2019</small>
                            </td>
                          </tr>

                          <tr class="text-xs">
                            <td scope="p-2">
                              <a class="list-link" href="#FN_1" data-scroll>[2]</a>
                            </td>
                            <td scope="p-2">
                              <p><a href="https://www.penguinrandomhouse.com/books/239718/the-passion-economy-by-adam-davidson/">The Passion Economy - The New Rules for Thriving in the Twenty-First Century</a><br><small>
                              Adam Davidson, author of The Passion Economy lays out the emergence of an economic paradigm offering new ways of making money, fresh paths toward professional fulfillment, and unprecedented opportunities for curious, ambitious individuals to combine the things they love with their careers.<br></small>
                              <small>by <b>Adam Davidson,</b> Penguin Random House | ISBN 9780804172776 - November 24, 2020</small></p>

                              <p><a href="https://www.forbes.com/sites/benjaminvaughan/2020/07/17/the-rise-of-the-passion-economyand-why-you-should-care/?sh=6eccc67f17b9">The Passion Economy - Defined:</a><br><small>
                              Simply put, the Passion Economy is a new wave of niche communities that are challenging traditional social media giants. Instead of the generalized and non-specific content of larger social media platforms, the niche communities focus on creating and sharing content that resonates with individuals.<br></small>
                              <small>by <b>Benjamin Vaughan,</b> Contributor,</b> FORBES - July 17, 2020</small></p>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_2" data-scroll>[3]</a>
                            </td>
                            <td scope="p-2"><a href="https://www.penguinrandomhouse.com/books/239718/the-passion-economy-by-adam-davidson/">
                              How the Passion Economy will disrupt media, education, and countless other industries</a><br><small>
                              Clayton Christensen's disruption theory and what it means for the Passion Economy<br></small>
                              <small>by <b>Li Jin [Newsletter],</b> Clayton Christensen</b> - May 14, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_4" data-scroll>[4]</a>
                            </td>
                            <td scope="p-2">
                              <p><a href="https://behavioralscientist.org/the-passion-economy-conversation-with-adam-davidson/">The Passion Economy: A Conversation with Adam Davidson</a><br><small>
                              Adam Davidson, author of The Passion Economy defines the "widget-economy"  <br></small>
                              <small>by <b>Jon Jachimowicz,</b> Behavioral Scientist | February 17, 2020</small></p>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_5" data-scroll>[5]</a>
                            </td>
                            <td scope="p-2"><a href="https://www.embroker.com/blog/what-is-the-gig-economy/">The Gig-Economy - Defined</a><br><small>
                              The gig-economy is a free market system in which temporary, flexible jobs are commonplace and companies bring on independent contractors and freelancers instead of full-time employees, and in many cases, for short-term engagements.</small>
                              <a href="https://www.embroker.com/blog/what-is-the-gig-economy/"><br>
                              What Is The gig-economy?</a><br>
                              <small><b>Embroker Insurance Services, LLC</b> - 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#6_Market" data-scroll>[6]</a>
                            </td>
                            <td scope="p-2"><a href="https://medium.com/digital-marketing-lab/what-is-the-passion-economy-ce326c2a1099">What is the Passion Economy? - Exploring the creator economy</a><br>
                              <small>by <b>Casey Botticello,</b> Digital Marketing Lab,</b> - March 6, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_7" data-scroll>[7]</a>
                            </td>
                            <td scope="p-2"><a href="https://www.verdict.co.uk/passion-economy-worth/">
                              Digital Disruption - Passion Economy is now worth over $38bn globally</a><br><small>
                              According to Disciple Media, the industry grew to a global market value of $38.66bn in 2019. The London-based company brought together forecast data from sources including OfCom, Deloitte and Forbes.<br></small>
                              <small>by <b>Robert Scammell,</b> Verdict<small> - September 25, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_8" data-scroll>[8]</a>
                            </td>
                            <td scope="p-2"><b>Total Addressable Market - TAM</b><br>

                              <p><a href="https://www.statista.com/statistics/237974/online-advertising-spending-worldwide/">Digital advertising spending worldwide 2018-2023</a><br><small>
                              Digital advertising spending worldwide amounted to 378.16 billion U.S. dollars in 2020, increasing and not contracting versus the 2019 figure in spite of the economic impact of the covid-19 pandemic.<br></small>
                              <small><b>Statista Research Department,</b> - May 28, 2021</small></p>

                              <p><a href="https://www.businesswire.com/news/home/20210105005787/en/Worldwide-Online-Classifieds-Industry-to-2024---Rise-in-Use-of-Mobile-Wallets-is-Driving-Growth---ResearchAndMarkets.com">Worldwide Online Classifieds Industry to 2024</a><br><small>
                              The global online classified market is expected to reach US $32.33 billion in 2024, increasing at a CAGR  of 9.40%, for the duration spanning 2020-20241.<br></small>
                              <small><b>Businesswire, A Berkshire Hathaway Company,</b> - January 5, 2021</small></p>

                              <p><a href="https://brodmin.com/case-studies/gig-economy-case-study/">gig-economy Size</a><br><small>
                              It is estimated that the Global gig-economy will be worth 347 billion dollars in 2021. On a global scale, design and tech freelance jobs are the most popular with 59% of gig workers doing them, but over saturation of talent in these fields is bringing down the pay.<br></small>
                              <small>by <b>Kris Broda,</b> brodmin.com - January 5, 2021</small></p>

                              <p><a href="https://brodmin.com/case-studies/gig-economy-case-study/">Global e-commerce Forecast 2021</a><br><small>
                              Following a 25.7% surge in 2020, to $4.213 trillion, we expect retail e-commerce sales worldwide to climb a further 16.8% this year, to $4.921 trillion.<br></small>
                              <small>by <b>Arin von Abrams, </b> Insider Intelligence - July 7, 2021</small></p>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_9" data-scroll>[9]</a>
                            </td>
                            <td scope="p-2"><a href="https://www.project-disco.org/competition/050420-evolution-of-ad-spend-and-the-dynamics-of-digital/">
                              Evolution of Ad Spend and the Dynamics of Digital</a><br><small>
                              Pressure on digital native advertisers will only get more intense as traditional media companies increasingly exploit the benefits of personalized digital advertising ... This kind of competition likely means continued value gains for advertisers, plentiful opportunities for creative content producers, and lots of great content for consumers.<br></small>
                              <small>by <b>Kay Jebelli,</b> Verdict<small> - May 4, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_9" data-scroll>[10]</a>
                            </td>
                            <td scope="p-2"><a href="https://www.verdict.co.uk/passion-economy-worth/">
                              Digital Disruption - Passion Economy is now worth over $38bn globally</a><br><small>
                              According to Disciple Media, the industry grew to a global market value of $38.66bn in 2019. The London-based company brought together forecast data from sources including OfCom, Deloitte and Forbes.<br></small>
                              <small>by <b>Robert Scammell,</b> Verdict<small> - September 25, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#13_Target" data-scroll>[11]</a>
                            </td>
                            <td scope="p-2"><a href="https://brodmin.com/case-studies/gig-economy-case-study/">Who participates in the gig-economy?</a><br><small>
                              It is estimated that the global gig-economy will be worth 347 billion dollars in 2021. On a global scale, design and tech freelance jobs are the most popular with 59% of gig workers doing them, but over saturation of talent in these fields is bringing down the pay.<br></small>
                              <small>by <b>Kris Broda,</b> brodmin.com - January 5, 2021</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_11" data-scroll>[12]</a>
                            </td>
                            <td scope="p-2"><a href="https://unctad.org/news/how-covid-19-triggered-digital-and-e-commerce-turning-point">
                              How COVID-19 triggered the digital and e-commerce turning point</a><br><small>
                              In years to come, we will look back at 2020 as the moment that changed everything. Nowhere else has unprecedented and unforeseen growth occurred as in the digital and e-commerce sectors, which have boomed amid the COVID-19 crisis.<br></small>
                              <small>by <b>Andrey Popov,</b> Verdict<small> - March 15, 2021</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#Industry" data-scroll>[13]</a>
                            </td>
                            <td scope="p-2"><a href="https://brodmin.com/case-studies/gig-economy-case-study/">gig-economy Size</a><br><small>
                              It is estimated that the Global gig-economy will be worth 347 billion dollars in 2021. On a global scale, design and tech freelance jobs are the most popular with 59% of gig workers doing them, but over saturation of talent in these fields is bringing down the pay.<br></small>
                              <small>by <b>Kris Broda,</b> brodmin.com - January 5, 2021</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_2" data-scroll>[14]</a>
                            </td>
                            <td scope="p-2"><a href="https://hbr.org/2020/02/the-era-of-antisocial-social-media">
                              The Era of Antisocial Social Media</a><br><small>
                              When you look at who is — and more importantly, who is not — driving the growth and popularity of social platforms, a key demographic appears to be somewhat in retreat: young people. They’re craving privacy, safety, and a respite from the throngs of people on social platforms and gravitating toward more intimate destinations.<br></small>
                              <small>by <b>Sara Wilson,</b> Harvard Business Review</b> - February 05, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link" href="#FN_15" data-scroll>[15]</a>
                            </td>
                            <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                              The Cold Start Problem</a><br><small>
                              The Cold Start Problem reveals what makes winning networks thrive, why some startups fail to successfully scale, and, most crucially, why products that create and compete using the network effect are vitally important today.<br></small>
                              <small>by <b>Andrew Chen,</b> andreessen horowitz</b> - Dec 7, 2021</small>
                            </td>
                          </tr>
                          <tr>
                  
                          <tr>
                            <td scope="p-2">
                              <a class="list-link mb-2" href="#FN_15" data-scroll>[16]</a>
                            </td>
                            <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                              Global, US Populations by segments</a><br>
                              <small><b>Worldometers.com, World Bank, Statista.com</b></small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link mb-2" href="#FN_17" data-scroll>[17]</a>
                            </td>
                            <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                              How the Coronavirus Outbreak Has – and Hasn’t – Changed the Way Americans Work</a><br>
                              <small><b>Pew Research Center </b> - Dec 9, 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link mb-2" href="#FN_18" data-scroll>[18]</a>
                            </td>
                            <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                              More Connected Than Ever Before: </a><br>
                              <small>How We Build Our Digital Comfort Zones</small>
                              <small><b>Kaspersky Daily </b> - 2020</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2">
                              <a class="list-link mb-2" href="#FN_19" data-scroll>[19]</a>
                            </td>
                            <td scope="p-2"><a href="https://a16z.com/book/the-cold-start-problem/">
                              Why The Creator Economy Is Worth Watching In 2022</a><br><small>
                              With more than 50 million independent content creators, curators, and community builders fueling this new trend, this generation of micro-entrepreneurs is currently valued at $20 billion with estimations that it could grow to a $104.2 billion market in 2022 — with $800 million in venture capital invested...<br></small>
                              <small><b>Forbes,</b> - Dec 29, 2021. Reviewed by: andreessen horowitz</small>
                            </td>
                          </tr>

                          <tr>
                            <td scope="p-2"><a class="list-link" href="#IN_1" data-scroll>(1)</a></td>
                            <td><b>About Our Name: "Si Quis" Software</b><br><small>
                              The concept of classified ads began appearing in England in the 1600s. Handwritten messages were nailed to posts by scribes and became known as “Si Quis”,[5] a term borrowed from ancient Rome where most posted notices began with the words Si Quis — meaning "If anybody knows of…"
                              <br><br>
                              Today the sheer number and variety of classifieds worldwide has grown exponentially into broad, albeit fragmented horizontal markets. Never before has creating and posting a “Si Quis” been so easy and affordable with a reach far beyond the street posts of the 17th century.   
                              <br><br>
                              Most importantly however, never before have individuals had the resources to pursue things they are passionate about, which brings us to back to our name… Si Quis Software.   
                              <br><br>
                              We've taken liberty to expand upon the definitions of "Si Quis", taking it beyond the concept of classifieds in the 1600's and associating it with the emergence of the Passion Economy of the 21st century. "If anybody knows of something related to my passions…”
                              <br><br></small>
                              <a href="https://www.cbc.ca/radio/undertheinfluence/this-was-the-first-classified-ad-ever-published-in-north-america-1.5462237">Under the Influence - The first classified ads ever published</a><br>
                              Classified ads began appearing in England in the 1600s. They were handwritten, and nailed to posts. Scribes made their living writing announcements, which were, for all intents and purposes, classified ads. And these ads weren't called ads — they were called Si quis.<br>
                              by <b>CBC Radio</b><small> - Feb 13, 2020</small>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </span>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>          

  <!-- BORDER -->
  <div class="bg-black">
    <div class="container border-top border-white-900-50"></div>
  </div>

  <!-- FOOTER -->
  <footer class="py-4 py-md-8 bg-black">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-3">

          <!-- Brand -->
          <a class="navbar-brand lift" href="./index.html" style="color:orange"><b>
            <img src="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" alt="" width="32" height="30" class="d-inline-block align-text-bottom"> Si Quis </b><span class="text-info"> Software</span>
          </a>
      
          <!-- Social -->
          <ul class="list-unstyled list-inline list-social ml-md-5 mt-6 mb-6 mb-md-0">
            <li class="list-inline-item list-social-item me-3">
              <a href="#!" class="text-decoration-none">
                <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
              </a>
            </li>
            <li class="list-inline-item list-social-item me-3">
              <a href="#!" class="text-decoration-none">
                <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
              </a>
            </li>
            <li class="list-inline-item list-social-item me-3">
              <a href="#!" class="text-decoration-none">
                <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
              </a>
            </li>
            <li class="list-inline-item list-social-item">
              <a href="#!" class="text-decoration-none">
                <img src="./assets/img/icons/social/linkedin.svg" class="list-social-icon" alt="...">
              </a>
            </li>
          </ul>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">

          <!-- Heading -->
          <h5 class="fw-bold text-uppercase text-gray-700">
            About
          </h5>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
            <li class="mb-3">
              <a href="./SiQuis-ABOUT-1.html" class="text-reset">
                Si Quis Software
              </a>
            </li>
            <li class="mb-3">
              <a href="./SiQuis-ABOUT-2.html" class="text-reset">
                The Passion Economy
              </a>
            </li>
            <li class="mb-3">
            <li class="mb-3">
              <a href="./SiQuis-ABOUT-3.html" class="text-reset">
                Our Team
              </a>
            </li>
            <li class="mb-3">
          </ul>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">

          <!-- Heading -->
          <h5 class="fw-bold text-uppercase text-gray-700">
            Contact Us
          </h5>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
            <li class="mb-3">
              <a>Email us at:</a><br>
              <a href="mailto:info@siquisoft.com" class="text-reset">
                <span class="text-white">info@siquisoft.com</span>
              </a>
            </li>
            <li class="mb-3">
              <a>Call us at:</a><br>
              <a href="#!" class="text-reset">
                <span class="text-white">206-498-2957</span>
              </a>
            </li>        
          </ul>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">

          <!-- Heading -->
          <h5 class="fw-bold text-uppercase text-gray-700">
            Legal
          </h5>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-0">
            <li class="mb-3">
              <a href="./SiQuis-TOS-1.html" class="text-reset">
                Policy Statements
              </a>
            </li>
            <li class="mb-3">
              <a href="./SiQuis-TOS-2.html" class="text-reset">
                Privacy Statements
              </a>
              <li class="mb-3">
              <a href="./SiQuis-TOS-3.html" class="text-reset">
                Report An Issue
              </a>
            </li>
          </ul>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </footer>



      <!-- JAVASCRIPT -->
      <!-- Map JS -->
      <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
      
      <!-- Vendor JS -->
      <script src="./assets/js/vendor.bundle.js"></script>
      
      <!-- Theme JS -->
      <script src="./assets/js/theme.bundle.js"></script>
      <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
      <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>

          <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WHWQ4SS');</script>
      <!-- End Google Tag Manager -->
      
      <script data-ad-client="ca-pub-8064256507953498" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-YWDPGYYQKC"></script>
      
      <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());

       gtag('config', 'G-YWDPGYYQKC');
      </script>

      <!-- Read more / Real Less -->
      <script>
      function changeText1() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more about the Passion Economy..."; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = ""; 
          moreText.style.display = "inline";
        }
      }
      </script>
      
      <!-- Read more / Real Less -->
      <script>
      function changeText2() {
        var dots2 = document.getElementById("dots2");
        var moreText2 = document.getElementById("more2");
        var btnText2 = document.getElementById("myBtn2");

        if (dots2.style.display === "none") {
          dots2.style.display = "inline";
          btnText2.innerHTML = "Read more..."; 
          moreText2.style.display = "none";
        } else {
          dots2.style.display = "none";
          btnText2.innerHTML = ""; 
          moreText2.style.display = "inline";
        }
      }
      </script>
      
      <script>
      function changeText3() {
        var dots3 = document.getElementById("dots3");
        var moreText3 = document.getElementById("more3");
        var btnText3 = document.getElementById("myBtn3");

        if (dots3.style.display === "none") {
          dots3.style.display = "inline";
          btnText3.innerHTML = "Read more..."; 
          moreText3.style.display = "none";
        } else {
          dots3.style.display = "none";
          btnText3.innerHTML = ""; 
          moreText3.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText4() {
        var dots4 = document.getElementById("dots4");
        var moreText4 = document.getElementById("more4");
        var btnText4 = document.getElementById("myBtn4");

        if (dots4.style.display === "none") {
          dots4.style.display = "inline";
          btnText4.innerHTML = "Read more..."; 
          moreText4.style.display = "none";
        } else {
          dots4.style.display = "none";
          btnText4.innerHTML = ""; 
          moreText4.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText5() {
        var dots5 = document.getElementById("dots5");
        var moreText5 = document.getElementById("more5");
        var btnText5 = document.getElementById("myBtn5");

        if (dots5.style.display === "none") {
          dots5.style.display = "inline";
          btnText5.innerHTML = "Read more..."; 
          moreText5.style.display = "none";
        } else {
          dots5.style.display = "none";
          btnText5.innerHTML = ""; 
          moreText5.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText6() {
        var dots6 = document.getElementById("dots6");
        var moreText6 = document.getElementById("more6");
        var btnText6 = document.getElementById("myBtn6");

        if (dots6.style.display === "none") {
          dots6.style.display = "inline";
          btnText6.innerHTML = "View declaration..."; 
          moreText6.style.display = "none";
        } else {
          dots6.style.display = "none";
          btnText6.innerHTML = "Close declaration..."; 
          moreText6.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText7() {
        var dots7 = document.getElementById("dots7");
        var moreText7 = document.getElementById("more7");
        var btnText7 = document.getElementById("myBtn7");

        if (dots7.style.display === "none") {
          dots7.style.display = "inline";
          btnText7.innerHTML = "Read more..."; 
          moreText7.style.display = "none";
        } else {
          dots7.style.display = "none";
          btnText7.innerHTML = "Read less..."; 
          moreText7.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText8() {
        var dots8 = document.getElementById("dots8");
        var moreText8 = document.getElementById("more8");
        var btnText8 = document.getElementById("myBtn8");

        if (dots8.style.display === "none") {
          dots8.style.display = "inline";
          btnText8.innerHTML = "Read more..."; 
          moreText8.style.display = "none";
        } else {
          dots8.style.display = "none";
          btnText8.innerHTML = "Read less..."; 
          moreText8.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText9() {
        var dots9 = document.getElementById("dots9");
        var moreText9 = document.getElementById("more9");
        var btnText9 = document.getElementById("myBtn9");

        if (dots9.style.display === "none") {
          dots9.style.display = "inline";
          btnText9.innerHTML = "Read more about the Passion Economy (Repeated from above.)..."; 
          moreText9.style.display = "none";
        } else {
          dots9.style.display = "none";
          btnText9.innerHTML = "Read less..."; 
          moreText9.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText10() {
        var dots10 = document.getElementById("dots10");
        var moreText10 = document.getElementById("more10");
        var btnText10 = document.getElementById("myBtn10");

        if (dots10.style.display === "none") {
          dots10.style.display = "inline";
          btnText10.innerHTML = "Read Legal Information..."; 
          moreText10.style.display = "none";
        } else {
          dots10.style.display = "none";
          btnText10.innerHTML = "Read less..."; 
          moreText10.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText11() {
        var dots11 = document.getElementById("dots11");
        var moreText11 = document.getElementById("more11");
        var btnText11 = document.getElementById("myBtn11");

        if (dots11.style.display === "none") {
          dots11.style.display = "inline";
          btnText11.innerHTML = "Display Footnotes..."; 
          moreText11.style.display = "none";
        } else {
          dots11.style.display = "none";
          btnText11.innerHTML = "Read less..."; 
          moreText11.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText12() {
        var dots12 = document.getElementById("dots12");
        var moreText12 = document.getElementById("more12");
        var btnText12 = document.getElementById("myBtn12");

        if (dots12.style.display === "none") {
          dots12.style.display = "inline";
          btnText12.innerHTML = "Display The Executive Summary..."; 
          moreText12.style.display = "none";
        } else {
          dots12.style.display = "none";
          btnText12.innerHTML = "Reduce The Executive Summary..."; 
          moreText12.style.display = "inline";
        }
      }
      </script>

      <script>
      function changeText13() {
        var dots13 = document.getElementById("dots13");
        var moreText13 = document.getElementById("more13");
        var btnText13 = document.getElementById("myBtn13");

        if (dots13.style.display === "none") {
          dots13.style.display = "inline";
          btnText13.innerHTML = "Display The Detailed Business Plan..."; 
          moreText13.style.display = "none";
        } else {
          dots13.style.display = "none";
          btnText13.innerHTML = "Reduce The Detailed Business Plan..."; 
          moreText13.style.display = "inline";
        }
      }
      </script>

      <script>

      // INITIALIZATION OF VIDEO BG
      // =======================================================
      document.querySelectorAll('.js-video-bg').forEach(item=> {
        new HSVideoBg(item).init()
      });

      // INITIALIZATION OF SWIPER
      // =======================================================
      var sliderThumbs = new Swiper('.js-swiper-shop-hero-thumbs', {
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        history: false,
        slidesPerView: 3,
        spaceBetween: 15,
        on: {
          beforeInit: (swiper) => {
            const css = `.swiper-slide-thumb-active .swiper-thumb-progress .swiper-thumb-progress-path {
                  opacity: 1;
                  -webkit-animation: ${swiper.originalParams.autoplay.delay}ms linear 0ms forwards swiperThumbProgressDash;
                  animation: ${swiper.originalParams.autoplay.delay}ms linear 0ms forwards swiperThumbProgressDash;
              }`
              style = document.createElement('style')
            document.head.appendChild(style)
            style.type = 'text/css'
            style.appendChild(document.createTextNode(css));

            swiper.el.querySelectorAll('.js-swiper-thumb-progress')
            .forEach(slide => {
              slide.insertAdjacentHTML('beforeend', '<span class="swiper-thumb-progress"><svg version="1.1" viewBox="0 0 160 160"><path class="swiper-thumb-progress-path" d="M 79.98452083651917 4.000001576345426 A 76 76 0 1 1 79.89443752470656 4.0000733121155605 Z"></path></svg></span>')
            })
          },
        },
      });

      // Featured Aircraft
      var responsiveBreakpoint = new Swiper('.js-swiper-responsive-breakpoint', {
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.js-swiper-responsive-breakpoint-button-next',
            prevEl: '.js-swiper-responsive-breakpoint-button-prev',
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        }
      });

      </script>

      <!-- Revenue Model Calculations -->
      <script>
      function revenue() {
        return {
          startClients1: 50,
          startClients2: 125,
          startClients3: 375,
          startClients4: 938,
          startClients5: 1875,
          growClients1: 25,
          growClients2: 63,
          growClients3: 188,
          growClients4: 469,
          growClients5: 938,
          proClients1: 6,
          proClients2: 18,
          proClients3: 63,
          proClients4: 221,
          proClients5: 551,
          entClients1: 1,
          entClients2: 4,
          entClients3: 20,
          entClients4: 70,
          entClients5: 175,

          startSubRate1: 105,
          startSubRate2: 100,
          startSubRate3: 150,
          startSubRate4: 150,
          startSubRate5: 150,
          growSubRate1: 250,
          growSubRate2: 250,
          growSubRate3: 300,
          growSubRate4: 300,
          growSubRate5: 500,
          proSubRate1: 350,
          proSubRate2: 500,
          proSubRate3: 600,
          proSubRate4: 600,
          proSubRate5: 1000,
          entSubRate1: 1000,
          entSubRate2: 2000,
          entSubRate3: 3000,
          entSubRate4: 3700,
          entSubRate5: 4500,

          startSetupRate1: 0,
          startSetupRate2: 100,
          startSetupRate3: 150,
          startSetupRate4: 150,
          startSetupRate5: 150,
          growSetupRate1: 125,
          growSetupRate2: 100,
          growSetupRate3: 150,
          growSetupRate4: 200,
          growSetupRate5: 250,
          proSetupRate1: 350,
          proSetupRate2: 250,
          proSetupRate3: 300,
          proSetupRate4: 400,
          proSetupRate5: 450,
          entSetupRate1: 550,
          entSetupRate2: 750,
          entSetupRate3: 1000,
          entSetupRate4: 2000,
          entSetupRate5: 3000,

          startccRate1: 10,
          startccRate2: 10,
          startccRate3: 10,
          startccRate4: 10,
          startccRate5: 10,
          growccRate1: 25,
          growccRate2: 30,
          growccRate3: 30,
          growccRate4: 35,
          growccRate5: 40,
          proccRate1: 50,
          proccRate2: 55,
          proccRate3: 50,
          proccRate4: 55,
          proccRate5: 60,
          entccRate1: 100,
          entccRate2: 125,
          entccRate3: 150,
          entccRate4: 125,
          entccRate5: 150,

          startPrgmRate1: 175,
          startPrgmRate2: 90,
          startPrgmRate3: 150,
          startPrgmRate4: 125,
          startPrgmRate5: 100,
          growPrgmRate1: 190,
          growPrgmRate2: 200,
          growPrgmRate3: 225,
          growPrgmRate4: 250,
          growPrgmRate5: 400,
          proPrgmRate1: 300,
          proPrgmRate2: 300,
          proPrgmRate3: 500,
          proPrgmRate4: 400,
          proPrgmRate5: 700,
          entPrgmRate1: 800,
          entPrgmRate2: 1000,
          entPrgmRate3: 2800,
          entPrgmRate4: 3000,
          entPrgmRate5: 4000,

          baseGrowth2: 200,
          baseGrowth3: 250,
          baseGrowth4: 200,
          baseGrowth5: 150,
          totalClients1: 0,
          totalClients2: 0,
          totalClients3: 0,
          totalClients4: 0,
          totalClients5: 0,

          totalInv1: 500000,
          totalInv2: 2000000,
          totalInv3: 0,
          totalInv4: 0,
          totalInv5: 0,

          yearEOY1: 0,
          yearEOY2: 0,
          yearEOY3: 0,
          yearEOY4: 0,
          yearEOY5: 0,

          baseSales1: 122760,
          baseSales2: 446545,
          baseSales3: 2036928,
          baseSales4: 6401634,
          baseSales5: 21661435,
          baseExpense1: 424393,
          baseExpense2: 1204729,
          baseExpense3: 2180551,
          baseExpense4: 4497150,
          baseExpense5: 12982487,
          expenseChange1: 50,
          expenseChange2: 45,
          expenseChange3: 40,
          expenseChange4: 35,
          expenseChange5: 40,

          basePR1: 353293,
          basePR2: 971279,
          basePR3: 1691351,
          basePR4: 3794550,
          basePR5: 9595887,
          baseCL1: 50000,
          baseCL2: 120000,
          baseCL3: 90000,
          baseCL4: 75000,
          baseCL5: 50000,
          baseMarket1: 12000,
          baseMarket2: 60000,
          baseMarket3: 250000,
          baseMarket4: 1000000,
          baseMarket5: 2000000,
          baseGeneral1: 9100,
          baseGeneral2: 53000,
          baseGeneral3: 149200,
          baseGeneral4: 227600,
          baseGeneral5: 836000,

          updateClients(e, type) {
            if(type == 'startClients1') {
              this.startClients1 = parseInt(e.value);
            } else if(type == 'growClients1') { 
              this.growClients1 = parseInt(e.value);
            } else if(type == 'proClients1') {
              this.proClients1 = parseInt(e.value);
            } else if(type == 'entClients1') {
              this.entClients1 = parseInt(e.value);
            }
            this.updateTotalClients();
          },
          updateTotalClients() {
            this.startClients2 = parseInt(this.startClients1 + (this.startClients1 * this.baseGrowth2 / 100));
            this.startClients3 = parseInt(this.startClients2 + (this.startClients2 * this.baseGrowth3 / 100));
            this.startClients4 = parseInt(this.startClients3 + (this.startClients3 * this.baseGrowth4 / 100));
            this.startClients5 = parseInt(this.startClients4 + (this.startClients4 * this.baseGrowth5 / 100));
            this.growClients2 = parseInt(this.growClients1 + (this.growClients1 * this.baseGrowth2 / 100));
            this.growClients3 = parseInt(this.growClients2 + (this.growClients2 * this.baseGrowth3 / 100));
            this.growClients4 = parseInt(this.growClients3 + (this.growClients3 * this.baseGrowth4 / 100));
            this.growClients5 = parseInt(this.growClients4 + (this.growClients4 * this.baseGrowth5 / 100));
            this.proClients2 = parseInt(this.proClients1 + (this.proClients1 * this.baseGrowth2 / 100));
            this.proClients3 = parseInt(this.proClients2 + (this.proClients2 * this.baseGrowth3 / 100));
            this.proClients4 = parseInt(this.proClients3 + (this.proClients3 * this.baseGrowth4 / 100));
            this.proClients5 = parseInt(this.proClients4 + (this.proClients4 * this.baseGrowth5 / 100));
            this.entClients2 = parseInt(this.entClients1 + (this.entClients1 * this.baseGrowth2 / 100));
            this.entClients3 = parseInt(this.entClients2 + (this.entClients2 * this.baseGrowth3 / 100));
            this.entClients4 = parseInt(this.entClients3 + (this.entClients3 * this.baseGrowth4 / 100));
            this.entClients5 = parseInt(this.entClients4 + (this.entClients4 * this.baseGrowth5 / 100));
            this.totalClients1 = this.startClients1 + this.growClients1 + this.proClients1 + this.entClients1;
            this.totalClients2 = this.startClients2 + this.growClients2 + this.proClients2 + this.entClients2;
            this.totalClients3 = this.startClients3 + this.growClients3 + this.proClients3 + this.entClients3;
            this.totalClients4 = this.startClients4 + this.growClients4 + this.proClients4 + this.entClients4;
            this.totalClients5 = this.startClients5 + this.growClients5 + this.proClients5 + this.entClients5;
          },

          updateInvestment(e, type) {
            if(type == 'totalInv1') {
              this.totalInv1 = parseInt(e.value);
            } else if(type == 'totalInv2'){
              this.totalInv2 = parseInt(e.value);
            } else if(type == 'totalInv3'){
              this.totalInv3 = parseInt(e.value);
            } else if(type == 'totalInv4'){
              this.totalInv4 = parseInt(e.value);
            } else if(type == 'totalInv5'){
              this.totalInv5 = parseInt(e.value);
            }
            this.updateTotalClients();
          },

          subFees(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.startClients1 * this.startSubRate1 * 12 * 52 / 100) + (this.growClients1 * this.growSubRate1 * 12 * 52 / 100) + (this.proClients1 * this.proSubRate1 * 12 * 52 / 100) + (this.entClients1 * this.entSubRate1 * 12 * 52 / 100);
              case 2:
                return (this.startClients2 * this.startSubRate2 * 12 * 54 / 100) + (this.growClients2 * this.growSubRate2 * 12 * 54 / 100) + (this.proClients2 * this.proSubRate2 * 12 * 54 / 100) + (this.entClients2 * this.entSubRate2 * 12 * 54 / 100);
              case 3: 
                return (this.startClients3 * this.startSubRate3 * 12 * 54 / 100) + (this.growClients3 * this.growSubRate3 * 12 * 54 / 100) + (this.proClients3 * this.proSubRate3 * 12 * 54 / 100) + (this.entClients3 * this.entSubRate3 * 12 * 54 / 100);
              case 4: 
                return (this.startClients4 * this.startSubRate4 * 12 * 54 / 100) + (this.growClients4 * this.growSubRate4 * 12 * 54 / 100) + (this.proClients4 * this.proSubRate4 * 12 * 54 / 100) + (this.entClients4 * this.entSubRate4 * 12 * 54 / 100);
              case 5: 
                return (this.startClients5 * this.startSubRate5 * 12 * 54 / 100) + (this.growClients5 * this.growSubRate5 * 12 * 54 / 100) + (this.proClients5 * this.proSubRate5 * 12 * 54 / 100) + (this.entClients5 * this.entSubRate5 * 12 * 54 / 100);
            }
          },

          setupFees(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.startClients1 * this.startSetupRate1) + (this.growClients1 * this.growSetupRate1) + (this.proClients1 * this.proSetupRate1) + (this.entClients1 * this.entSetupRate1);
              case 2:
                return (this.startClients2 * this.startSetupRate2) + (this.growClients2 * this.growSetupRate2) + (this.proClients2 * this.proSetupRate2) + (this.entClients2 * this.entSetupRate2);
              case 3: 
                return (this.startClients3 * this.startSetupRate3) + (this.growClients3 * this.growSetupRate3) + (this.proClients3 * this.proSetupRate3) + (this.entClients3 * this.entSetupRate3);
              case 4: 
                return (this.startClients4 * this.startSetupRate4) + (this.growClients4 * this.growSetupRate4) + (this.proClients4 * this.proSetupRate4) + (this.entClients4 * this.entSetupRate4);
              case 5: 
                return (this.startClients5 * this.startSetupRate5) + (this.growClients5 * this.growSetupRate5) + (this.proClients5 * this.proSetupRate5) + (this.entClients5 * this.entSetupRate5);
            }
          },

          ccFees(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.startClients1 * (this.startccRate1 * 12) * 52 / 100) + (this.growClients1 * (this.growccRate1 * 12) * 52 / 100) + (this.proClients1 * (this.proccRate1 * 12) * 52 / 100) + (this.entClients1 * (this.entccRate1 * 12) * 52 / 100);
              case 2:
                return (this.startClients2 * (this.startccRate2 * 12) * 54 / 100) + (this.growClients2 * (this.growccRate2 * 12) * 54 / 100) + (this.proClients2 * (this.proccRate2 * 12) * 54 / 100) + (this.entClients2 * (this.entccRate2 * 12) * 54 / 100);
              case 3:
                return (this.startClients3 * (this.startccRate3 * 12) * 54 / 100) + (this.growClients3 * (this.growccRate3 * 12) * 54 / 100) + (this.proClients3 * (this.proccRate3 * 12) * 54 / 100) + (this.entClients3 * (this.entccRate3 * 12) * 54 / 100);
              case 4:
                return (this.startClients4 * (this.startccRate4 * 12) * 54 / 100) + (this.growClients4 * (this.growccRate4 * 12) * 54 / 100) + (this.proClients4 * (this.proccRate4 * 12) * 54 / 100) + (this.entClients4 * (this.entccRate4 * 12) * 54 / 100);
              case 5:
                return (this.startClients5 * (this.startccRate5 * 12) * 54 / 100) + (this.growClients5 * (this.growccRate5 * 12) * 54 / 100) + (this.proClients5 * (this.proccRate5 * 12) * 54 / 100) + (this.entClients5 * (this.entccRate5 * 12) * 54 / 100);
              }
            },

          prgmFees(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.startClients1 * this.startPrgmRate1) + (this.growClients1 * this.growPrgmRate1) + (this.proClients1 * this.proPrgmRate1) + (this.entClients1 * this.entPrgmRate1);
              case 2:
                return (this.startClients2 * this.startPrgmRate2) + (this.growClients2 * this.growPrgmRate2) + (this.proClients2 * this.proPrgmRate2) + (this.entClients2 * this.entPrgmRate2);
              case 3:
                return (this.startClients3 * this.startPrgmRate3) + (this.growClients3 * this.growPrgmRate3) + (this.proClients3 * this.proPrgmRate3) + (this.entClients3 * this.entPrgmRate3);
              case 4:
                return (this.startClients4 * this.startPrgmRate4) + (this.growClients4 * this.growPrgmRate4) + (this.proClients4 * this.proPrgmRate4) + (this.entClients4 * this.entPrgmRate4);
              case 5:
                return (this.startClients5 * this.startPrgmRate5) + (this.growClients5 * this.growPrgmRate5) + (this.proClients5 * this.proPrgmRate5) + (this.entClients5 * this.entPrgmRate5);
            }
          },
          
          totalRevenue(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.setupFees(1) + this.subFees(1) + this.ccFees(1) + this.prgmFees(1));
              case 2:
                return (this.setupFees(2) + this.subFees(2) + this.ccFees(2) + this.prgmFees(2));
              case 3:
                return (this.setupFees(3) + this.subFees(3) + this.ccFees(3) + this.prgmFees(3));
              case 4:
                return (this.setupFees(4) + this.subFees(4) + this.ccFees(4) + this.prgmFees(4));
              case 5:
                return (this.setupFees(5) + this.subFees(5) + this.ccFees(5) + this.prgmFees(5));
            }
          },

          increase(clientVar) {
            if(clientVar == 2) {
              return (this.totalRevenue(2) != 0 ? (this.totalRevenue(2) - this.totalRevenue(1)) / this.totalRevenue(1) * 100: 0);
            } else if (clientVar == 3) {
              return (this.totalRevenue(3) != 0 ? (this.totalRevenue(3) - this.totalRevenue(2)) / this.totalRevenue(2) * 100: 0);
            } else if (clientVar == 4) {
              return (this.totalRevenue(4) != 0 ? (this.totalRevenue(4) - this.totalRevenue(3)) / this.totalRevenue(3) * 100: 0);
            } else if (clientVar == 5) {
              return (this.totalRevenue(5) != 0 ? (this.totalRevenue(5) - this.totalRevenue(4)) / this.totalRevenue(4) * 100: 0);
            }
          },

          revenueClient(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalRevenue(1) / this.totalClients1);
              case 2:
                return (this.totalRevenue(2) / this.totalClients2);
              case 3: 
                return (this.totalRevenue(3) / this.totalClients3);
              case 4: 
                return (this.totalRevenue(4) / this.totalClients4);
              case 5: 
                return (this.totalRevenue(5) / this.totalClients5);
            }
          },

          totalExpense(clientVar) {
            switch(clientVar) {
              case 1:
                return (((this.totalRevenue(1) - this.baseSales1) / 100 * this.expenseChange1) + this.baseExpense1);
              case 2:
                return (((this.totalRevenue(2) - this.baseSales2) / 100 * this.expenseChange2) + this.baseExpense2);
              case 3: 
                return (((this.totalRevenue(3) - this.baseSales3) / 100 * this.expenseChange3) + this.baseExpense3);
              case 4: 
                return (((this.totalRevenue(4) - this.baseSales4) / 100 * this.expenseChange4) + this.baseExpense4);
              case 5: 
                return (((this.totalRevenue(5) - this.baseSales5) / 100 * this.expenseChange5) + this.baseExpense5);
            }
          },

          totalPR(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalExpense(1) * .8325);
              case 2:
                return (this.totalExpense(2) * .8065);
              case 3: 
                return (this.totalExpense(3) * .7757);
              case 4: 
                return (this.totalExpense(4) * .7444);
              case 5: 
                return (this.totalExpense(5) * .7687);
            }
          },

          totalCL(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalExpense(1) * .1178);
              case 2:
                return (this.totalExpense(2) * .0996);
              case 3: 
                return (this.totalExpense(3) * .0413);
              case 4: 
                return (this.totalExpense(4) * .0147);
              case 5: 
                return (this.totalExpense(5) * .0040);
            }
          },

          totalMarket(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalExpense(1) * .0283);
              case 2:
                return (this.totalExpense(2) * .0498);
              case 3: 
                return (this.totalExpense(3) * .1146);
              case 4: 
                return (this.totalExpense(4) * .1962);
              case 5: 
                return (this.totalExpense(5) * .1602);
            }
          },

          totalGeneral(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalExpense(1) * .0214);
              case 2:
                return (this.totalExpense(2) * .0440);
              case 3: 
                return (this.totalExpense(3) * .0684);
              case 4: 
                return (this.totalExpense(4) * .0447);
              case 5: 
                return (this.totalExpense(5) * .0670);
            }
          },

          totalProfit(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalRevenue(1) - this.totalExpense(1));
              case 2:
                return (this.totalRevenue(2) - this.totalExpense(2));
              case 3: 
                return (this.totalRevenue(3) - this.totalExpense(3));
              case 4: 
                return (this.totalRevenue(4) - this.totalExpense(4));
              case 5: 
                return (this.totalRevenue(5) - this.totalExpense(5));
            }
          },

          yearEOY(clientVar) {
            switch(clientVar) {
              case 1:
                return (this.totalProfit(1) + this.totalInv1);
              case 2:
                return (this.totalProfit(2) + this.totalInv2 + this.yearEOY(1));
              case 3: 
                return (this.totalProfit(3) + this.totalInv3 + this.yearEOY(2));
                case 4: 
                return (this.totalProfit(4) + this.totalInv4 + this.yearEOY(3));
              case 5: 
                return (this.totalProfit(5) + this.totalInv5 + this.yearEOY(4));
            }
          }
        }
      }
    </script>
  </body>
</html>
