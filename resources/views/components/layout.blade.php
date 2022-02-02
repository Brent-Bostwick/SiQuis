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
                if (pass1.toLowerCase() == "november2021") {
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
    <style>
        #more {
            display: none;
        }

        #more2 {
            display: none;
        }

        #more3 {
            display: none;
        }

        #more4 {
            display: none;
        }

        #more5 {
            display: none;
        }

        #more6 {
            display: none;
        }

        #more7 {
            display: none;
        }

        #more8 {
            display: none;
        }

        #more9 {
            display: none;
        }

        table td {
            position: relative;
        }

        table td input.rate {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
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
    @livewireStyles
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHWQ4SS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- <livewire:lead /> --}}

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark bg-pattern-2">
        <div class="container-md">

            <!-- Brand -->
            <a class="navbar-brand lift" href="{{ url('/') }}" style="color:orange"><b>
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
                                                <a class="dropdown-item" href="{{ url('/about') }}">
                                                    Si Quis Software
                                                </a>
                                                <a class="dropdown-item" href="{{ url('/passion-economy') }}">
                                                    The Passion Economy
                                                </a>
                                                <a class="dropdown-item mb-5" href="{{ url('/team') }}">
                                                    The Team
                                                </a>
                                                <!-- Heading -->
                                                <h4 class="dropdown-header" style="color:orange">
                                                    <b>Our Name</b>
                                                </h4>
                                                <!-- List -->
                                                <a class="dropdown-item mb-5" href="{{ url('/siquis') }}">
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
                                                <a class="dropdown-item mb-5" href="{{ url('/platform') }}">
                                                    Platform
                                                </a>
                                                <!-- Heading -->
                                                <h4 class="dropdown-header" style="color:orange">
                                                    <b>Back-end</b>
                                                </h4>
                                                <!-- List -->
                                                <a class="dropdown-item" href="{{ url('/management') }}">
                                                    Management
                                                </a>
                                                <a class="dropdown-item mb-5" href="{{ url('/operations') }}">
                                                    Operations
                                                </a>
                                                <!-- Heading -->
                                                <h4 class="dropdown-header" style="color:orange">
                                                    <b>Front-end</b>
                                                </h4>
                                                <!-- List -->
                                                <a class="dropdown-item" href="{{ url('/themes') }}">
                                                    Beautiful Themes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </li>

                    {{-- <li class="nav-item dropdown">
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
                    </li> --}}

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
    {{ $slot }}
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
    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>



    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

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
    @livewireScripts

</body>

</html>
