@extends('user/layout/index')

@section('title')
Trang chủ - C2C
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="css/allstyle.css">
<style> 
	#show-loading{
		position: absolute; 
		width: 100%; 
		z-index: 1000; 
		height: 100%; 
		background: white;
	}
</style>

@endsection

@section('content') 
<div class="data-table-area mg-b-15" id="show-loading">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="pt-5" id="loading-before-page">
						<div class="loading-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="hidden-loading">

	<!-- Begin Slider With Category Menu Area -->
	<div class="slider-with-banner">
		<div class="container">
			<div class="row">
				
				 <div class="col-lg-8 col-md-8">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-1">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>khuyến mãi <span>-20% </span> trong tuần</h5>
                                            <h2> Galaxy S9 | S9+</h2>
                                            <h3>giá khởi điểm <span>1209.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-2">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Ưu đãi giảm giá <span>Thứ Sáu</span> Tuần Này</h5>
                                            <h2>Bàn làm việc Surface Studio 2018</h2>
                                            <h3>Bắt đầu từ <span>$824.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-3">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Ưu đãi giảm giá <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Bắt đầu từ <span>$1849.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Mua Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                  </div>
                  <div class="col-lg-4 col-md-4 text-center pt-sm-30 pt-xs-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="/Template/images/banner/1_1.jpg" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-md-30 mt-xs-25 mb-xs-5">
                                <a href="#">
                                    <img src="/Template/images/banner/1_2.jpg" alt="">
                                </a>
                            </div>
                        </div>
				<!-- Slider Area End Here -->
			</div>
		</div>
	</div>
	<!-- Slider With Category Menu Area End Here -->

	<!-- Begin Li's Static Banner Area -->
		<!-- Li's Static Banner Area End Here -->



 <!-- Begin Static Top Area -->
            <div class="static-top-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="static-top-content mt-sm-30">
                                Quà tặng đặc biệt: Quà tặng mỗi ngày vào cuối tuần - Mã phiếu giảm giá mới 
                                <span>VNi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Top Area End Here -->




<div class="product-area pt-55 pb-25 pt-xs-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản phẩm mới</span></a></li>
                                   <!-- <li><a data-toggle="tab" href="#li-bestseller-product"><span>Khuyến mãi</span></a></li>
                                   <li><a data-toggle="tab" href="#li-featured-product"><span>Nỗi bật</span></a></li> -->
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    @foreach($spnew as $san_pham_new)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                @if(count($share_sp_toan_bo_hinh_anh_chinh) != 0) 
                                                @foreach($share_sp_toan_bo_hinh_anh_chinh as $tbhasp)
                                                @if($tbhasp->id_sp == $san_pham_new->id)
                                                    <a href="san-pham/{{changeTitle($san_pham_new->ten)}}-a{{$san_pham_new->id}}.html">
                                                       
                                                        <img height="200px" src="/uploads/images/products/{{$tbhasp->ten}}" alt="">
                                                    </a>
                                                @break   
                                                @endif 
                                                @endforeach  
                                                @else
                                                <a href="san-pham/{{changeTitle($san_pham_new->ten)}}-a{{$san_pham_new->id}}.html">
                                                    <img src="https://via.placeholder.com/300x300" >
                                                </a>  
                                                @endif  
                                                <span class="sticker">Mới</span> 
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Đánh giá</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">{{$san_pham_new->ten}}</a></h4>
                                                    @if($san_pham_new->khuyen_mai != 0)
                                            <div class="price-box">
                                                <span class="new-price new-price-2">{{number_format($san_pham_new->gia_ban)}}₫</span>
                                                <span class="old-price">{{number_format($san_pham_new->gia_goc)}}₫</span> 
                                            </div>
                                            @else
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($san_pham_new->gia_goc)}}₫</span>
                                            </div>
                                            @endif 
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="javascript:void(0)" onclick="themGioHang({{$san_pham_new->id}})">Thêm giỏ hàng</a></li>
                                                        <li><a class="links-details" href="javascript:void(0)" onclick="themSpYeuThich({{$san_pham_new->id}})"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a data-target="#xemnhanhsanpham{{$san_pham_new->id}}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="/Template/images/product/large-size/2.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/10.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/8.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="li-featured-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


	<!-- hình ảnh  -->
  <div class="li-static-banner li-static-banner-4 text-center pt-20">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner pb-sm-30 pb-xs-30">
                                <a href="#">
                                    <img src="/Template/images/banner/2_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div style="margin-bottom: 50px;" class="single-banner">
                                <a href="#">
                                    <img src="/Template/images/banner/2_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
