<!DOCTYPE html>
<head>
<title>Trang admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="{{asset('css/libs2/bootstrap.min.css')}}" >
<link href="{{asset('css/libs2/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/libs2/style-responsive.css')}}" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('css/libs2/font.css')}}" type="text/css"/>
<link href="{{asset('css/libs2/font-awesome.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/libs2/morris.css')}}" type="text/css"/>
<link href="{{ asset('/css/fontawesome/css/all.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/libs2/monthly.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="{{asset('js/libs2/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('js/libs2/raphael-min.js')}}"></script>
<script src="{{asset('js/libs2/morris.js')}}"></script>



</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
<div class="brand">
    <a href="/" class="logo">
        <img src="/images/logo.png" style="height: 80px;width: 240px;">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset('images/2.png') }}">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href=""><i class=" fa fa-suitcase"></i>Thông tin tài khoản</a></li>
                <li><a href="/admin/login"><i class="fa fa-key"></i>Đăng xuất</a></li>
            </ul>
        </li>
    </ul>
</div>
</header>

<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="">
                        <i class="fa fa-th"></i>
                        <span>Thay logo</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Chỉnh sửa kỳ thi</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/admin/add-exam">Thêm kỳ thi</a></li>
                        <li><a href="/admin/all-exams">Tất cả kỳ thi</a></li> 
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Chỉnh sửa sự kiện</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/admin/add-event">Thêm sự kiện</a></li>
                        <li><a href="/admin/all-events">Tất cả sự kiện</a></li> 
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>

<section id="main-content">
    <section class="wrapper">
        @yield('content')
    </section>
    <div class="footer">
        <div class="wthree-copyright">
            <p><center><a href="#" style="color: white;">Đại học Quốc gia</a></center></p>
        </div>
    </div>
</section>

</section>
<script src="{{asset('js/libs2/bootstrap.js')}}"></script>
<script src="{{asset('js/libs2/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/libs2/scripts.js')}}"></script>
<script src="{{asset('js/libs2/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/libs2/jquery.nicescroll.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if(Session::has('success'))
        <script type="text/javascript">
            toastr.success("{!!Session::get('success')!!}");
        </script>
    @endif
</body>
</html>
