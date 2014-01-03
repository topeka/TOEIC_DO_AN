<!doctype html>
<html>

	<head>
		<title>Luyen thi TOEIC 4 ki nang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" charset="UTF-8">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/main.css">
		<script src="<?php echo base_url(); ?>application/template/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url(); ?>application/template/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="col-md-12" id="header">
				<div class="container">
					<img src="<?php echo base_url(); ?>application/template/image/header.png" alt="">
				</div>
			</div><!--/header-->
			<div id="menu">
				<div class="container">
					<nav class="navbar navbar-inverse navbar-static-top" role="navigation"}>
						<div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							      <span class="sr-only">Toggle navigation</span>
							      <span class="icon-bar"></span>
							      <span class="icon-bar"></span>
							      <span class="icon-bar"></span>
						    </button>
		    				<a class="navbar-brand" href="#">ToeicChallenge</a>
	 					</div>
	 					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="<?php echo base_url(); ?>index.php/main/index">Home</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/listening">Listening</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/reading">Reading</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/speaking">Speaking</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/writting">Writting</a>
								</li>
								<li>
									<a href="#">Full Test</a>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Search</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Sign Up</a></li>
								<li><a href="#">Log In</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<ul class="nav nav-list">
								<li class="active"><a href="#">Chia sẻ kinh nghiệm</a>
									<ul class="nav">
										<li><a href="">Các mô tả tranh</a></li>
										<li><a href="">Các viết một bài essay</a></li>
										<li><a href="">Khác</a></li>
									</ul>
								</li>
								<li><a href="#">Luyện tập</a>
									<ul class="nav">
										<li><a href="">Write a sentence based on a picture</a></li>
										<li><a href="">Response a written request</a></li>
										<li><a href="">Write an oppion essay</a></li>						
									</ul>
								</li>
								<li><a href="#">Full Test</a>
								</li>
							</ul>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							
						</div>
					</div>
				</div>
			</div><!--/main-->
			<div id="footer">
				<div class="container">
					<p>Email: phuoctienuit@gmail.com</p>
					<p>Tel: 0933113190</p>
					<p>Developed by Lu Phuoc Tien and Vo Van Ket</p>
				</div>
			</div>
		</div>	
	</body>	
</html>