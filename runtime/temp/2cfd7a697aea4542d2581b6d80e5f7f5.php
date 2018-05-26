<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/index\view\index\index.html";i:1526507959;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>VR-FAMLIY</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://www.sjc.com/static/index/css/yellowmoon-font.css">
  <link rel="stylesheet" type="text/css" href="http://www.sjc.com/static/index/css/style.css">
</head>
<body>

	<header id="header">

		<!-- Section title -->
		<h1 class="sr-only"VR-FAMILY | Home page</h1>

	</header>

	<main>

		<section id="home" class="home">
      <div class="slider">

      <ul class="ul_img">
  <?php if(is_array($sliderlist) || $sliderlist instanceof \think\Collection || $sliderlist instanceof \think\Paginator): $i = 0; $__LIST__ = $sliderlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['slider_pic'] != ''): ?>
      <li class="li_img"><img src="http://www.sjc.com/<?php echo $vo['slider_pic']; ?>"/></li>
      $_FILES['pic']['tmp_name']
      <?php else: ?>
      无轮播图
      <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <div class="buttom l-align-both">
      <div class="buttom_btn"></div>
      <div class="buttom_btn"></div>
      <div class="buttom_btn"></div>
      </div>
      </div>
			<!-- Section 标题 -->
			<h2 class="sr-only">首页</h2>

			<div class="l-align-both">

				<figure class="logo">
					<img src="http://www.sjc.com/static/index/img/logo/yellowmoon_logo_01.svg" title="VR Logo" alt="Cartoon illustration of the moon">
					<figcaption class="sr-only">vr图标</figcaption>
				</figure>

				<span class="h3 -white">Welcome to the vr-family</span>

				<span class="h1 -yellow">VR</span>

				<a href="/index/web/weblist" class="button">Explore</a>

				<a href="#about" class="chevron-down smoothScroll">
					<img class="icon" src="http://www.sjc.com/static/index/img/chevron_down_white.svg" title="Scroll down" alt="Chevron pointing downwards">
					<span class="sr-only">Scroll down</span>
				</a>
			</div>


		</section> <!-- /.home -->

		<div class="nav-container">

			<nav id="main-navigation" class="navbar navbar-default">
			  <!-- Section title -->
			  <h2 class="sr-only">Main navigation</h2>

			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="sr-only">Toggle navigation</span>
			      </button>
			      <a class="navbar-brand smoothScroll" href="#home">
			        <img class="logo" src="http://www.sjc.com/<?php echo \think\Request::instance()->session('memberpic'); ?>" title="YellowMoon Logo" alt="无图">
              <!-- <h3 class="user title -three -black">VR动态</h3> -->
			        <span class="sr-only">VR-logo Logo</span>
			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div id="main-navbar" class="collapse navbar-collapse">

					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a class="smoothScroll" href="#home">首页 <span class="sr-only">(current)</span></a></li>
						<li><a class="smoothScroll" href="#about">探索</a></li>
            <li><a class="smoothScroll" href="#article">文章</a></li>
						<li><a class="smoothScroll" href="#video">视界</a></li>
						<li><a class="smoothScroll" href="#clients">资源</a></li>
						<!-- <li><a class="smoothScroll" href="#contact">关于</a></li> -->
					</ul>

			    </div> <!-- /.navbar-collapse -->

			  </div> <!-- /.container -->

			</nav> <!-- /.navbar -->

		</div> <!-- /.nav-container -->

		<section id="about" class="about">
			<div class="container-fluid">
   <div id="top-image">
  <div id="content" class=" center-block">
    <div class="jumbotron">
      <div class="container">
        <div class="input-group input-group-lg input-search ios-search">
          <span class="input-group-addon" id="sizing-addon1">
             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></span>
          <input type="text" class="form-control" name="keywords"placeholder="输入关键词" aria-describedby="sizing-addon1" id="keywords">
          <span class="input-group-btn">
              <button class="btn btn-default" type="button" id="search_btn">搜 索</button>
              </span></div>
           </div>
         </div>
        </div>
      </div>
				<div class="row box-container">

					<div class="col-sm-4">

						<div class="about-box" onClick="window.location.href='index/web/weblist'">

							<h3 class="title -one -black">热门网站</h3>

							<p class="desc">你想要的这里都有,综合性的VR门户网站</p>

						</div> <!-- /.about-box -->

					</div>

					<div class="col-sm-4">

						<div class="about-box" onClick="window.location.href='index/video/videolist'">

							<h3 class="title -two -black">VR视界</h3>

							<p class="desc">VR视界,带你进入虚拟现实的世界</p>

						</div> <!-- /.about-box -->

					</div>

					<div class="col-sm-4">

						<div class="about-box" onClick="window.location.href='index/article/articlelist'">

							<h3 class="title -three -black">VR动态</h3>

							<p class="desc">VR动态,实时跟新最新行业资讯</p>

						</div> <!-- /.about-box -->

					</div>

				</div> <!-- /.row -->

			</div> <!-- /.box-container -->

		</section> <!-- /.about -->

		<section id="article" class="article">

			<!-- Section 文章-->
      <div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2">

						<!-- Section title -->
						<h2 class="title -black">资讯</h2>

						<span class="subtitle h3 -yellow">原创内容、高品质的科技媒体资讯</span>

					</div>

				</div> <!-- /.row -->

				<div class="row box-container">
             <?php if(is_array($articlelist) || $articlelist instanceof \think\Collection || $articlelist instanceof \think\Paginator): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<div class="col-xxs-12 col-xs-6 col-md-3">

						<div class="article-item">

							<img src="http://www.sjc.com/<?php echo $vo['article_pic']; ?>" title="Portfolio image one title" alt="Portfolio image one description">
							<div class="overlay" onClick="window.location.href='index/article/article?article_id=<?php echo $vo['article_id']; ?>'">
								<div class="content">
									<span class="h2 -black text-center" style="color:black"><?php echo $vo['article_title']; ?></span>
									<span class="h3 -white text-center">查看详情</span>

								</div>
							</div> <!-- /.overlay -->

						</div> <!-- /.article-item -->

					</div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
				</div> <!-- /.row -->

			</div>
		</section> <!-- /.文章结束 -->
    <section id="video" class="video">
      <!-- Section 视频-->

      <div class="container">

        <div class="row">

          <div class="col-md-8 col-md-offset-2">

            <!-- Section title -->
            <h2 class="title -black">视频</h2>

            <span class="subtitle h3 -yellow">优质虚拟现实视频平台</span>

          </div>

        </div> <!-- /.row -->

        <div class="row box-container">
       <?php if(is_array($videolist) || $videolist instanceof \think\Collection || $videolist instanceof \think\Paginator): $i = 0; $__LIST__ = $videolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <div class="col-xxs-12 col-xs-6 col-md-3">

            <div class="video-item">

              <img src="http://www.sjc.com/<?php echo $vo['video_pic']; ?>" title="" alt="无缩略图">
              <div class="overlay"  onClick="window.location.href='index/video/video?video_id=<?php echo $vo['video_id']; ?>'">
                <div class="content">
                  <span class="h2 -black text-center"><?php echo $vo['video_title']; ?></span>
                  <span class="h3 -white text-center"><?php echo $vo['video_author']; ?></span>
                </div>
              </div> <!-- /.overlay -->

            </div> <!-- /.video-item -->

          </div>

