<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"C:\wamp64\www\tp5\public/../application/index\view\web\nav.html";i:1525835210;}*/ ?>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VR-NAV &mdash; HTML</title>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="http://www.sjc.com/static/index/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="http://www.sjc.com/static/index/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="http://www.sjc.com/static/index/css/bootstrap.css">

	<link rel="stylesheet" href="http://www.sjc.com/static/index/css/navstyle.css">


	<!-- Modernizr JS -->
	<script src="http://www.sjc.com/static/index/js/libs/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<header id="fh5co-header">

		<div class="container-fluid">

			<div class="row">
				<a href="/index"> <i></i>返回首页</a>
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="index.html">VR-NAV <sup>TM</sup></a></h1>
				</div>

			</div>

		</div>

	</header>
    <div class="copyrights"><a>VR-NAV</a></div>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
				<?php if(is_array($weblist) || $weblist instanceof \think\Collection || $weblist instanceof \think\Paginator): $i = 0; $__LIST__ = $weblist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">

				<figure>
					<a href="single.html"><img src="http://www.sjc.com/<?php echo $vo['web_pic']; ?>" alt="Image" class="img-responsive"></a>
				</figure>
				<span class="fh5co-meta"><a href="<?php echo $vo['web_url']; ?>">进入</a></span>
				<h2 class="fh5co-article-title"><a><?php echo $vo['web_title']; ?></a></h2>


			</article>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

	<footer id="fh5co-footer">
		<p><small>&copy; 2018. VR-NAV HTML5. All Rights Reserverd. <br>vr<a href="#" target="_blank" ></a> - Design by -<a href="#" title="nav" target="_blank">nav</a></small></p>
	</footer>



	<!-- jQuery -->
	<script src="http://www.sjc.com/static/index/js/libs/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="http://www.sjc.com/static/index/js/libs/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="http://www.sjc.com/static/index/js/libs/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="http://www.sjc.com/static/index/js/libs/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="http://www.sjc.com/static/index/js/nav.js"></script>

	</body>
</html>
