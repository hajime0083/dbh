<!DOCTYPE HTML>
<!--
	Dopetrope 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Right Sidebar - Dopetrope by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.dropotron.js"></script>
		<script src="/js/config.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel-noscript.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<section id="header">
									
									<!-- Logo -->
										<h1><a href="#">Dopetrope</a></h1>
									
									<!-- Nav -->
									@section('sidebar')
										<nav id="nav">
											<ul>
												<li><a href="index.html">Home</a></li>
												<li>
													<a href="">List</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Magna phasellus</a></li>
														<li><a href="#">Etiam dolore nisl</a></li>
														<li>
															<a href="">Phasellus consequat</a>
															<ul>
																<li><a href="#">Magna phasellus</a></li>
																<li><a href="#">Etiam dolore nisl</a></li>
																<li><a href="#">Veroeros feugiat</a></li>
															</ul>
														</li>
														<li><a href="#">Veroeros feugiat</a></li>
													</ul>
												</li>
												<li class="current_page_item"><a href="right-sidebar.html">Right Sidebar</a></li>
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="no-sidebar.html">No Sidebar</a></li>
											</ul>
										</nav>
									@show
								</section>

						</div>
					</div>
				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Portfolio -->
								<section>
									<div>
										<div class="row">
											<div class="8u skel-cell-mainContent">
												<article class="box is-post">
												<!-- Content -->
													@yield('content')
												</article>
											</div>
											<div class="4u">
											
												<!-- Sidebar -->
													<section class="box">
														<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="/images/pic09.jpg" alt="" /></a>
														<header>
															<h3>ユーザー</h3>
														</header>
														<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
														<footer>
															<a href="#" class="button button-alt">Magna sed taciti</a>
														</footer>
													</section>
												
											</div>
										</div>
									</div>
								</section>

						</div>
					</div>
				</div>
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
						<div class="row">
							<div class="8u">

								<section>
									<header>
										<h2>Update</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Jan <strong>27</strong></span>
											<h3>Lorem dolor sit amet veroeros</h3>
											<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
										</li>
									</ul>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h2>about</h2>
									</header>
									<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic10.jpg" alt="" /></a>
									<p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
								</section>
							
							</div>
						</div>

						<div class="row">
							<div class="12u">
							
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled	</li>
											<li>Images: <a href="http://facebook.com/DreametryDoodle">Dreametry Doodle</a> + <a href="http://iconify.it">Iconify.it</a></li>
											<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				
			</div>

	</body>
</html>