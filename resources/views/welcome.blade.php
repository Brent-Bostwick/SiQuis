<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" sizes="16x16" type="image/png" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ url(asset('assets/css/libs.bundle.css')) }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ url(asset('assets/css/theme.bundle.css')) }}" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WHWQ4SS');
    </script>
    <!-- End Google Tag Manager -->

    <script data-ad-client="ca-pub-8064256507953498" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YWDPGYYQKC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YWDPGYYQKC');
    </script>

    <script>
        function passWord() {
            var testV = 1;
            var pass1 = prompt('Please Enter Your Password', '');
            while (testV < 3) {
                if (!pass1)
                    history.go(-1);
                if (pass1.toLowerCase() == "february2022") {
                    window.open('./SiQuis-BusPlan_HOME.html');
                    break;
                }
                testV += 1;
                var pass1 =
                    prompt('Access Denied - Password Incorrect, Please Try Again.', 'Password');
            }
            if (pass1.toLowerCase() != "password" & testV == 3)
                history.go(-1);
            return " ";
        }
    </script>
    <!-- Google AdSense --------------------------------------------------------------------------- -->
    <script data-ad-client="ca-pub-8064256507953498" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- Title -->
    <title>SiQuisSoftware</title>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHWQ4SS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- MODALS -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Close -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <!-- Image -->
                    <div class="text-center">
                        <img src="./assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-3"
                            style="width: 200px;">
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
                                    <input type="text" class="form-control form-control-flush"
                                        id="registrationFirstNameModal" placeholder="First name">
                                    <label for="registrationFirstNameModal">Your name</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <!-- Last name -->
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-flush"
                                        id="registrationLastNameModal" placeholder="Last name">
                                    <label for="registrationLastNameModal">Last name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Email -->
                                <div class="form-floating">
                                    <input type="email" class="form-control form-control-flush"
                                        id="registrationEmailModal" placeholder="Email">
                                    <label for="registrationEmailModal">Email</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <!-- Password -->
                                <div class="form-floating">
                                    <input type="password" class="form-control form-control-flush"
                                        id="registrationPasswordModal" placeholder="Password">
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
    <div class="modal fade" id="modalAccountHorizontal" tabindex="-1" role="dialog"
        aria-labelledby="modalAccountHorizontalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card card-row">
                    <div class="row gx-0">
                        <div class="col-12 col-md-4 bg-cover card-img-start"
                            style="background-image: url(https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg);">

                            <!-- Image (placeholder) -->
                            <img src="https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg" alt="..."
                                class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                </svg>
                            </div>

                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">

                                <!-- Close -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

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
                                        <input type="text" class="form-control" id="modalAccountHorizontalCompanyName"
                                            placeholder="Company name *">
                                    </div>

                                    <!-- User Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalAccountHorizontalUserName">
                                            Your Name
                                        </label>
                                        <input type="text" class="form-control" id="modalAccountHorizontalUserName"
                                            placeholder="Your name *">
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalAccountHorizontalEmail">
                                            Your email
                                        </label>
                                        <input type="email" class="form-control" id="modalAccountHorizontalEmail"
                                            placeholder="Your email *">
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-5">
                                        <label class="visually-hidden" for="modalAccountHorizontalPassword">
                                            Create a password
                                        </label>
                                        <input type="password" class="form-control"
                                            id="modalAccountHorizontalPassword" placeholder="Create a password *">
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-xs w-100 btn-info" type="submit">
                                        Sign up
                                    </button>

                                </form>

                                <!-- Text -->
                                <p class="mb-0 fs-sm text-center text-muted">
                                    Already have an account? <a style="color:orange" data-bs-toggle="modal"
                                        href="#modalSignupHorizontal"><i> Log in</i></a>.
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
    <div class="modal fade" id="modalSignupDIHorizontal" tabindex="-1" role="dialog"
        aria-labelledby="modalSignupDIHorizontalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card card-row">
                    <div class="row gx-0">
                        <div class="col-12 col-md-4 bg-cover card-img-start"
                            style="background-image: url(https://i.postimg.cc/QNfrqX1Z/Drop-in.jpg);">

                            <!-- Image (placeholder) -->
                            <img src="https://i.postimg.cc/QNfrqX1Z/Drop-in.jpg" alt="..."
                                class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                </svg>
                            </div>

                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">

                                <!-- Close -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                                <!-- Heading -->
                                <h2 class="mb-0 fw-bold text-center" id="modalSignupDIHorizontalTitle">
                                    Sign Up
                                </h2>

                                <!-- Text -->
                                <p class="mb-6 text-center text-muted">
                                    Start building upon your passions.<br><br>

                                    We're excited to have you join the "Beta-Site" team! By adding your information to
                                    our list we'll be able to keep you informed about our Beta-Site and its initial
                                    launch.
                                    <br><br>

                                    In addition, once launched, you'll gain access and be able to take a look at how the
                                    Si Quis platform can help you create and grow your passion-based business.
                                    <br><br>

                                    We'll only send information as our milestones unfold... otherwise we'll keep quite
                                    and not add to your inbox!
                                </p>

                                <!-- Form -->
                                <form class="mb-6">

                                    <!-- Company Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalSignupDIHorizontalCompanyName">
                                            Company Name
                                        </label>
                                        <input type="text" class="form-control"
                                            id="modalSignupDIHorizontalCompanyName" placeholder="Company name">
                                    </div>

                                    <!-- User Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalSignupDIHorizontalUserName">
                                            Your Name
                                        </label>
                                        <input type="text" class="form-control" id="modalSignupDIHorizontaltUserName"
                                            placeholder="Your name *">
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalSignupDIHorizontalEmail">
                                            Your email
                                        </label>
                                        <input type="email" class="form-control" id="modalSignupDIHorizontalEmail"
                                            placeholder="Your email *">
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-5">
                                        <label class="visually-hidden" for="modalSignupDIHorizontalPassword">
                                            Create a password
                                        </label>
                                        <input type="password" class="form-control"
                                            id="modalSignupDIHorizontalPassword" placeholder="Create a password *">
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-xs w-100 btn-info" type="submit">
                                        Sign up
                                    </button>

                                </form>

                                <!-- Text -->
                                <p class="mb-0 fs-sm text-center text-muted">
                                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                        href="#modalSigninHorizontal">Log in</a>.
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
    <div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog"
        aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card card-row">
                    <div class="row gx-0">
                        <div class="col-12 col-md-4 bg-cover card-img-start"
                            style="background-image: url( https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg);">

                            <!-- Image (placeholder) -->
                            <img src=" https://i.postimg.cc/s1FkGFCJ/Ellie-Salishan2.jpg" alt="..."
                                class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                </svg>
                            </div>

                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">

                                <!-- Close -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                                <!-- Heading -->
                                <h2 class="mb-0 fw-bold text-center" id="modalSignupHorizontalTitle">
                                    Sign Up
                                </h2>

                                <!-- Text -->
                                <p class="mb-6 text-center text-muted">
                                    Start building upon your passions.<br><br>

                                    We're excited to have you join the "Beta-Site" team! By adding your information to
                                    our list we'll be able to keep you informed about our Beta-Site and its initial
                                    launch.
                                    <br><br>

                                    In addition, once launched, you'll gain access to take a look at how the Si Quis
                                    platform can help you create and grow your passion business.
                                    <br><br>

                                    We'll only send information as our milestones unfold... otherwise we'll keep quite
                                    and not add to your inbox!
                                </p>

                                <!-- Form -->
                                <form class="mb-6">

                                    <!-- Company Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalSignupHorizontalCompanyName">
                                            Company Name
                                        </label>
                                        <input type="text" class="form-control" id="modalSignupHorizontalCompanyName"
                                            placeholder="Company name">
                                    </div>

                                    <!-- User Name -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalSignupHorizontalUserName">
                                            Your Name
                                        </label>
                                        <input type="text" class="form-control" id="modalSignupHorizontaltUserName"
                                            placeholder="Your name *">
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="visually-hidden" for="modalSignupHorizontalEmail">
                                            Your email
                                        </label>
                                        <input type="email" class="form-control" id="modalSignupHorizontalEmail"
                                            placeholder="Your email *">
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-5">
                                        <label class="visually-hidden" for="modalSignupHorizontalPassword">
                                            Create a password
                                        </label>
                                        <input type="password" class="form-control"
                                            id="modalSignupHorizontalPassword" placeholder="Create a password *">
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-xs w-100 btn-info" type="submit">
                                        Sign up
                                    </button>

                                </form>

                                <!-- Text -->
                                <p class="mb-0 fs-sm text-center text-muted">
                                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                        href="#modalSigninHorizontal">Log in</a>.
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
    <div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog"
        aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card card-row">
                    <div class="row gx-0">
                        <div class="col-12 col-md-6 bg-cover card-img-start"
                            style="background-image: url(./assets/img/photos/photo-1.jpg);">

                            <!-- Image (placeholder) -->
                            <img src="./assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                </svg>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-body">

                                <!-- Close -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

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
                                        <input type="email" class="form-control" id="modalSigninHorizontalEmail"
                                            placeholder="Your email">
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-5">
                                        <label class="visually-hidden" for="modalSigninHorizontalPassword">
                                            Enter your password
                                        </label>
                                        <input type="password" class="form-control"
                                            id="modalSigninHorizontalPassword" placeholder="Enter your password">
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-xs w-100 btn-info" type="submit">
                                        Sign in
                                    </button>

                                </form>

                                <!-- Text -->
                                <p class="mb-0 fs-sm text-center text-muted">
                                    Don't have an account yet? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                        href="#modalSignupHorizontal">Sign up</a>.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Reset: Horizontal  -->
    <div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog"
        aria-labelledby="modalPasswordResetTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="card card-row">
                    <div class="row gx-0">
                        <div class="col-12 col-md-6 bg-cover card-img-start"
                            style="background-image: url(./assets/img/photos/photo-8.jpg);">

                            <!-- Image (placeholder) -->
                            <img src="./assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                </svg>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-body">

                                <!-- Close -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

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
                                        <input type="email" class="form-control" id="modalPasswordResetEmail"
                                            placeholder="Your email">
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
                                        <input type="password" class="form-control" id="modalPasswordResetPassword"
                                            placeholder="Create a new password">
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group mb-5">
                                        <label class="visually-hidden" for="modalPasswordResetResetPassword">
                                            Retype password
                                        </label>
                                        <input type="password" class="form-control" id="modalPasswordResetPassword2"
                                            placeholder="Retype password">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label class="visually-hidden" for="modalPasswordResetResetPassword">
                                            Enter "Reset Code"
                                        </label>
                                        <input type="password" class="form-control" id="modalPasswordResetPassword2"
                                            placeholder="Enter Reset Code">
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-xs w-100 btn-info" type="submit">
                                        Reset Password
                                    </button>

                                </form>

                                <!-- Text -->
                                <p class="mb-0 fs-sm text-center text-muted">
                                    If we have your email on file, we will send you a reset code.<br>
                                    Already have an account? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                        href="#modalSigninHorizontal">Log in</a>.
                                </p>

                            </div>
                        </div>

                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div>

    <!-- Payment -->
    <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentTitle"
        aria-hidden="true">
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
                        Simplify your workflow in minutes.
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
                            <input class="form-control" id="modalPaymentNumbber" type="number"
                                placeholder="4242 4242 4242 4242">
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

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-pattern-2">
        <div class="container-md">

            <!-- Brand -->
            <a class="navbar-brand lift" href="./index.html" style="color:orange"><b>
                    <img src="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" alt="" width="28" height="28"
                        class="d-inline-block align-text-bottom"> Si Quis </b><span class="text-info">
                    Software</span>
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link" id="navbarLandings" data-bs-toggle="dropdown" href="#"
                            aria-haspopup="true" aria-expanded="false">
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
                                                <a href="mailto:support@siquisoft.com" class="text-reset">Email
                                                    Us</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="text-white nav-link" id="navbarLandings" data-bs-toggle="dropdown" href="#"
                            aria-haspopup="true" aria-expanded="false">
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
                                                    Beautiful Themes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </li>

                    <li class="nav-item dropdown">
                        <a class="text-white nav-link" id="navbarLandings" data-bs-toggle="dropdown" href="#"
                            aria-haspopup="true" aria-expanded="false">
                            What's Happening
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl p-2" aria-labelledby="navbarLandings">
                            <div class="row gx-0">
                                <div class="col-12 col-lg-12">
                                    <div class="dropdown-body">
                                        <div class="row gx-0">
                                            <div class="col-sm-12 col-md-6">
                                                <!-- Heading -->
                                                <h1 class="text-info text-wrap">
                                                    <b>What's Happening</b>
                                                </h1>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <!-- Heading -->
                                                <h4 class="dropdown-header pb-4" style="color:orange">
                                                    <b>Newsroom</b>
                                                </h4>
                                                <div class="list-group list-group-flush">
                                                    <a class="list-group-item" href="./SiQuis-Newsroom-1.html">
                                                        <!-- Icon -->
                                                        <div class="icon icon-sm text-primary">
                                                            <img
                                                                src="https://img.icons8.com/ios/50/000000/learn-information.png" />
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="ms-4">
                                                            <!-- Heading -->
                                                            <h6 class="fw-bold text-uppercase text-info mb-0">
                                                                <b>All Feeds</b>
                                                            </h6>
                                                            <!-- Text -->
                                                            <p class="fs-sm text-gray-700 mb-0">
                                                                News, Blogs & Pods
                                                            </p>
                                                        </div>
                                                        <!-- Badge -->
                                                        <span class="badge rounded-pill bg-info-soft ms-auto">
                                                            11
                                                        </span>
                                                    </a>

                                                    <h4 class="dropdown-header pb-4" style="color:orange">
                                                        <b>At Si Quis</b>
                                                    </h4>
                                                    <div class="list-group list-group-flush">
                                                        <a class="list-group-item" href="./SiQuis-Newsroom-1.html">
                                                            <!-- Icon -->
                                                            <div class="icon icon-sm text-primary">
                                                                <img
                                                                    src="https://img.icons8.com/ios/50/000000/microphone.png" />
                                                            </div>
                                                            <!-- Content -->
                                                            <div class="ms-4">
                                                                <!-- Heading -->
                                                                <h6 class="fw-bold text-uppercase text-info mb-0">
                                                                    <b>All Feeds</b>
                                                                </h6>
                                                                <!-- Text -->
                                                                <p class="fs-sm text-gray-700 mb-0">
                                                                    Updates from here
                                                                </p>
                                                            </div>
                                                            <!-- Badge -->
                                                            <span class="badge rounded-pill bg-info-soft ms-auto">
                                                                11
                                                            </span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>

                    <li class="nav-item">
                        <!-- Button
              <a class="navbar-btn btn btn-xs text-black lift ms-10 mt-1" style="background-color:orange">
                Member Access 
              </a> -->
                        <input type="button" class="btn btn btn-xs text-black lift ms-sm-0 mt-sm-3 ms-lg-10 mt-lg-1"
                            style="background-color:orange" value="Member Access" onClick="passWord()">
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

                        </div>
                      </div> 
                    </div>
                  </div>
                </div> 
              </div>
            </li>  -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- WELCOME -->
    <section class="mt-n11 pt-12 pb-5 pt-md-14 pb-md-5 bg-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 text-center">

                    <!-- Headin -->
                    <h1 class="display-1 fw-bold text-white" data-aos="fade-up" data-aos-delay="50">
                        Pathways Into The Thriving Passion Economy
                    </h1>
                    <!-- Text -->
                    <p class="lead text-gray-500 mb-6 mx-auto" data-aos="fade-up" data-aos-delay="100"
                        style="max-width: 500px;">
                        We're getting ready to launch our beta-site and would
                        like you to be one of the first to check it out.
                    </p>
                    <!-- Button -->
                    <p class="mb-7 mb-md-9" data-aos="fade-up" data-aos-delay="150">
                        <a class="text-black btn btn-info shadow lift" data-bs-toggle="modal"
                            href="#modalSignupHorizontal">
                            Become A Beta-Partner<i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x text-dark">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
            </svg>
        </div>
    </div>

    <!-- FEATURES -->
    <section class="bg-gradient-dark-black py-8 py-md-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2 class="display-3 fw-bold text-white">
                        The Si Quis framework enables digital communities around ideas, products and services.
                    </h2><br>

                    <!-- Text -->
                    <p class="lead text-muted mb-9">
                        Create niche businesses of all types (verticals within horizontal markets) and insert them into
                        the massive revenue streams larger and well-established internet companies have mostly kept for
                        themselves. <br><br>
                        <span class="text-info">Uniquely position businesses to appeal to highly productive market
                            segments (fiercely passionate individuals) by focusing on their core interests and commerce
                            within these vertical markets.</span>
                    </p>

                </div>
            </div> <!-- / .row -->
        </div>

        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md">

                    <!-- Heading -->
                    <h2 class="text-white mb-0">
                        Core Elements
                    </h2>

                    <!-- Text -->
                    <p class="mb-0 text-muted">
                        Build your passion-based business.
                    </p>

                </div>

            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12">

                    <!-- Card -->
                    <div class="card card-row shadow-light-lg mb-6">
                        <div class="row gx-0">
                            <div class="col-12 col-md-4">

                                <!-- Slider -->
                                <div class="card-img-slider"
                                    data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#blogSlider", "draggable": false}'>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(./assets/img/photos/photo-31.jpg);" href="#!">
                                        <!-- Image (1) -->
                                        <img src="./assets/img/photos/photo-31.jpg" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(./assets/img/photos/photo-1.jpg);" href="#!">
                                        <!-- Image (1) -->
                                        <img src="./assets/img/photos/photo-1.jpg" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(./assets/img/photos/photo-32.jpg);" href="#!">
                                        <!-- Image (2) -->
                                        <img src="./assets/img/photos/photo-32.jpg" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(https://i.postimg.cc/P5g7rxRc/TruckDog.jpg);"
                                        href="#!">
                                        <!-- Image (4) -->
                                        <img src="https://i.postimg.cc/P5g7rxRc/TruckDog.jpg" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(https://i.postimg.cc/BQJBmChq/MSGBubbles.png);"
                                        href="#!">
                                        <!-- Image (5) -->
                                        <img src="https://i.postimg.cc/BQJBmChq/MSGBubbles.png" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(./assets/img/photos/photo-39.jpg);" href="#!">
                                        <!-- Image (3) -->
                                        <img src="./assets/img/photos/photo-39.jpg" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>

                                    <a class="card-img-start w-100 bg-cover"
                                        style="background-image: url(assets/img/photos/photo-29.jpg);" href="#!">
                                        <!-- Image (6) -->
                                        <img src="assets/img/photos/photo-29.jpg" alt="..."
                                            class="img-fluid d-md-none invisible">
                                    </a>
                                </div>

                                <!-- Shape -->
                                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                    <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                                    </svg>
                                </div>
                            </div>

                            <div class="col-12 col-md-8 position-static">
                                <!-- Slider -->
                                <div class="position-static"
                                    data-flickity='{"wrapAround": true, "pageDots": false, "imagesLoaded": true, "adaptiveHeight": true}'
                                    id="blogSlider">
                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center">
                                                Build Community Through Trusted Content
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-center text-muted">
                                                <br>
                                                <span class="text-info"><b><i>The Si Quis platform provides the
                                                            digital tools necessary to create and aggregate content to
                                                            customize experiences for your
                                                            audiences.</span></b></i><br><br>

                                                With over 1.8 billion websites in the US and roughly 4.4 million blog
                                                posts occurring each day, the plethora of “fake” or misleading
                                                information is making it difficult to find content that is credible, let
                                                alone relevant.

                                            </p>
                                        </a>
                                    </div>

                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center" id="modalTextboxOneTitle">
                                                Create A Socially-Driven Environment
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-center text-muted">
                                                <br>
                                                Encourage community engagement, be a part of the conversation, deliver
                                                key insights and drive loyalty with your passion-based audiences.
                                                <br><br>

                                                <span class="text-info"><b><i>Connect, communicate, and
                                                            collaborate with your community. The Si Quis Fourms module
                                                            lets you easily build, organize and manage your discussion
                                                            topics, articles, calendars, events and more.
                                                </span></b></i>
                                            </p>
                                        </a>
                                    </div>

                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center">
                                                Curated & Relevant Directories
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-center text-muted">
                                                <br>
                                                Finding the right products and services is time consuming. Providing a
                                                curated directory enables your audience to save time and keep up-to-date
                                                on trending products, services, events and more.
                                            </p>
                                            <p class="mb-6 text-center text-info"><b><i>The Si Quis platform allows
                                                        users to build and manage directories that rely upon your
                                                        knowledge and expertise to deliver quality user
                                                        experiences.</b></i>
                                            </p>
                                        </a>
                                    </div>

                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center">
                                                Enhanced Classifieds & Ecommerce
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-center text-info">
                                                <br>
                                                <b><i>No matter how you look at it, living with intention can be hard
                                                        and finding the products and services that resonate with your
                                                        values can be time consuming.</b></i>
                                            </p>
                                            <p class="mb-6 text-center text-muted">
                                                The Si Quis Software platform enables commerce to transact that is
                                                specific to your audience. Both classifieds advertising and ecommerce
                                                engines are available to create game changing user experiences.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center" id="modalTextboxOneTitle">
                                                Marketing & Advertising Opportunities
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-center text-info">
                                                <br><b><i>
                                                        The Si Quis platform allows you to manage your marketing and
                                                        advertising activities, as well as the advertising activities
                                                        that appear on your site. Generate meaningful traffic and
                                                        monetize it effectively.</b></i><br><br>

                                                <span class="text-center text-muted">Search Engine Optimization, Email
                                                    Marketing, Social Media Ads, Display Ads, Native Advertising, Video
                                                    Advertising, Web Pushes and Mobile Advertising.</span><br>
                                            </p>
                                        </a>
                                    </div>

                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center">
                                                Value Created. Value Captured
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-left text-muted">
                                                <br>
                                                <span class="text-info"><b><i> The Si Quis platform automatically
                                                            monetizes multiple points of activity on your site, allowing
                                                            you to stay focused on the core elements of your
                                                            business.</span></b></i><br><br>
                                                <span class="text-info"><b><i>Value Created: </span></b></i> Share
                                                your passion with like-minded people.<br><br>
                                                <span class="text-info"><b><i>Value Captured: </span></b></i>
                                                Monetize your passion with these audiences.
                                            </p>
                                        </a>
                                    </div>

                                    <div class="w-100">
                                        <!-- Body -->
                                        <a class="card-body" href="#!">
                                            <!-- Heading -->
                                            <h2 class="mb-0 fw-bold text-center" id="modalTextboxOneTitle">
                                                Powerful Tools, Powerful Data
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-6 text-center text-muted">
                                                <br>
                                                Help people interact with their passions by providing digital tools to
                                                quickly find the information, products and services they are most
                                                interested in.
                                                <br><br>

                                                <span class="text-info"><b><i>The Si Quis platform has the power
                                                            you'll need to jump above the churning seas of a data driven
                                                            world. Get started today and create a meaningful business
                                                            within the passion economy.</span></b></i>
                                            </p>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- ABOUT -->
    <section class="pt-5 pt-md-5 bg-black">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-6 col-lg-5">
                    <!-- Heading -->
                    <h2 class="display-5 fw-bold text-info mb-6 mb-md-8">
                        How individuals and companies are building <br>
                        <span class="display-3 fw-bold text-white mb-6 mb-md-8">
                            Niche Businesses
                        </span>
                    </h2>
                    <!-- Text -->
                    <p class="text-muted lead mb-5">
                        <span class="text-white fw-bold">Build upon your passions.<br></span> We build technologies for
                        you to create niche businesses around the things that ignite your passion. Our platform provides
                        the infrastructure needed to monetize your experiences, expertise and knowledge by creating
                        tangible value for like-minded and <i>fiercely passionate</i> individuals. <br>
                        <a class="btn btn-lg-black text-info" data-bs-toggle="collapse" href="#collapseRM1"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i>Read more...</i>
                        </a>
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Media -->
                    <div class="position-relative vw-md-50 pt-7 ps-7 ps-md-9 overflow-hidden"
                        style="max-width: 800px;">
                        <!-- Background -->
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 bg-gradient-multicolor rounded-4">
                        </div>
                        <!-- Image -->
                        <img class="position-relative w-100 w-md-150"
                            src="https://i.postimg.cc/KcP2mZV4/Screen-Shot-2021-08-23-at-3-08-00-PM.png"
                            alt="Si Quis Software">
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>

    <!-- Read more DIV -->
    <section class="bg-black">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="row col-12">
                    <div class="collapse" id="collapseRM1">
                        <div class="card card-body bg-black text-muted">
                            The passion economy has to do with how people can monetize the things they care about (their
                            passions). In contrast to the "gig economy", the passion economy is open to anyone
                            interested in following their passion. It's not necessary to be a creator, an influencer, a
                            freelancer or even a merchant. Ture all of these amazing people can flourish in the passion
                            economy, but others can too.
                            <br><br>

                            The Si Quis platform makes it possible for people to convert their knowledge and skills into
                            thriving, money-making businesses. Our technologies allow people to create and curate
                            content, directories and advertising; develop markets to buy and sell products and services;
                            engage in ecommerce and host enhanced classifieds; provide functionality for real-time
                            peer-to-peer connections and a lot more.
                            <br><br>

                            Our tools allow people to create niche businesses of all types and provide value to the
                            cohorts of equally passionate individuals seeking information, products, services and more
                            about what they care about.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="pt-6 pt-md-8 bg-black">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-6 col-lg-5 order-md-1">
                    <!-- Heading -->
                    <h2 class="display-5 fw-bold text-info mb-6 mb-md-8">
                        Step into the massive revenue stream of the<br>
                        <span class="display-3 fw-bold text-white mb-6 mb-md-8">
                            Passion Economy
                        </span>
                    </h2>

                    <!-- Text -->
                    <p class="text-muted lead mb-6">
                        <span class="text-white fw-bold">Are you fiercely passionate?<br></span>That's all it takes...
                        and maybe a little creative insight and work. if you can call following your passion work!
                        <br><br>Share what you know and help others learn more about their passions as well... these
                        audiences are grateful and monetization follows organically with the Si Quis Software framework
                        and management tools.<br>

                </div>
                <div class="col-12 col-md-6 col-lg-6 order-md-0">
                    <!-- Positioner -->
                    <div class="position-relative">
                        <!-- Media -->
                        <div class="position-relative vw-md-50 p-7 p-md-9 ps-0 overflow-hidden float-end"
                            style="max-width: 800px;">
                            <!-- Background -->
                            <div
                                class="position-absolute top-0 end-0 bottom-0 start-0 bg-gradient-multicolor rounded-4">
                            </div>
                            <!-- Image -->
                            <img class="position-relative w-100 w-md-120 float-end"
                                src="https://i.postimg.cc/CK9dbPM5/Screen-Shot-2021-08-23-at-1-55-17-PM.png" alt="...">
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>

    <!-- PLACEMENT RATES -->
    <section class="py-10 py-md-11 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-9">
                    <!-- Preheading -->
                    <h3 class="text-uppercase text-info">
                        By the numbers
                    </h3>

                    <!-- Heading -->
                    <h2 class="display-3 fw-bold text-white">
                        Create a place fiercely <br>
                        passionate people gather
                    </h2>

                    <p class="text-muted lead mb-4">
                        and tap into the massive revenue streams well-established internet companies have largely kept
                        for themselves. <br>
                        <a class="btn btn-lg-black text-info" data-bs-toggle="collapse" href="#collapseRM2"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i>Read more...</i>
                        </a>
                    </p>
                </div>

                <!-- Read more DIV -->
                <section class="bg-black">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="row col-12">
                                <div class="collapse" id="collapseRM2">
                                    <div class="card card-body bg-black text-muted">
                                        <span class="text-info">WORLDWIDE DIGITAL ADVERTISING: <b>$ 378.16 billion
                                                U.S. dollars</b></span><br>
                                        <i><b>Digital</b></i> advertising spending worldwide amounted to 378.16 billion
                                        U.S. dollars in 2020, increasing in spite of the economic impact of the covid-19
                                        pandemic. This figure is forecast to reach a total of $646 billion U.S. dollars
                                        by 2024.<br>
                                        <span class="text-white"><small><i> Statista Research, May 28,
                                                    2021</small></i></span>
                                        <br><br>

                                        <span class="text-info">U.S. CLASSIFIED SPEND: <b>$ 4.10 billion U.S.
                                                dollars</b>
                                        </span><br>
                                        In 2020, <i><b>digital</b></i> classifieds advertising revenue in the United
                                        States stood at 4.1 billion U.S. dollars.<br>
                                        <span class="text-white"><small><i> Statista Research, May 28,
                                                    2021</small></i></span>
                                        <br><br>

                                        <span class="text-info">TAM - PASSION ECONOMY: <b>$ 38.10 billion U.S.
                                                dollars</b></span><br>
                                        In it's infancy and difficult to quantify, the Total Addressable Market size for
                                        the Passion Economy is estimated at 38 billion U.S. dollars in 2020 and growing
                                        rapidly.<br>
                                        <span class="text-white"><small><i> Disciple Media, Feb 11,
                                                    2021</small></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Stats -->
                <div class="d-flex">
                    <div class="pe-4">
                        <h1 class="fw-bold text-white mb-0">$
                            <span data-countup='{"startVal": 0}' data-to="378" data-aos
                                data-aos-id="countup:in">0</span>B
                        </h1>
                        <p class="text-gray-700 mb-0">
                            Advertising
                        </p>
                    </div>
                    <div class="px-4">
                        <h1 class="fw-bold text-white mb-0">$
                            <span data-countup='{"startVal": 0}' data-to="4.1" data-aos
                                data-aos-id="countup:in">0</span>B
                        </h1>
                        <p class="text-gray-700 mb-0">
                            Classified Ads
                        </p>
                    </div>
                    <div class="ps-4">
                        <h1 class="fw-bold text-white mb-0">$
                            <span data-countup='{"startVal": "7"}' data-to="38" data-aos
                                data-aos-id="countup:in">0</span>B
                        </h1>
                        <p class="text-gray-700 mb-0">
                            Passion Economy 2020
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- IMAGE -->
    <section class="py-14 py-lg-16 jarallax" data-jarallax data-speed=".8"
        style="background-image: url(assets/img/covers/cover-19.jpg);">
        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x text-black">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor" />
            </svg>
        </div>
        <!-- Shape -->
        <div class="shape shape-bottom shape-fluid-x text-black">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0h720v250H0V125h720z" fill="currentColor" />
            </svg>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 py-md-10 bg-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <!-- Pretitle -->
                    <h3 class="text-uppercase text-info mb-6">
                        Start creating
                    </h3>
                    <!-- Heading -->
                    <h3 class="display-3 fw-bold text-white">
                        a renewable, sustainable,<br>passion-based future.
                    </h3>
                    <!-- Text -->
                    <p class="fs-lg text-gray-500 mb-6 mb-md-8">
                        The passion economy groundswell has begun.<br>
                        Si Quis Software can help you drop in.
                    </p>
                    <!-- Button -->
                    <p class="mb-7 mb-md-9" data-aos="fade-up" data-aos-delay="150">
                        <a class="text-black btn btn-info shadow lift" data-bs-toggle="modal"
                            href="#modalSignupDIHorizontal">
                            Sign up now !<i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
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
                            <img src="https://i.postimg.cc/qq6pfdnP/Si-Quis-Icon.png" alt="" width="32" height="30"
                                class="d-inline-block align-text-bottom"> Si Quis </b><span class="text-info">
                            Software</span>
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

</body>

</html>
