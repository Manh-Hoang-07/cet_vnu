
<!-- 
<form action="{{route('saveRegistration')}}" method="post">
	@csrf
<div>
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="password" name="password">
	<input type="submit" name="submit" value="đăng ký">
</div>
</form> -->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang đăng ký</title>
  <link href="{{('css/libs1/bootstrap.min.css')}}" rel="stylesheet">
  
  <style type="text/css">
    body {  
      padding-top: 0px;
      }
      .form-control { 
      margin-bottom: 10px;
      }
      .login-screen-bg {  
      background-color: #EFEFEF;
      }
  </style>
</head>
<body>
  <div class="container"> 
  <h1 class="text-center">Trang khảo thí Đại học Quốc gia Hà Nội</h1> 
  <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
    <legend><a href=""></a> Đăng ký</legend> 
    <form action="{{route('saveRegistration')}}" method="post" class="form">
    @csrf 
      <input class="form-control" name="name" placeholder="Tên" type="text"> 
      <input class="form-control" name="email" placeholder="email" type="Email">
      <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"> 
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>
<script src="{{('js/libs1/register.min.js')}}"></script>
<script src="{{('js/libs1/jquery.js')}}"></script>
</body>
</html>