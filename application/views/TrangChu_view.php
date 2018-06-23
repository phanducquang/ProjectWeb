<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ZikZak - Website nghe nhạc trực tuyến miễn phí</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels_VD.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels.js" type="text/javascript"></script>

	<!-- Icons -->
	<link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/sidenav.css" rel="stylesheet">
	<!-- Custom styles -->
	<link href="<?php echo base_url() ?>css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/custom-animation.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/custom-sidenav.css" rel="stylesheet">
</head>
<body id="page-top">
	<div class="container-fluid" id="wrapper">

		<!--Bắt đầu navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-zikzak fixed-top" id="mainNav">
		<!-- <a class="navbar-brand" href="index.html">Start Bootrap</a> -->
		<a class="navbar-brand " href="#page-top" id="logo">
			<div class="tada">
				<img src="<?php echo base_url() ?>img/logo/logo.png">
			</div>
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="btn btn-stripped dropdown-toggle" id="dropdown_User" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">
				<?php 
					if (isset($_SESSION["ten"]))
			         {
						echo '<img width="40" height="auto" class="circle float-left profile-photo" alt="profile photo" src="'.$this->session->userdata('duongdananh').'">';
						echo "<div class=\"username mt-1\">";
						echo "<div class=\"mb-1\">".$this->session->userdata('ten')."</div>";
						echo "<h6>".$this->session->userdata('trangthai')."</h6>";
						echo "</div>";
						echo "</a>";
						echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="margin-right: 1.5rem;"><a class="dropdown-item" href="'.base_url().'TrangCaNhan"><em class="fa fa-user-circle mr-1"></em> Trang cá nhân</a>';
						echo '<a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>';
						echo '<a class="dropdown-item" href="'.base_url().'TrangChu/logout_controller"><em class="fa fa-sign-out mr-1"></em> Logout</a>';
						echo '</div>';
					}
					else
		            {
		            	echo '<img width="40" height="auto" class="circle float-left profile-photo" alt="profile photo" src="http://localhost/ProjectWeb/img/default_avatar.jpg">';
						echo "</a>";
						echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="margin-right: 1.5rem;">';
						echo '<a class="dropdown-item" href="" data-toggle="modal" data-target="#login"><em class="fa fa-sign-in mr-1"></em> Đăng nhập </a>';
						echo '<a class="dropdown-item" href="" data-toggle="modal" data-target="#signup"><em class="fa fa-user-plus mr-1"></em> Đăng ký </a>';
						echo '</div>';
		            }
				?>
			</li>
		</ul>
		<!--Bắt đầu phần sidenav-->
		<ul class="navbar-nav navbar-sidenav mainnavbar" id="mainnavbar">
			<li class="nav-item active" data-toggle="tooltip" id="trangchu">
				<a class="nav-link" href="<?php echo base_url() ?>TrangChu">
					<i class="fa fa-fw fa-home"></i>
					<span class="nav-link-text">Trang Chủ</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" id="baihat">
				<a class="nav-link" href="<?php echo base_url() ?>BaiHat">
					<i class="fa fa-fw fa-music"></i>
					<span class="nav-link-text">Bài Hát</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" id="playlist">
				<a class="nav-link" href="<?php echo base_url() ?>Playlist">
					<i class="fa fa-fw fa-table"></i>
					<span class="nav-link-text">Playlist</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" id="chude">
				<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
					<i class="fa fa-fw fa-star-o"></i>
					<span class="nav-link-text">Chủ Đề</span>
				</a>
				<ul class="sidenav-second-level collapse" id="collapseComponents">
					<li>
						<a href="#">Nhạc Hot</a>
					</li>
					<li>
						<a href="#">For Love</a>
					</li>
					<li>
						<a href="#">Wedding</a>
					</li>
					<li>
						<a href="#">EDM</a>
					</li>
					<li>
						<a href="#">US-UK Hits</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>ChuDe" ><i>Xem Thêm . . .</i></a>
					</li>
				</ul>
			</li>
		</ul>
		<!--Kết thúc phần sidenar-->
		</div>
		</nav>
		<!-- bắt đầu phần modal login -->
		<div class="modal fade" id="login">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<form action="Index/singin_controller" method="post" enctype="multidata/form-data">
						<div class="modal-header">
							<h4 class="modal-title"><strong>Đăng nhập</strong></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
							</button>
						</div>
						<div class="modal-body">
								<div class="form-group">
		                            <label for="username"><b>User name</b></label>
		                            <input class="form-control" type="text" placeholder="Nhập tên đăng nhập" name="username" required>
		                        </div>
		                        <div class="form-group">
		                            <label for="psw"><b>Password</b></label>
		                            <input class="form-control" type="password" placeholder="Nhập mật khẩu" name="pass" required>
		                        </div>
		                        <div class="form-group">
		                            <label>
		                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
		                            </label>
		                        </div>
		                        <p>
		                            <center>Don't have an account? <a href="#signup" style="color:dodgerblue">Sign up</a></center>
		                        </p>                                            				
						</div>
						<div class="modal-footer">
							<input type="submit" name="dangnhap" class=" btn btn-success" value="Đăng nhập">
						</div>
						</form>	
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
		<!-- /. kết thúc phần modal login -->

		<!-- bắt đầu phần modal sign up-->
		<div class="modal fade" id="signup">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<form action="Index/signup_controller" method="post" enctype="multidata/form-data">
						<div class="modal-header">
							<h4 class="modal-title"><strong>Đăng ký</strong></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
							</button>
						</div>
						<div class="modal-body">
		                        <div class="form-group">
		                            <label for="full-name"><b>Họ tên:</b></label>
		                            <input class="form-control" type="text" placeholder="Enter your full name" name="fullname" required>
		                        </div>
		                        <div class="form-group">
		                            <label for="register-age"><b>Ngày sinh:</b></label>
		                            <!-- <div class="col-10"> -->
		                            <input class="form-control" name="ngaysinh" type="date" value="2011-08-19" id="ngaysinh">
		                            <!-- </div> -->
		                        </div>
		                        <div class="form-group" id="gioitinh">
		                            <label><b>Giới tính:</b></label>
		                            <label for="register-male" class="radio control-inline">
		                                <input type="radio" id="register-male" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam"> Nam
		                            </label>
		                            <label for="register-female" class="radio control-inline">
		                                <input type="radio" id="register-female" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ"> Nữ
		                            </label>
		                            <label for="register-neutral" class="radio control-inline">
		                                <input type="radio" id="register-neutral" name="gender" required="required" value="Khác"> Khác
		                            </label>
		                        </div>
		                        <div class="form-group">
		                            <label for="diachi"><b>Địa chỉ:</b></label>
		                            <input class="form-control" type="text" placeholder="Enter your address" name="diachi" required>
		                        </div>
		                        <div class="form-group email">
		                            <label for="email"><b>Email:</b></label>
		                            <input class="form-control checkemail" type="text" placeholder="Enter your email" id="email" name="email" required>
		                        </div>
		                        <!-- <hr id="hrdangky_duoi"> -->
		                        <div class="form-group tendangnhap">
		                            <label for="username"><b>Tên đăng nhập:</b></label>
		                            <input class="form-control checkusername" type="text" placeholder="Enter user name" id="username" name="username" required>
		                        </div>
		                        <div class="form-group">
		                            <label for="psw"><b>Mật khẩu:</b></label>
		                            <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
		                        </div>
		                        <div class="form-group">
		                            <label for="psw-repeat"><b>Nhập lại mật khẩu:</b></label>
		                            <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" required>
		                        </div>
		                        <div class="form-group">
		                            <label>
		                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
		                            </label>
		                        </div>
		                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
						</div>
						<div class="modal-footer">
							<input type="submit" name="dangky" class=" btn btn-success " value="Đăng ký">
						</div>
						</form>	
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
		<!-- /. kết thúc phần modal sign up-->

		<!--Kết thúc navbar-->

		<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">

			<section class="main-content">
				<div class="col-sm-12">
					<section class="row">
						<div class="col-md-12 col-lg-8">
							<!--Slide header-->
							<div class="card mb-4">
								<div class="card-block">
									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

										<div class="carousel-inner" role="listbox">
											<div class="carousel-item active">
												<img class="d-block img-fluid" src="<?php echo base_url() ?>img/img_trangchu/header-image1.jpg" alt="First slide">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid" src="<?php echo base_url() ?>img/img_trangchu/header-image2.jpg" alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid" src="<?php echo base_url() ?>img/img_trangchu/header-image3.jpg" alt="Third slide">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid" src="<?php echo base_url() ?>img/img_trangchu/header-image4.jpg" alt="Four slide">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
								<!--
								<div class="card mb-4">
									<div class="card-block">
										<ol class="carousel-indicators">
											<a data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image1.jpg">
											</a>
											<a data-target="#carouselExampleIndicators" data-slide-to="1">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image2.jpg">
											</a>
											<a data-target="#carouselExampleIndicators" data-slide-to="2">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image3.jpg">
											</a>
											<a data-target="#carouselExampleIndicators" data-slide-to="2">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image4.jpg">
											</a>
										</ol>
									</div>
								</div>-->
								
								<!--Kết thúc slide header-->


								<!--Playlist trang chủ-->
								<div class="card mb-4" id="playlist">
									<div class="card-block">
										<h3 class="card-title">Nghe gì hôm nay</h3>

										<h6 class="card-subtitle mb-2 text-muted">Playlist</h6>
										<div class="canvas-wrapper">
											<div class="row">
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-1.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Đón hè nhẹ nhàng</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-2.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Nhạc Sôi Động Dành Cho Ngày Hè</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-3.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Nhạc Acoustic Cho Những Ngày Hè</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-4.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Pool Party</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-5.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Những chuyến đi dài</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-6.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Những Bài Hát Hay Nhất Được Đặt Làm Nhạc Chuông</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									</div>
								</div>
								<!--Kết thuc phần playlist-->

								<!--Bắt đầu phần album-->
								<div class="card mb-4" id="album">
									<div class="card-block">
										<h3 class="card-title">Album hot</h3>
										<h6 class="card-subtitle mb-2 text-muted">Playlist</h6>
										<div class="canvas-wrapper">
											<div class="row">
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-1.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Xin Đừng Rời Xa (Single)
																</a>
															</h4>
															<p class="card-text">Ngô Kiến Huy</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-2.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Rời Bỏ (Single)</a>
															</h4>
															<p class="card-text">Hòa Minzy</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-3.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Rồi Người Thương Cũng Hóa Người Dưng </a>
															</h4>
															<p class="card-text">Hiền Hồ</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-4.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Đừng Như Thói Quen (Single)</a>
															</h4>
															<p class="card-text">JayKii, Sara</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-5.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Hôn Anh (Single)</a>
															</h4>
															<p class="card-text">MIN</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-6.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Only You (Single)</a>
															</h4>
															<p class="card-text">Hà Nhi</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									</div>
								</div>
								<!--Kết thúc phần album-->
								<!--Bắt đầu phần ca sĩ-->
								<div class="card mb-4" id="album">
									<div class="card-block">
										<h3 class="card-title">Ca sĩ hot</h3>
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										<div class="canvas-wrapper" >
											<div class="row">
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white">ERIK</p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_casi/casi-1.jpg" alt="">
														</a>
														
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white">Mr.Siro</p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_casi/casi-2.jpg" alt="">
														</a>
														
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white">Bùi Anh Tuấn</p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_casi/casi-3.jpg" alt="">
														</a>
														
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white">Hồ Ngọc Hà</p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_casi/casi-4.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white">Trung Quân Idol</p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_casi/casi-5.jpg" alt="">
														</a>
														
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white">Sơn Tùng M-TP</p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_casi/casi-6.jpg" alt="">
														</a>
														
													</div>
												</div>
											</div>
										</div>
										<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									</div>
								</div>
								<!--Kết thúc phần ca sĩ-->

								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Recent Orders</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
											</div>
											<div class="table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Order #</th>
															<th>Product</th>
															<th>Customer</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>0001</td>
															<td>Product Name 1</td>
															<td>Customer 1</td>
															<td>Complete</td>
														</tr>
														<tr>
															<td>0002</td>
															<td>Product Name 2</td>
															<td>Customer 2</td>
															<td>Complete</td>
														</tr>
														<tr>
															<td>0003</td>
															<td>Product Name 3</td>
															<td>Customer 3</td>
															<td>Processing</td>
														</tr>
														<tr>
															<td>0004</td>
															<td>Product Name 4</td>
															<td>Customer 4</td>
															<td>Pending</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="card mb-4">
										<div class="card-block">
											<h3 class="card-title">Articles</h3>
											<div class="dropdown card-title-btn-container">
												<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
												<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
													<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
													<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
												</div>
												<h6 class="card-subtitle mb-2 text-muted">Latest news</h6>
												<div class="divider" style="margin-top: 1rem;"></div>
												<div class="articles-container">
													<div class="article border-bottom">
														<div class="col-xs-12">
															<div class="row">
																<div class="col-2 date">
																	<div class="large">30</div>
																	<div class="text-muted">Jun</div>
																</div>
																<div class="col-10">
																	<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
																</div>
															</div>
														</div>
														<div class="clear"></div>
													</div><!--End .article-->

													<div class="article">
														<div class="col-xs-12">
															<div class="row">
																<div class="col-2 date">
																	<div class="large">30</div>
																	<div class="text-muted">Jun</div>
																</div>
																<div class="col-10">
																	<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
																</div>
															</div>
														</div>
														<div class="clear"></div>
													</div><!--End .article-->

													<div class="article">
														<div class="col-xs-12">
															<div class="row">
																<div class="col-2 date">
																	<div class="large">30</div>
																	<div class="text-muted">Jun</div>
																</div>
																<div class="col-10">
																	<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
																</div>
															</div>
														</div>
														<div class="clear"></div>
													</div><!--End .article-->
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-4">
										
										<div class="card mb-4">
											<div class="card-block">
												<!--Bắt đầu phần chủ đề-->
												<h3 class="card-title">Chủ đề hot</h3>

												<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>

												<div class="list-group" id="chude">
													<a href="<?php echo base_url() ?>/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-1.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
													<a href="<?php echo base_url() ?>/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-2.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
													<a href="<?php echo base_url() ?>/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-3.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
													<a href="<?php echo base_url() ?>/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-4.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
												</div>
												<button class="btn btn-sm btn-subtle" type="button" style="margin-top:10px;"><em class="fa fa-list-ul"></em> Xem tất cả</button>
												<div class="divider"></div>
												<div id="calendar"></div>
												<div class="divider"></div>
												<!--Kết thúc phần chủ đề-->
												<!--Bắt đầu phẩn bảng xếp hạng-->
												<h3 class="card-title">Bảng xếp hạng</h3>
												<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
												<div id="bxh">
													<div class="TabbedPanels" id="TabbedPanels1">
														<ul class="row TabbedPanelsTabGroup" >
															<li tabindex="0" class="col TabbedPanelsTab TabbedPanelsTabSelected TabbedPanelsTabFocused" style="border-top-left-radius:10px;">V-POP</li>
															<li tabindex="0" class="col TabbedPanelsTab">K-POP</li>
															<li tabindex="0" class="col TabbedPanelsTab" style="border-top-right-radius:10px;">ÂU-MỸ</li>
														</ul>
														<div class="TabbedPanelsContentGroup">
															<div class="TabbedPanelsContent TabbedPanelsContentVisible" style="display: block;">
																<ul style="padding-left: 0px;">
																	<li class="first-item">
																		<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo base_url() ?>img/dungnhuthoiquen.jpg"></a>
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-01">01</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis">
																						<a title="Vợ Người Ta - Phan Mạnh Quỳnh" class="txt-primary" href="#">Đừng như thói quen</a>
																					</h3>
																					<h4 class="singer-name ellipsis">
																						<a title="Phan Mạnh Quỳnh" class="txt-info" href="http://mp3.zing.vn/nghe-si/Phan-Manh-Quynh#from=laban">JayKii, Sara Lưu</a>
																					</h4>
																				</div>
																			</div>
																		</div>
																		<!-- END! des -->
																		<!-- END! bai 1 -->
																	</li>
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-02">02</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Người âm phủ</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">OSAD, VRT</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 2 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-03">03</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Chạm đáy nỗi đau</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">ERIK</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 3 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-04">04</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Cô Gái M52</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">HuyR, Tùng Viu</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 4 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-05">05</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Ai Khóc Nỗi Đau Này</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Bảo Anh</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 5 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-06">06</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Ngắm Hoa Lệ Rơi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Châu Khải Phong</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 6 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-07">07</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Yêu Thương Ngày Đó</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Soobin Hoàng Sơn</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 7 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-08">08</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Lỡ Như Anh Yêu Em?</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Châu Khải Phong</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 8 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-09">09</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Quan Trọng Là Thần Thái</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">OnlyC, Karik</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 9 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-10">10</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Tâm sự tuổi 30</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Trịnh Thăng Bình</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 10 -->
																</ul>
																<div class="footer-bxh">
																	<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
																</div>

															</div>
															<!-- END! content VPOP --> 
															<div class="TabbedPanelsContent" style="display: none;">
																<ul style="padding-left: 0px;">
																	<li class="first-item">
																		<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo base_url() ?>img/FIRE.jpg"></a>
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-01">01</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis">
																						<a title="Vợ Người Ta - Phan Mạnh Quỳnh" class="txt-primary" href="#">FIRE
																						</a>
																					</h3>
																					<h4 class="singer-name ellipsis">
																						<a title="Phan Mạnh Quỳnh" class="txt-info" href="http://mp3.zing.vn/nghe-si/Phan-Manh-Quynh#from=laban">BTS (Bangtan Boys)
																						</a>
																					</h4>
																				</div>
																			</div>
																		</div>
																		<!-- END! des -->
																		<!-- END! bai 1 -->
																	</li>
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-02">02</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a>
																					</h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 2 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-03">03</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 3 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-04">04</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 4 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-05">05</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 5 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-06">06</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 6 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-07">07</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 7 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-08">08</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 8 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-09">09</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 9 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-10">10</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 10 -->
																</ul>
																<div class="footer-bxh">
																	<div class="footer-bxh">
																		<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
																	</div>
																</div>

															</div>
															<!-- END! content K-POP --> 
															<div class="TabbedPanelsContent" style="display: none;">
																<ul style="padding-left: 0px;">
																	<li class="first-item">
																		<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo base_url() ?>img/noo.jpg"></a>
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-01">01</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis">
																						<a title="Vợ Người Ta - Phan Mạnh Quỳnh" class="txt-primary" href="#">Cause i love you</a>
																					</h3>
																					<h4 class="singer-name ellipsis">
																						<a title="Phan Mạnh Quỳnh" class="txt-info" href="http://mp3.zing.vn/nghe-si/Phan-Manh-Quynh#from=laban">Noo Phước Thịnh</a>
																					</h4>
																				</div>
																			</div>
																		</div>
																		<!-- END! des -->
																		<!-- END! bai 1 -->
																	</li>
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-02">02</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 2 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-03">03</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 3 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-04">04</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 4 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-05">05</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 5 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-06">06</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 6 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-07">07</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 7 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-08">08</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 8 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-09">09</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 9 -->
																	<li class="rank-item"  >
																		<div class="container">
																			<div class="row des">
																				<span class="col rank rank-10">10</span>
																				<div class="col-9 info">
																					<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																					<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																				</div>
																			</div>
																		</div>
																	</li>
																	<!-- END! bai 10 -->
																</ul>
																<div class="footer-bxh">
																	<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
																</div>

															</div>
															<!-- END! content ÂU MỸ -->

														</div>
													</div>
													<!-- END! tab âm nhac -->

												</div>
												<!--Kết thúc bảng xếp hạng-->
											</div>

										</div>
										<!--Kết thúc phần chủ đề-->
									</dropdowniv>
									<div class="card mb-4">
										<div class="card-block">
											<h3 class="card-title">Todo List</h3>
											<div class="dropdown card-title-btn-container">
												<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
													<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
													<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
												</div>
												<h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>
												<ul class="todo-list mt-2 mb-2">

													<li class="todo-list-item">
														<div class="checkbox mt-1 mb-2">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck1">
																<label class="custom-control-label custom-control-description" for="customCheck1">Make Coffee</label>
																<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
															</div>
														</li>
														<li class="todo-list-item">
															<div class="checkbox mt-1 mb-2">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck2">
																	<label class="custom-control-label custom-control-description" for="customCheck2">Check emails</label>
																	<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																</div>
															</li>
															<li class="todo-list-item">
																<div class="checkbox mt-1 mb-2">
																	<div class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input" id="customCheck3">
																		<label class="custom-control-label custom-control-description" for="customCheck3">Reply to Jane</label>
																		<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																	</div>
																</li>
																<li class="todo-list-item">
																	<div class="checkbox mt-1 mb-2">
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label custom-control-description" for="customCheck4">Work on the new design</label>
																			<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																		</div>
																	</li>
																	<li class="todo-list-item">
																		<div class="checkbox mt-1 mb-2">
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck5">
																				<label class="custom-control-label custom-control-description" for="customCheck5">Get feedback</label>
																				<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																			</div>
																		</li>
																	</ul>
																	<div class="card-footer todo-list-footer">
																		<div class="input-group">
																			<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
																			<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
																		</span></div>
																	</div>
																</div>
															</div>
														</div>
													</section>
													<section class="row">
														<div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div>
													</section>
												</div>
											</section>
										</main>
									</div>
								</div>
	
