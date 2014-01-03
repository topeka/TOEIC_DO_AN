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
								<li class="active"><a href="<?php echo base_url(); ?>index.php/main/index">INTRODUCE</a></li>
								<li><a href="#">TOEIC FORMAT TEST</a>
									<ul class="nav">
										<li><a href="<?php echo base_url(); ?>index.php/main/listeningformat">Listening and Reading</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/speakingformat">Speaking and Writting</a></li>
									</ul>
								</li>
								<li><a href="#">SCORE</a></li>
								<li><a href="#">MATERIAL</a></li>
								<li><a href="#">VIDEO</a></li>
								<li><a href="#">FUNNY ENGLISH</a></li>
								<li><a href="#">CONTACT</a></li>
							</ul>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
						<h1>Test Content</h1>
						<p>The <em>TOEIC</em> tests assess language skills that are used in daily life and the workplace. Test takers speak and write in English and give their responses to real-world questions and scenarios. The tests use common everyday vocabulary, phrases and&nbsp;key expressions.</p>
						<h2>The TOEIC Speaking Test Format</h2>
						<ul>
							<li>Content: 11 questions</li>
							<li>Time: approximately 20 minutes</li>
							<li>Score scale: 0 to 200</li>
						</ul>
						<p>The test is designed to provide information about language ability of speakers across a range of English proficiency.</p>
						<p>The table below shows how tasks are organized:</p>
						<table class="table table-hover">
							<tr>
								<th>Questions</th>
								<th>Task</th>
								<th>Evaluation Criteria</th>
							</tr>

							<tr>
								<td>1 to 2</td>
								<td>Read a text aloud</td>
								<td>
									<ul>
									<li>Pronunciation</li>
									<li>Intonation and stress</li>
									</ul>
								</td>
							</tr>

							<tr>
								<td>3</td>
								<td>Describe a picture</td>
								<td>All of the above, plus.
									<ul>
										<li>Grammar</li>
										<li>Vocabulary</li>
										<li>Cohesion</li>
									</ul>
								</td>
							</tr>

							<tr>
								<td>4 to 6</td>
								<td>Respond to questions</td>
								<td>All of the above, plus 
									<ul>
										<li>Relevance of content</li>
										<li>Completeness of content</li>
									</ul>
								</td>
							</tr>

							<tr>
								<td>7 to 9</td>
								<td>Respond to questions using information provided</td>
								<td>All of the above</td>
							</tr>

							<tr>
								<td>10</td>
								<td>Propose a solution</td>
								<td>All of the above</td>
							</tr>

							<tr>
								<td>11</td>
								<td>Express an opinion</td>
								<td>All of the above</td>
							</tr>
						</table>

						<h2>The TOEIC Writing Test Format</h2>
							<ul>
								<li>Content: 8 questions</li>
								<li>Time: approximately 60 minutes</li>
								<li>Score Scale: 0 to 200</li>
							</ul>
						<p>The test is designed to provide useful information about test takers across a broad range of English proficiency levels.</p>
						<p>The table below shows how the tasks are organized:</p>
						<table class="table table-hover">
						<tr>
							<th>Questions</th>
							<th>Task</th>
							<th>Evaluation Criteria</th>
						</tr>

						<tr>
							<td>1 to 5</td>
							<td>Write a sentence based on a picture</td>
							<td>
								<ul>
									<li>Grammar</li>
									<li>Relevance of the sentences to the pictures</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>6 to 7</td>
							<td>Respond to a written request</td>
							<td>
								<ul>
									<li>Quality and variety of your sentences</li>
									<li>Vocabulary</li>
									<li>Organization</li>
								</ul>
							</td>
						</tr>

						<tr>
							<td>8</td>
							<td>Write an opinion essay</td>
							<td>
								<ul>
									<li>Whether your opinion is supported with reasons and/or examples</li>
									<li>Grammar</li>
									<li>Vocabulary</li>
									<li>Organization</li>
								</ul>
							</td>
						</tr>
						</table>
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