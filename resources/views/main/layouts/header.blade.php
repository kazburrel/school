<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('main_assets/../images/favicon.ico')}}">

    <title>EduAdmin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('main_assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('main_assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('main_assets/css/skin_color.css')}}">
     
  </head>

<body class="theme-primary">
	
	<!-- The social media icon bar -->
	<div class="icon-bar-sticky">
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-youtube"><i class="fa fa-youtube-play"></i></a>
	</div>
	<header class="top-bar">
		<div class="topbar">

		  <div class="container">
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-question-circle"></i> Ask a Question</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-envelope"></i> info@EduAdmin.com</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-phone"></i> +(1) 123-878-1649</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				<div class="topbar-call text-center text-lg-end topbar-right">
				  <ul class="list-inline d-lg-flex justify-content-end">				  
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option>USD</option>
							<option>EUR</option>
							<option>GBP</option>
							<option>INR</option>
						</select>
					 </li>
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option data-icon="flag-icon flag-icon-us">Eng USA</option>
							<option data-icon="flag-icon flag-icon-gb">Eng UK</option>
						</select>
					 </li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-user d-md-inline-block d-none"></i> Register</a></li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-dashboard d-md-inline-block d-none"></i> My Account</a></li>
				  </ul>
				</div>
			  </div>
			 </div>
		  </div>
		</div>

		<nav hidden class="nav-white nav-transparent">
			<div class="nav-header">
				<a href="index.html" class="brand">
					<img src="{{asset('main_assets/images/logo-light-text2.png')}}" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">				
				<li>
					<a href="/">Home</a>
				</li>				
				<li>
					<a href="/about">About</a>
				</li>				
				<li class="dropdown">
					<a href="#">Courses</a>
					<ul class="dropdown-menu">
						<li><a href="/course_list">Courses List</a></li>
						{{-- <li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li> --}}
						{{-- <li><a href="courses_list-map.html">Courses with Map</a></li> --}}
						<li><a href="/course_category">Courses Categories</a></li>
						<li><a href="/course_details">Courses Details</a></li>
						{{-- <li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li> --}}
					</ul>
				</li>			
				
				<li class="dropdown">
					<a href="#">Shop</a>
					<ul class="dropdown-menu">
						<li><a href="/shop">Shop Grid</a></li>
						<li><a href="/shop_cart">Shop Cart</a></li>
						<li><a href="/shop_checkout">Shop Checkout</a></li>
						<li><a href="/shop_details">Shop Details</a></li>
						<li><a href="/shop_orders">Shop Orders</a></li>
					</ul>
				</li>
				<li>
					<a href="/contact">Contact</a>
				</li>
			</ul>
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Enroll Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
				<li class="megamenu" data-width="270">
					<a href="#"><span class="ti-shopping-cart"></span></a>
					<div class="megamenu-content megamenu-cart">
						<!-- Start Shopping Cart -->
						<div class="cart-header">
							<div class="total-price">
								Total:  <span>$2,432.93</span>
							</div>
							<i class="ti-shopping-cart"></i> 
							<span class="badge">3</span>
						</div>
						<div class="cart-body">
							<ul>
								<li>
									<img src="{{asset('main_assets/images/front-end-img/product/product-1.png')}}" alt="">
									<h5 class="title">Lorem ipsum dolor</h5>
									<span class="qty">Quantity: 02</span>
									<span class="price-st">$843,12</span>
									<a href="#" class="link"></a>
								</li>
								<li>
									<img src="{{asset('main_assets/images/front-end-img/product/product-2.png')}}" alt="">
									<h5 class="title">Lorem ipsum dolor</h5>
									<span class="qty">Quantity: 02</span>
									<span class="price-st">$843,12</span>
									<a href="#" class="link"></a>
								</li>
								<li>
									<img src="{{asset('main_assets/images/front-end-img/product/product-3.png')}}" alt="">
									<h5 class="title">Lorem ipsum dolor</h5>
									<span class="qty">Quantity: 02</span>
									<span class="price-st">$843,12</span>
									<a href="#" class="link"></a>
								</li>
							</ul>
						</div>
						<div class="cart-footer">
							<a href="#">Checkout</a>
						</div>
						<!-- End Shopping Cart -->
					</div>
				</li>
			</ul>

			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>