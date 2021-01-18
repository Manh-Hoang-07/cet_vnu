@extends('user.dashboard')
@section('content')
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>CET</span></h1>
                                <h2>Thông tin các đợt đăng ký</h2>
                                <p>vsdhbfjgjkjkbhjvg</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{('images/girl1.jpg')}}" class="girl img-responsive" alt="" style="height: 441px;width: 484px;" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>CET</span></h1>
                                <h2>Hahaahhahahahaha</h2>
                                <p>dkfjgfkdskdjfdkskdjf</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{('images/girl2.jpg')}}" class="girl img-responsive" alt="" style="height: 441px;width: 484px;" />
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>CET</span></h1>
                                <h2>sdrtyui</h2>
                                <p>shjkkjhgffgh</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{('images/girl3.jpg')}}" class="girl img-responsive" alt="" style="height: 441px;width: 484px;" />
                            </div>
                        </div>
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
<div class="padding-right">
   <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Thông tin trung tâm</h2>
    </div><!--features_items-->
<!--/recommended_items-->
    <div>
        Công ty ô tô Toyota Việt Nam (TMV) được thành lập vào tháng 9 năm 1995, là liên doanh với số vốn đầu tư ban đầu là 89,6 triệu USD từ Tập đoàn Toyota Nhật Bản (70%), Tổng công ty Máy Động Lực và Máy Nông Nghiệp - VEAM (20%) và Công ty TNHH KUO Singapore (10%).
        <br>

    Là một trong những liên doanh ô tô có mặt đầu tiên tại thị trường Việt Nam, TMV luôn nỗ lực phát triển bền vững và cùng Việt Nam “Tiến tới tương lai”. TMV đã, đang và sẽ không ngừng cung cấp những sản phẩm có chất lượng cao và dịch vụ sau bán hàng hoàn hảo nhằm mang đến sự hài lòng cao nhất cho khách hàng, cũng như đóng góp tích cực cho sự phát triển của ngành công nghiệp ô tô và đất nước Việt Nam.
    <br>

    Kể từ khi thành lập đến nay, TMV đã không ngừng lớn mạnh và liên tục phát triển không chỉ về quy mô sản xuất, mà cả doanh số bán hàng. Hiện tại, TMV luôn giữ vị trí dẫn đầu trên thị trường ô tô Việt Nam với sản lượng nhà máy của công ty đạt trên 70.000 xe/năm (theo 3 ca làm việc). Doanh số bán cộng dồn của TMV đạt trên 617.228  chiếc, và các sản phẩm đều chiếm thị phần lớn trên thị trường. Từ 11 nhân viên trong ngày đầu thành lập, tới nay số lượng cán bộ công nhân viên của công ty đã lên tới hơn 2.400 người và hơn 8.200 nhân viên làm việc tại hệ thống 64 đại lý/chi nhánh đại lý và Trạm dịch vụ ủy quyền Toyota phủ rộng khắp trên cả nước.
    </div>
</div>
</div>
</section>
@endsection