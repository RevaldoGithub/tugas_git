<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Revaldo Dzaki Hidayat | Website Pribadi</title>
    <!-- <link rel="icon" href="{{asset('')}}assets/images/icon.png" type="image/gif" sizes="16x16"> -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Revaldo Dzaki Hidayat | Website Pribadi" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{asset('')}}assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet" type="text/css" />
    <style>
        :root {
            --primary-color: #D9B229;
            /* --primary-color-rgb: 34, 189, 146; */
            --primary-color-rgb: #D9B229;
        }
    </style>
    <link href="{{asset('')}}assets/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body class="onepage dark-scheme">
    <div id="wrapper">
        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img alt="" class="logo" src="{{asset('')}}asset/images/logo.png" />
                                            <!-- <img alt="" class="logo-2" src="{{asset('')}}assets/images/logo.png" /> -->
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-right">
                                <ul id="mainmenu">
                                    <li><a class="active" href="#top">Home<span></span></a></li>
                                    <li><a href="#section-about">About me<span></span></a></li>
                                    <li><a href="#section-services">What I Do<span></span></a></li>
                                    <li><a href="#section-portfolio">Portfolio<span></span></a></li>
                                    <li><a href="#section-resume">My Resume<span></span></a></li>
                                    <li><a href="#section-contact">Contact Me<span></span></a></li>
                                </ul>
                                <div class="menu_side_area">
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- page preloader begin -->
            <div id="preloader">
                <div class="preloader1"></div>
            </div>
            <!-- page preloader close -->

            <!-- float text begin -->
            <div class="float-text">
                <div class="de_social-icons">
                    <a href="{{$config->ig}}"><i class="fa fa-instagram fa-lg"></i></a>
                    <a href="https://wa.me/{{$config->wa}}"><i class="fa fa-whatsapp fa-lg"></i></a>
                </div>
                <span>Follow Me</span>
            </div>
            <!-- float text close -->

            <!-- load external content begin -->
            <div id="de_modal">
                <button class="button-close"></button>
                <div class="d-modal-loader"></div>
            </div>
            <!-- load external content close -->


            @yield('content')


        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="index.html">
                            <span class="copy">&copy; Copyright 2022 - {{$banners->nama}} By SMK Darussaadah</span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="{{$config->ig}}"><i class="fa fa-instagram fa-lg"></i></a>
                            <a href="https://wa.me/{{$config->wa}}"><i class="fa fa-whatsapp fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('')}}assets/js/plugins.js"></script>
    <script src="{{asset('')}}assets/js/designesia.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="{{asset('')}}assets/form.js"></script>
    <script>
        jQuery(document).ready(function() {
            $(function() {
                // jquery typed plugin
                $(".typed").typed({
                    stringsElement: $('.typed-strings'),
                    typeSpeed: 100,
                    backDelay: 500,
                    loop: true,
                    contentType: 'html', // or text
                    // defaults to false for infinite loop
                    loopCount: false,
                    callback: function() {
                        null;
                    },
                    resetCallback: function() {
                        newTyped();
                    }
                });
            });
        });
    </script>
</body>

</html>