<?php endforeach; endif; else: echo "" ;endif; ?>
        </div> <!-- /.row -->
      </div>
      </section> <!-- /.视频结束 -->


		<section id="clients" class="clients">

			<div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2" >
						<!-- Section title -->
						<h2 class="title -white">圈子</h2>

						<!-- <span class="subtitle h3 -yellow">Somebody actually pay us for these stuff</span> -->

					</div>

				</div> <!-- /.row -->

				<div class="row box-container">

					<div class="col-xs-4 col-sm-4 col-md-3">

						<div class="logo-box">

							<a href="<?php echo url('Circle/circlelist'); ?>">
								<img class="client-logo" src="http://www.sjc.com/static/index/img/logo/circle.svg" title="Client logo one title" alt="Client logo one description">
							</a>
	<!-- <li><a href="<?php echo url('Circle/circlelist'); ?>"><span class="icon icon-dribbble" aria-hidden="true"></span></a></li> -->
						</div> <!-- /.logo-box -->

					</div>



					</div>



			</div> <!-- /.container -->

		</section> <!-- /.clients -->
	</main>

	<footer id="footer" class="footer">
		<!-- Section title -->
		<h2 class="sr-only">Footer</h2>

		<div class="container">

			<div class="row">

				<div class="col-sm-6">
					<small class="copyright -VR"> © <span id="year">2016</span> -  VRFAMILY All Right Reserved</small>
				</div>

				<!-- <div class="col-sm-6">
					<ul class="social-list">
						<li><a href="javascript:void(0)"><span class="icon icon-facebook" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-twitter" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-dribbble" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-google" aria-hidden="true"></span></a></li>
						<li><a href="javascript:void(0)"><span class="icon icon-youtube" aria-hidden="true"></span></a></li>
					</ul>
				</div> -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->

	</footer>

	<!-- Scripts -->
	<script src="https://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.sjc.com/static/index/js/libs/smooth-scroll.min.js"></script>
	<script type="text/javascript" src="http://www.sjc.com/static/index/js/libs/modernizr.mq.js"></script>
  <script type="text/javascript" src="http://www.sjc.com/static/index/js/libs/ios-parallax.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://www.sjc.com/static/index/js/custom.js"></script>

  <script>
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

		 var keywords = $("#keywords").val();
		 $.ajax({
				 type : 'POST',
				 url :"<?php echo url('Search/search'); ?>",
				 data : {keywords:keywords},
				 dataType : 'json',
				 success : function(res) {
						 if(res.status == 1){
								 alert(res.info);
								 window.location.href = "<?php echo url('Search/searchlist'); ?>"+"?keywords="+keywords;
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
  <script>
  var count = 0;
var isgo = false;
var timer;
window.onload = function(){
var ul_img = document.getElementsByClassName("ul_img")[0];
var li_img = document.getElementsByClassName("li_img");
var buttom_btn = document.getElementsByClassName("buttom_btn");
buttom_btn[0].style.backgroundColor ="white";
showtime();
function showtime(){
  timer = setInterval(function(){
    if(isgo == false){
      count++;
      ul_img.style.transform = "translate(" + -1365 * count + "px)";
      if (count >= li_img.length - 1) {
          count = li_img.length - 1;
          isgo = true;
      }
  }
  else {
    count--;
    ul_img.style.transform = "translate(" + -1365 * count + "px)"
    if(count<=0){
    count = 0;
    isgo =false;
    }
  }
  for (var j = 0; j < buttom_btn.length; j++) {
        buttom_btn[j].style.backgroundColor = "transparent";
     }
        buttom_btn[count].style.backgroundColor = "white";
},3000)
}
for(var a = 0; a < li_img.length; a++){
    buttom_btn[a].index = a;
    buttom_btn[a].onmouseover = function(){
    clearInterval(timer);
    for (var i = 0; i < buttom_btn.length; i++) {
      buttom_btn[i].style.backgroundColor = "transparent";
    }
      buttom_btn[this.index].style.backgroundColor = "white";
      if (this.index == 2) {
        isgo == true;
      }
      if(this.index == 0) {
        isgo == false;
      }
     count = this.index;
     ul_img.style.transform = "translate(" + this.index * -1365+ "px)"
     count = this.index;
     buttom_btn[count].style.backgroundColor = "white";
  }
  buttom_btn[a].onmouseout= function(){
    showtime();

  }
}
}
  </script>

</body>
</html>
