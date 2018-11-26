<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('fav-icon.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{ config('app.name', 'Laravel') }} #FSTMKUIS</title>

        <!-- Icon css link -->
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/elegant-icon/style.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/themify-icon/themify-icons.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="{{ asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/animate-css/animate.css')}}" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">

        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo_fstm.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Home</a></li>
                        
                        <li class="nav-item"><a target="_blank" href="http://fstm.kuis.edu.my/blog">Blog</a></li>
                        
                        
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} </a>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('/home') }}">Admin panel
								</a>
							</div>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('trainings') }}">Trainings panel
                                </a>
							</div>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('registers') }}">Registration panel
                                </a>
							</div>
							
                        </li>
                    @endguest
					</ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                        <li><a href="#"><i class="icon_bag_alt"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>FSTM KUIS Training System</h4>
                    <h5></h5>
					<div>
					<a class="bg_btn" target="_blank" href="http://fstm.kuis.edu.my/blog">About #fstmkuis</a>
					</div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            <div class="container">
                @yield('content')
            </div>
        </section>
        <!--================End Contact Us Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <div class="col-lg-6 col-md-6">
                            <aside class="f_widget subscribe_widget">
                                <div class="f_w_title">
                                    <h3>Our Newsletter</h3>
                                </div>
                                <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                                <ul>
                                    <li><a href="http://facebook.com/kuis.fstm" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://instagram.com/kuis.fstm" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    
                                </ul>
                            </aside>
                        </div>
                        
                        
                        <div class="col-lg-6 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contact Us</h3>
                                </div>
                                <a href="#">+60-129034614</a><br>
                                <a href="#">Email: fstm@kuis.edu.my</a>
                                <p>FSTM KUIS, Bandar Seri Putra, Kajang Selangor</p>
								<p>Google Maps: <a href="http://bit.ly/mapfstm" target="_blank">bit.ly/mapfstm</a></p>
                                <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                        <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Disclaimer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Advertisement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/popper.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <!-- Rev slider js -->
        <script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <!-- Extra plugin css -->
        <script src="{{ asset('vendors/counterup/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('vendors/counterup/apear.js')}}"></script>
        <script src="{{ asset('vendors/counterup/countto.js')}}"></script>
        <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('vendors/parallaxer/jquery.parallax-1.1.3.js')}}"></script>
        <!--Tweets-->
        <script src="{{ asset('vendors/tweet/tweetie.min.js')}}"></script>
        <script src="{{ asset('vendors/tweet/script.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{ asset('js/gmaps.min.js')}}"></script>

        <!-- contact js -->
        <script src="{{ asset('js/jquery.form.js')}}"></script>
        <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('js/contact.js')}}"></script>

        <script src="{{ asset('js/theme.js')}}"></script>
    </body>
</html>