<!-- kết thúc hình ảnh -->

	<!-- Bắt đầu sản phẩm theo danh mục -->
	<div class="product-area pt-30 pb-10">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" >
					<div class="li-product-tab">
						@if($all_share_danh_muc_san_pham != null)
						<ul class="nav li-product-menu">
							<?php $count = 0; ?>
							@foreach($all_share_danh_muc_san_pham as $dmsp)
							<li><a @if($count == 0) class="active" @endif data-toggle="tab" href="#danhmuc{{$dmsp->id}}"><span>{{$dmsp->ten}}</span></a></li> 
							<?php $count++; ?>
							@endforeach
						</ul> 
						@endif           
					</div>
					<!-- Begin Li's Tab Menu Content Area -->
				</div>
			</div>
			<div class="tab-content">
				@if($all_share_danh_muc_san_pham != null)
				<?php $count = 0; ?>
				@foreach($all_share_danh_muc_san_pham as $dmsp)		
				<div id="danhmuc{{$dmsp->id}}" class="tab-pane @if($count == 0) active show @endif " role="tabpanel">
					<div class="row">
						<div class="product-active owl-carousel">

							@if(count($san_pham_theo_danh_muc) != 0)
							@foreach($san_pham_theo_danh_muc as $sptdm)
							@if($sptdm->id_danh_muc_sp == $dmsp->id)
							<div class="col-lg-12" >
								<!-- Bắt đầu một sản phẩm theo danh mục -->
								<div class="single-product-wrap">
									<div class="product-image">
										@if(count($share_sp_toan_bo_hinh_anh_chinh) != 0) 
										@foreach($share_sp_toan_bo_hinh_anh_chinh as $tbhasp)
										@if($tbhasp->id_sp == $sptdm->id)
										<a href="san-pham/{{changeTitle($sptdm->ten)}}-a{{$sptdm->id}}.html">
											<img height="220px" src="uploads/images/products/{{$tbhasp->ten}}" alt="{{$sptdm->mo_ta}}">
										</a>
										@break   
										@endif 
										@endforeach  
										@else
										<a href="javascript:void(0)">
											<img src="https://via.placeholder.com/300x300" alt="{{$sptdm->mo_ta}}">
										</a>  
										@endif 
										@if($sptdm->moi == 1)
										<span class="sticker">Mới</span>
										@endif
									</div>
									<div class="product_desc">
										<div class="product_desc_info"> 
											<h4><a class="product_name" href="san-pham/{{changeTitle($sptdm->ten)}}-a{{$sptdm->id}}.html">{{$sptdm->ten}}</a></h4>
											@if($sptdm->khuyen_mai != 0)
											<div class="price-box">
												<span class="new-price new-price-2">{{number_format($sptdm->gia_ban)}}₫</span>
												<span class="old-price">{{number_format($sptdm->gia_goc)}}₫</span> 
											</div>
											@else
											<div class="price-box">
												<span class="new-price">{{number_format($sptdm->gia_goc)}}₫</span>
											</div>
											@endif 
										</div>
										<div class="add-actions">
											<ul class="add-actions-link">
												<li class="add-cart active"><a href="javascript:void(0)" onclick="themGioHang({{$sptdm->id}})">Thêm giỏ hàng</a></li>
												<li><a class="links-details" href="javascript:void(0)" onclick="themSpYeuThich({{$sptdm->id}})"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#xemnhanhsanpham{{$sptdm->id}}"><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Kết thúc một sản phẩm theo danh mục -->
							</div>  

							@endif
							@endforeach
							@endif


						</div>
					</div>
				</div>
				<?php $count++; ?>
				@endforeach
				@endif    

			</div>
		</div>
	</div>
	<!-- Kết thúc sản phẩm theo danh mục -->

	<!-- Bắt đầu banner hình ảnh-->

	<!-- Kết thúc banner hình ảnh -->

	<!-- Bắt đầu sản phẩm mới -->
	<section class="product-area li-laptop-product li-laptop-product-2 pt-10 pb-45">
		<div class="container">
			<div class="row">  
				<!-- Begin Li's Section Area -->
				<div class="col-lg-12">
					<div class="li-section-title">
						<h2>
							<span>Sản phẩm nỗi bật</span>
						</h2> 
						@if($all_share_danh_muc_san_pham != null) 
						<ul class="li-sub-category-list">
							<?php $count = 0; ?>
							@foreach($all_share_danh_muc_san_pham as $dmsp)
							
							<li class="active"><a href='danh-muc-san-pham/<?php echo changeTitle($dmsp->ten); ?>-a{{$dmsp->id}}.html'>{{$dmsp->ten}}</a></li>
							<?php $count++; ?>
							@endforeach
						</ul> 
						@endif           
					</div> 
					<div class="row">
						<div class="product-active owl-carousel">

							@if(count($toan_bo_san_pham_moi) != 0)
							@foreach($toan_bo_san_pham_moi as $tbspm) 
							<div class="col-lg-12">
								<!-- Bắt đầu một sản phẩm theo danh mục -->
								<div class="single-product-wrap">
									<div class="product-image">
										@if(count($share_sp_toan_bo_hinh_anh_chinh) != 0) 
										@foreach($share_sp_toan_bo_hinh_anh_chinh as $tbhasp)
										@if($tbhasp->id_sp == $tbspm->id)
										<a href="san-pham/{{changeTitle($tbspm->ten)}}-a{{$tbspm->id}}.html">
											<img height="200px" src="uploads/images/products/{{$tbhasp->ten}}" alt="{{$sptdm->mo_ta}}">
										</a>
										@break   
										@endif 
										@endforeach  
										@else
										<a href="san-pham/{{changeTitle($tbspm->ten)}}-a{{$tbspm->id}}.html">
											<img src="https://via.placeholder.com/300x300" alt="{{$sptdm->mo_ta}}">
										</a>  
										@endif  
										<span class="sticker">Mới</span> 
									</div>
									<div class="product_desc">
										<div class="product_desc_info"> 
											<h4><a class="product_name" href="single-product.html">{{$tbspm->ten}}</a></h4>
											@if($tbspm->khuyen_mai != 0)
											<div class="price-box">
												<span class="new-price new-price-2">{{number_format($tbspm->gia_ban)}}₫</span>
												<span class="old-price">{{number_format($tbspm->gia_goc)}}₫</span> 
											</div>
											@else
											<div class="price-box">
												<span class="new-price">{{number_format($tbspm->gia_goc)}}₫</span>
											</div>
											@endif 
										</div>
										<div class="add-actions">
											<ul class="add-actions-link">
												<li class="add-cart active"><a href="javascript:void(0)" onclick="themGioHang({{$tbspm->id}})">Thêm giỏ hàng</a></li>
												<li><a class="links-details" href="javascript:void(0)" onclick="themSpYeuThich({{$tbspm->id}})"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#xemnhanhsanpham{{$tbspm->id}}"><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Kết thúc một sản phẩm theo danh mục -->
							</div>   
							@endforeach
							@endif
							
						</div>
					</div>
				</div>
				<!-- Li's Section Area End Here -->
			</div>
		</div>
	</section>
	<!-- Kết thúc sản phẩm mới -->
	<!-- Bắt đầu sản phẩm bán chạy -->
	<section class="product-area li-laptop-product li-smart-phone-product-2 pb-50">
		<div class="container">
			<div class="row">
				<!-- Begin Li's Section Area -->
				<div class="col-lg-12">
					<div class="li-section-title">
						<h2>
							<span>Sản phẩm bán chạy</span>
						</h2>
						@if($all_share_danh_muc_san_pham != null) 
						<ul class="li-sub-category-list">
							<?php $count = 0; ?>
							@foreach($all_share_danh_muc_san_pham as $dmsp)
							
							<li class="active"><a href="danh-muc-san-pham/<?php echo changeTitle($dmsp->ten); ?>-a{{$dmsp->id}}.html">{{$dmsp->ten}}</a></li>
							<?php $count++; ?>
							@endforeach
						</ul> 
						@endif   
					</div> 
					<div class="row">
						<div class="product-active owl-carousel">
							
							@if(count($toan_bo_san_ban_chay) != 0)
							@foreach($toan_bo_san_ban_chay as $tbspbc) 
							<div class="col-lg-12">
								<!-- Bắt đầu một sản phẩm theo danh mục -->
								<div class="single-product-wrap">
									<div class="product-image">
										@if(count($share_sp_toan_bo_hinh_anh_chinh) != 0) 
										@foreach($share_sp_toan_bo_hinh_anh_chinh as $tbhasp)
										@if($tbhasp->id_sp == $tbspbc->id)
										<a href="san-pham/{{changeTitle($tbspbc->ten)}}-a{{$tbspbc->id}}.html">
											<img src="uploads/images/products/{{$tbhasp->ten}}" alt="{{$sptdm->mo_ta}}">
										</a>
										@break   
										@endif 
										@endforeach  
										@else
										<a href="javascript:void(0)">
											<img src="https://via.placeholder.com/300x300" alt="{{$sptdm->mo_ta}}">
										</a>  
										@endif  
										<span class="sticker">Mới</span> 
									</div>
									<div class="product_desc">
										<div class="product_desc_info"> 
											<h4><a class="product_name" href="san-pham/{{changeTitle($tbspbc->ten)}}-a{{$tbspbc->id}}.html">{{$tbspbc->ten}}</a></h4>
											@if($tbspbc->khuyen_mai != 0)
											<div class="price-box">
												<span class="new-price new-price-2">{{number_format($tbspbc->gia_ban)}}₫</span>
												<span class="old-price">{{number_format($tbspbc->gia_goc)}}₫</span> 
											</div>
											@else
											<div class="price-box">
												<span class="new-price">{{number_format($tbspbc->gia_goc)}}₫</span>
											</div>
											@endif 
										</div>
										<div class="add-actions">
											<ul class="add-actions-link">
												<li class="add-cart active"><a href="javascript:void(0)" onclick="themGioHang({{$tbspbc->id}})">Thêm giỏ hàng</a></li>
												<li><a class="links-details" href="javascript:void(0)" onclick="themSpYeuThich({{$tbspbc->id}})"><i class="fa fa-heart-o"></i></a></li>
												<li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#xemnhanhsanpham{{$tbspbc->id}}"><i class="fa fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Kết thúc một sản phẩm theo danh mục -->
							</div>   
							@endforeach
							@endif

						</div>
					</div>
				</div>
				<!-- Li's Section Area End Here -->
			</div>
		</div>
	</section>
	<!-- Kết thúc sản phẩm bán chạy --> 


