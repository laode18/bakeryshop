<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="csrf-token" content="{{csrf_token()}}">
      <!-- site metas -->
      <title>BakeryShop - Toke Kue</title>

      <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/chef.png')}}">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ URL::asset('css/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ URL::asset('css/css/style.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('css/style2.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ URL::asset('css/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ URL::asset('img/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ URL::asset('css/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('css/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
    <!-- header section start -->
    <div class="header_section1">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo"> <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ URL::asset('img/chef.png'); }}" width="40" height="40" alt="">
        <h1><font color="white"> &nbsp; BakeryShop</font></h1>
      </a></div>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="/home">Home</a>
                           <a class="nav-item nav-link" href="/productcategory">Product</a>
                           <a class="nav-item nav-link" href="/email">Contact</a>
                        </div>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                    {{-- cart --}}
                        <li class="nav-item">
                            {{-- <a href="{{ route('carts.index') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}
                                </span>
                            </a> --}}
                            <a href="{{ route('carts.index') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}
                                </span>
                            </a>
                        </li>


                    <li class="nav-item dropdown">
                            <a a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <img src="{{URL::asset('plugins/images/users/user.png')}}" alt="user-img" width="26" height="26" class="img-circle"><span class="text-white"><font size="3">{{Auth::user()->name}}</font></span></a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i>&nbsp; &nbsp;{{__('logout')}}</a>
                            </div>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- contact section end -->
    <!-- section footer start -->
    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div><center><img src="{{ URL::asset('img/chef.png'); }}" width="70" height="60" alt=""></center>
        <h1><font color="white"> BakeryShop</font></h1></div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-logo"><img src="{{ URL::asset('img/phone-icon.png') }}"><span class="map_text">(+62) 853-5557-3928</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-logo"><img src="{{ URL::asset('img/email-icon.png') }}"><span class="map_text">bakeryshop@gmail.com</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="{{ URL::asset('img/fb-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ URL::asset('img/twitter-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ URL::asset('img/in-icon.png') }}"></a></li>
                                <li><a href="#"><img src="{{ URL::asset('img/google-icon.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div> 
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-lg-2">
                        <p class="dummy_text">Penjualan produk kue dan roti yang terbaik dan terlaris</p>
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text">Address </h2>
                        <div class="image-icon"><img src="{{ URL::asset('img/map-icon.png') }}"><span class="pet_text">No 16 Pesantren Street 30/2 Cimahi City, Jawa Barat.</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text">Our Company </h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Delivery</li>
                                <li>Legal Notice</li>
                                <li>About us</li>
                                <li>Secure payment</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                <div class="col-sm-6 col-lg-3">
                    <h2 class="adderess_text">Products</h2>
                    <div class="delivery_text">
                            <ul>
                                <li>Prices drop</li>
                                <li>New products</li>
                                <li>Best sales</li>
                                <li>Contact us</li>
                                <li>Sitemap</li>
                            </ul>
                        </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <center><img src="{{ URL::asset('img/chef.png'); }}" width="70" height="60" alt=""></center>
        <h1><font color="white"> BakeryShop</font></h1>
                </div>
                </div>
                </div> 
            </div>
        </div>
    <!-- section footer end -->
    <div class="copyright">Copyright &copy; 2022 Bakery Shop. All Right Reserved.</div>


      <!-- Javascript files-->
      <script src="{{ URL::asset('js/js1/popper.min.js') }}"></script>
      <script src="{{ URL::asset('js/js1/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ URL::asset('js/js1/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ URL::asset('js/js1/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ URL::asset('js/js1/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ URL::asset('js/js1/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ URL::asset('js/js1/owl.carousel.js') }}"></script>
      <script src="{{URL::asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('js/js/app-style-switcher.js')}}"></script>
    <script src="{{URL::asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('js/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{URL::asset('js/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="https://cdn.tiny.cloud/1/votcjwdfkz4ot27wm4oz43l69vwkqu5u33b22gyfj5q5uguv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'#ckview' })</script>
    <script src="{{URL::asset('js/js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
      <!-- Script -->
   </body>
</html>