<script>
      $('.checkusername').blur(function(event) {
      $.ajax({
        url: 'Index/checkusername',
        type: 'POST',
        dataType: 'json',
        data: {
              username: $('#username').val() 
              },
        })
      .done(function(data) {
        console.log("success");
        $("i.usernamekhadung").remove();
        if(data==0)
          {
            $('.tendangnhap').append('<i style="color:red;" class="usernamekhadung">Tên đã được sử dụng</i>');
          }      
        })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      });

      $('.checkemail').blur(function(event) {//bắt sự kiện thay đổi text
        /* Act on the event */
        $.ajax({
          url: 'Index/checkemail',
          type: 'POST',
        dataType: 'json',
        data: {
              email: $('#email').val() //lấy giá trị từ id email của input gán vào biến email
              },
        })
        .done(function(data) {//nhận data từ hàm "checkemail"  trên url. data nhận tất cả những gì echo ra
          console.log("success");
          $("i.emailkhadung").remove();//xoá thẻ hmtl bằng jquery- nếu chỉ xoá nội dung dùng hàm empty()
          if(data==0)
          {
            $('.email').append('<i style="color:red;" class="emailkhadung">Email đã được sử dụng</i>');
          }
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      });
</script>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/lib/popper.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?php echo base_url() ?>vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="<?php echo base_url() ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>
</body>
</html>