<!-- Bắt đầu sản phẩm khuyến mãi -->
    <section class="product-area li-laptop-product li-tv-audio-product-2 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Sản phẩm khuyến mãi</span>
                        </h2>
                        @if($all_share_danh_muc_san_pham != null) 
                        <ul class="li-sub-category-list">
                            <?php $count = 0; ?>
                            @foreach($all_share_danh_muc_san_pham as $dmsp)
                            
                            <li class="active"><a href="danh-muc-san-pham/<?php echo changeTitle($dmsp->ten); ?>-a{{$dmsp->id}}.html">{{$dmsp->ten}}</a></li>
                            <?php $count++; ?>
                            @endforeach
                        </ul> 
                        @endif   
                    </div> 
                    <div class="row">
                        <div class="product-active owl-carousel">
                            
                            @if(count($toan_bo_san_pham_khuyen_mai) != 0)
                            @foreach($toan_bo_san_pham_khuyen_mai as $tbspkm) 
                            <div class="col-lg-12">
                                <!-- Bắt đầu một sản phẩm theo danh mục -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        @if(count($share_sp_toan_bo_hinh_anh_chinh) != 0) 
                                        @foreach($share_sp_toan_bo_hinh_anh_chinh as $tbhasp)
                                        @if($tbhasp->id_sp == $tbspkm->id)
                                        <a href="san-pham/{{changeTitle($tbspkm->ten)}}-a{{$tbspkm->id}}.html">
                                            <img height="250px" src="uploads/images/products/{{$tbhasp->ten}}" alt="{{$sptdm->mo_ta}}">
                                        </a>
                                        @break   
                                        @endif 
                                        @endforeach  
                                        @else
                                        <a href="javascript:void(0)">
                                            <img src="https://via.placeholder.com/300x300" alt="{{$sptdm->mo_ta}}">
                                        </a>  
                                        @endif  
                                        @if($tbspkm->moi == 1)
                                        <span class="sticker">Mới</span> 
                                        @endif
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info"> 
                                            <h4><a class="product_name" href="san-pham/{{changeTitle($tbspkm->ten)}}-a{{$tbspkm->id}}.html">{{$tbspkm->ten}}</a></h4>
                                            @if($tbspkm->khuyen_mai != 0)
                                            <div class="price-box">
                                                <span class="new-price new-price-2">{{number_format($tbspkm->gia_ban)}}₫</span>
                                                <span class="old-price">{{number_format($tbspkm->gia_goc)}}₫</span> 
                                            </div>
                                            @else
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($tbspkm->gia_goc)}}₫</span>
                                            </div>
                                            @endif 
                                        </div>
                                        <div class="countersection">
                                            <div class="li-countdown"></div> 
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="javascript:void(0)" onclick="themGioHang({{$tbspkm->id}})">Thêm giỏ hàng</a></li>
                                                <li><a class="links-details" href="javascript:void(0)" onclick="themSpYeuThich({{$tbspkm->id}})"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#xemnhanhsanpham{{$tbspkm->id}}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Kết thúc một sản phẩm theo danh mục -->
                            </div>   
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
    <!-- Kết thúc sản phẩm khuyến mãi -->



	<!-- Bắt đầu banner dưới -->




	<!-- Kết thúc banner dưới -->
	<!-- Bắt đầu hiển thị sản phẩm theo nhóm -->
	<div class="group-featured-product pt-60 pb-40 pb-xs-25">
		<div class="container">
			<div class="row">

				<!-- Bắt đầu sản phẩm theo loại ngẫu nhiên -->
				@if(count($ba_loai_sp_ngau_nhien) != 0 && ($all_share_sp_cai_dat_trang_chu->hien_thi_loai_ngau_nhien))
				@foreach($ba_loai_sp_ngau_nhien as $blspnn) 
				<div class="col-lg-4">
					<div class="featured-product">
						<div class="li-section-title">
							<h2>
								<span>{{$blspnn->ten}}</span>
							</h2>
						</div>
						<?php $count_max = 0; ?> 
						@foreach($san_pham_theo_danh_muc as $tbsp)

						@if($tbsp->id_loai_sp == $blspnn->id)
						@if($count_max < $share_sp_cai_dat_san_pham->so_luong_theo_loai_ngau_nhien)
						<div class="featured-product-active-2 owl-carousel">
							<div class="featured-product-bundle">

								<div class="row">
									<div class="group-featured-pro-wrapper">
										<div class="product-img">  
											@if(count($share_sp_toan_bo_hinh_anh_chinh) != 0) 
											@foreach($share_sp_toan_bo_hinh_anh_chinh as $tbhasp)
											@if($tbhasp->id_sp == $tbsp->id)
											<a href="san-pham/{{changeTitle($tbsp->ten)}}-a{{$tbsp->id}}.html">
												<img src="uploads/images/products/{{$tbhasp->ten}}" alt="{{$sptdm->mo_ta}}">
											</a>
											@break   
											@endif 
											@endforeach  
											@else
											<a href="javascript:void(0)">
												<img src="https://via.placeholder.com/300x300" alt="{{$sptdm->mo_ta}}">
											</a>  
											@endif  
										</div>

										<div class="featured-pro-content">
											<div class="product-review">
												<h5 class="manufacturer">
													<a href="san-pham/{{changeTitle($tbsp->ten)}}-a{{$tbsp->id}}.html">{{$blspnn->ten}}</a>
												</h5>
											</div> 
											<h4><a class="featured-product-name" href="san-pham/{{changeTitle($tbsp->ten)}}-a{{$tbsp->id}}.html">{{$tbsp->ten}}</a></h4>
											<div class="price-box">
												<span class="new-price">{{number_format($tbspbc->gia_goc)}}₫</span>
											</div> 
										</div>
									</div>
								</div>

							</div>
						</div> 
						<?php $count_max++; ?> 
						@else
						@break
						@endif 
						@endif

						@endforeach
					</div>
				</div> 
				@endforeach
				@endif 
				<!-- Kết thúc sản phẩm theo loại ngẫu nhiên -->
			</div>
		</div>
	</div>
	<!-- Kết thúc hiển thị sản phẩm theo nhóm--> 
	
</div>

@endsection 

@section('script')
<!-- Countdown -->
<script src="user/assets/js/jquery.countdown.min.js"></script>
<script>

	window.onload = function () { 
		// $('#show-loading').fadeOut("slow");  
		$('#show-loading').css('display','none'); 
		$('#hidden-loading').fadeIn("slow");  


	};    
	// Đếm thời gian cho sản phẩm khuyến mãi
	var sites = {!! json_encode($toan_bo_san_pham_khuyen_mai->toArray()) !!};  
	for (var i = 0; i < sites.length ; i++) {
		$(".li-countdown").eq(i).countdown(sites[i].ngay_ket_thuc_khuyen_mai, function(event) {
			$(this).html(
				event.strftime('<div class="count">%D <span>Ngày</span></div> <div class="count">%H <span>Giờ</span></div> <div class="count">%M <span>Phút</span></div><div class="count"> %S <span>Giây</span></div>')
				); 
		});  
	}  
</script> 
@endsection