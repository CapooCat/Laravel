<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{ asset('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i') }}" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}"/>
	<!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}"/>
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="{{ route('trang-chu.home')}}" class="site-logo">
					<img src="{{ asset('./img/logo.png')}}" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="{{ route('trang-chu.dang-nhap')}}">Login</a> / <a href="{{ route('trang-chu.dang-ky')}}">Register</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="{{ route('trang-chu.home')}}">Home</a></li>
						<li><a href="games.html">Games</a>
							<ul class="sub-menu">
								<li><a href="game-single.html">Game Singel</a></li>
							</ul>
						</li>
						<li><a href="review.html">Reviews</a></li>
						<li><a href="blog.html">News</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{ asset('img/slider-bg-1.jpg')}}">
				<div class="container">
					<h2></h2>
					<p>Vượt qua những câu hỏi hóc búa để xem khả năng IQ của bạn</p>
					<a href="#" class="site-btn" data-toggle="modal" data-target=".bs-example-modal-lg">Quản lý câu hỏi  <img src="{{ asset('img/icons/double-arrow.png')}}" alt="#"/></a>
					
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{ asset('img/slider-bg-2.jpg')}}">
				<div class="container">
					<h2></h2>
					<p>Vượt qua những câu hỏi hóc búa để xem khả năng IQ của bạn</p>
					<a href="#" class="site-btn" data-toggle="modal" data-target=".bs-example-modal-lg">Quản lý câu hỏi  <img src="{{ asset('img/icons/double-arrow.png')}}" alt="#"/></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Chọn lĩnh vực câu hỏi</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                        	<div class="container">
                                        		<div class="row">
                                        			<div class="col-md-3"></div>
                                        			<div class="col-md-6"><img src="{{ asset('img/hinhdovui.jpg')}}" alt="#" style="width: 200px;height: 200px;display: block;margin-left: auto; margin-right: auto;margin-bottom: 20px;" /></div>
                                        			<div class="col-md-3"></div>
                                        		</div>
												<div class="row">
													<div class="col-md-3"></div>
													<div class="col-md-6">
														
							                                    <label for="fullname">Tên lĩnh vực   :</label>
															<form action="{{ route('trang-chu.them-linh-vuc')}}" method="POST">
																{{ csrf_field() }}
							                                
							                                	<div class="row">
							                                		<div class="col-md-8">

							                                    <!-- <label for="fullname">Tên lĩnh vực   :</label> -->
							                                    <input type="text" class="form-control" name="ten_linh_vuc" id="ten_linh_vuc">
							                                    	</div>
							                                    	<div class="col-md-4">
							                                    <button type="submit" class="btn btn-success" >Thêm</button>
							                                    	</div>
							                                	</div>
                      
							                                
							                            	</form>
							                                
                            								
															<table class="table mb-0">
								                                    <thead>
								                                    <tr>
								                                        <th>ID</th>
								                                        <th>Tên lĩnh vực</th>
								                                        <th></th>
								                                        <th></th>
								                                    </tr>
								                                    </thead>
								                                    <tbody>
								                                        @foreach($dsLinhVuc as $linhVuc)
								                                    <tr>
								                                        <th scope="row">{{$linhVuc->id}}</th>
								                                        <th>
								                                        {{$linhVuc->ten_linh_vuc}}
								                                        </th>
								                                        <th>
								                                        	 <a href="" type="button" class="btn btn-purple waves-effect waves-light suacauhoi" data-toggle="modal" data-name="{{$linhVuc->ten_linh_vuc}}" data-target="#full-width-modal" id="sa-warning">Chọn</a>
								                                       </th>
								                                         <th>
								                                        <a href="" class="btn btn-purple waves-effect waves-light" >Sửa</a>
								                                    	</th>
								                                        

								                                        
								                                        
								                                    </tr>
								                                    	@endforeach
								                                    
								                                    </tbody>
								                                </table>
			                                            <!--<button data-id="{{$linhVuc->id}}" data-name="{{$linhVuc->ten_linh_vuc}}" type="button" class="btn btn-purple waves-effect waves-light btn-block loadcauhoi" data-toggle="modal" data-target="#full-width-modal" value="{{$linhVuc->id}}" name="linh_vuc_id" id="submit" >{{$linhVuc->ten_linh_vuc}}</button>-->
			                                            
			                                          	
			                                        </div>
			                                            <div class="col-md-3"></div>
			                           
		                                        	</div>
		                                    	</div>
		                                    </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

<!-- sample modal content -->

                            <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-full">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="full-width-modalLabel">Modal Heading</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body" id="content">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="#">Racing</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Strategy</a></li>
						<li><a href="#">Online</a></li>
					</ul>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{ asset('./img/blog/1.jpg')}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="{{ asset('img/icons/double-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{ asset('./img/blog/2.jpg')}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="{{ asset('img/icons/double-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{ asset('./img/blog/3.jpg')}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="{{ asset('img/icons/double-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/1.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/2.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/3.jpg')}}"" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/4.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
						<a href="#" class="add">
							<img src="{{ asset('./img/add.jpg')}}" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/promo-bg.jpg">
		<a href="https://www.youtube.com/watch?v=uFsGy5x_fyQ" class="video-play-btn video-popup"><img src="{{ asset('img/icons/solid-right-arrow.png')}}" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Promo video of the game</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->



	<!-- Featured section end-->



	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="{{ asset('img/icons/double-arrow.png')}}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="{{ asset('img/footer-left-pic.png')}}" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="{{ asset('img/footer-right-pic.png')}}" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="{{ asset('./img/logo.png')}}" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Games</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<!--<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>-->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/jquery.sticky-sidebar.min.js')}}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>
	<!-- Modal-Effect -->
    <script src="{{ asset('assets/libs/custombox/custombox.min.js')}}"></script>
    <script type="text/javascript">
    	$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
});
            	
            	
            	$('.suacauhoi').click(function(){
            		
            		var ten_linh_vuc=$(this).data('name');
            		console.log(ten_linh_vuc);
            		$.ajax({
                    
                    data: ten_linh_vuc,
                    success: function (data) {
                        setTimeout(function(){
                            $('#ten_linh_vuc').html(data);
                        });
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
            		
                	
            	
                });

            
               
        </script>
            
	</body>
</html>
