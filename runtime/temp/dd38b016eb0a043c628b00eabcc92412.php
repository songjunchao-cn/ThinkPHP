<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/index\view\Video\video.html";i:1526485666;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>VR-FAMLIY</title>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free singlepage web template created by GraphBerry">
    <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, Responsive, Mobile"> -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="http://www.sjc.com/static/index/css/yellowmoon-font.css">
  <link rel="stylesheet" type="text/css" href="http://www.sjc.com/static/index/css/video.css">
  <link rel="stylesheet" href="http://www.sjc.com/static/index/css/player-default.css">
  <script>
    var video_content = "http://www.sjc.com/<?php echo $videolist['video_content']; ?>";
  </script>
</head>
<body>

	<header id="header">

		<!-- Section title -->
		<h1 class="sr-only"VR-FAMILY | Home page</h1>

	</header>

	<main>
    <section id="video" class="video">
      <!-- Section 视频-->

          <h1 class="text-center"><?php echo $videolist['video_title']; ?></h1>
          <div id="play" class="center-block">
          </div>
          <div class="center-block video-desc">
          <!-- <p class="title -black desc"><?php echo $videolist['video_desc']; ?></p> -->
          <p class="title -black text-center">描述：<?php echo $videolist['video_desc']; ?></p>
          <!-- <p class="title -black "><?php echo $videolist['video_author']; ?></p> -->
            <h3 class="title -black text-center">作者：<?php echo $videolist['video_author']; ?></h3>
        </div>
      </section> <!-- /.视频结束 -->
	</main>

	<footer id="footer" class="footer">
		<!-- Section title -->
		<h2 class="sr-only">Footer</h2>

		<div class="container">

			<div class="row">

				<div class="col-sm-6">
					<small class="copyright -VR"> © <span id="year">2016</span> -  VRFAMILY All Right Reserved</small>
				</div>

				<div class="col-sm-6">
					<ul class="social-list">
						<li><a href="javascript:void(0)"><span class="icon icon-facebook" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-twitter" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-dribbble" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-google" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-youtube" aria-hidden="true"></span></a></li>
					</ul>
				</div>

			</div> <!-- /.row -->

		</div> <!-- /.container -->

	</footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="http://www.sjc.com/static/index/js/libs/smooth-scroll.min.js"></script>
	<script type="text/javascript" src="http://www.sjc.com/static/index/js/libs/modernizr.mq.js"></script>
  <script type="text/javascript" src="http://www.sjc.com/static/index/js/libs/ios-parallax.js"></script>
  <script type="text/javascript" src="http://www.sjc.com/static/index/js/player.js"></script>
  <script type="text/javascript" src="http://www.sjc.com/static/index/js/video.js"></script>
  <script type="text/javascript">
$(document).ready(function() {
  $('#top-image').iosParallax({
	movementFactor: 80
  });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
$('#top-image').iosParallax({
movementFactor: 50
});
});
$("#search_btn").click(
function (){

		 // var email = $('input[name="email"]').val();
		 // var password = $('input[name="password"]').val();
		 var keywords = $("#keywords").val();
		 $.ajax({
				 type : 'POST',
				 url :"<?php echo url('Search/search'); ?>",
				 data : {keywords:keywords},
				 dataType : 'json',
				 success : function(res) {
						 if(res.status == 1){
								 alert(res.info);
								 window.location.href = "<?php echo url('Search/searchlist'); ?>";
						 }else{
								 alert(res.info);
						 }
				 },
				 fail:function(){
					 alert('没网');
				 },

		 });
 });
</script>



	<!-- Latest compiled and minified JavaScript Bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Custom JS -->
	<script type="text/javascript" src="http://www.sjc.com/static/index/js/custom.js"></script>

</body>
</html>
