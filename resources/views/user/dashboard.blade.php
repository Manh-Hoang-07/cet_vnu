<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang khảo thí</title>
    <link href="{{asset('css/libs1/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs1/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs1/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs1/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs1/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs1/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs1/sweetalert.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="{{asset('css/fontawesome/css/all.css')}}" rel="stylesheet">
</head><!--/head-->

<body>

    <header id="header"><!--header--> 
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/infocet"><img alt="" src="{{ asset('images/logo.png') }}" style="height: 80px;width:240px;"></a>
                        </div>
                    </div>
                    <div>
                        <h1 style="text-transform: uppercase;color: #007F49">Cổng thông tin khảo thí</h1>
                    </div>
                    @if(@isset(\Illuminate\Support\Facades\Auth::user()->name))
                    <div class="col-sm-8">
                        <ul class="nav pull-right top-menu">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <img alt="" src="{{ asset('images/2.png') }}">
                                    <span class="username" style="color: #000;">{{\Illuminate\Support\Facades\Auth::user()->name ?? 'đăng nhập'}}</span>
                                    <b class="caret" style="color: #000;"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="/update-info"><i class=" fa fa-suitcase"></i>Cập nhật tài khoản</a></li>
                                    <li><a href="/logout"><i class="fa fa-key"></i>Đăng xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/login"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                                <li><a href="/registration"><i class="fa fa-registered"></i>Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/cetinfo" class="active">Trang chủ</a></li>
                                <li class="dropdown">
                                    <a href="">Thông tin<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/cetevent">Sự kiện</a></li>
                                        <li><a href="/cetexam">Kỳ thi</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Đăng ký thi</a></li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm"/>
                            <input type="submit" style="margin-top:0;color:#fff;border-radius: 5px;" name="search" class="btn btn-primary btn-sm" value="Tìm kiếm">
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <section>    
        @yield('content')
    </section>
    <br>
    <footer id="footer"><!--Footer-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2020. All rights reserved.</p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('js/libs1/jquery.js')}}"></script>
    <script src="{{asset('js/libs1/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/libs1/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/libs1/price-range.js')}}"></script>
    <script src="{{asset('js/libs1/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/libs1/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('js/libs1/sweetalert.min.js')}}"></script>
    @if(Session::has('success'))
        <script type="text/javascript">
            toastr.success("{!!Session::get('success')!!}");
        </script>
    @endif
</body>
</html>