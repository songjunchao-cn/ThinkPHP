<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wamp64\www\tp5\public/../application/index\view\circle\circle_list.html";i:1526508483;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>圈子</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="http://www.sjc.com/static/index/layui/css/layui.css">
		<link rel="stylesheet" href="http://www.sjc.com/static/index/css/circle_global.css">
		<script src="http://www.sjc.com/static/index/layui/layui.js"></script>
	</head>
	<body>
		<iframe  src="<?php echo url('Circle/head'); ?>" scrolling="no" width="100%" height="65px" ></iframe>
		<div class="main layui-clear">
			<div class="wrap">
				<div class="content" style="margin-right:0">
					<div class="fly-tab">
						<!--
        <span>
          <a href="" class="tab-this">全部</a>
          <a href="">未结帖</a>
          <a href="">已采纳</a>
          <a href="">置顶帖</a>
          <a href="../user/index.html">我的帖</a>
        </span>
       -->
						<form action="" class="fly-search">
							<!-- <i class="iconfont icon-sousuo"></i>
							<input class="layui-input" autocomplete="off" placeholder="搜索内容" type="text" name="q"> -->
						</form>

					</div>

					<ul class="fly-list">
						<a href="<?php echo url('Circle/circleadd'); ?>" class="layui-btn jie-add">发布帖子</a>
							<?php if(is_array($circlelist) || $circlelist instanceof \think\Collection || $circlelist instanceof \think\Paginator): $i = 0; $__LIST__ = $circlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class="fly-list-li">
							<!-- <a href="" class="fly-list-avatar">
								<img src="http://www.sjc.com/static/index/img/uer.jpg" alt="">
							</a> -->
							<h2 class="fly-tip">
            <a onClick="window.location.href='circle/circle?circle_id=<?php echo $vo['circle_id']; ?>'"> <?php echo $vo['resorce_title']; ?></a>

          </h2>
							<p>
								<span><a href=""><?php echo $vo['resorce_desc']; ?></a></span>
								<span style="float:left"><?php echo $vo['resorce_time']; ?></span>
								<!-- <span><?php echo $vo['resorce_content']; ?></span> -->
								<!-- <span class="fly-list-hint">
              <i class="iconfont" title="回答">&#xe60c;</i> 502
            </span> -->
							</p>
						</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>


					<!-- <div class="fly-none">并无相关数据</div> -->



							  <div class="layui-pages" id="pages"></div>



				</div>
			</div>
		</div>
	</body>
	<script>
	layui.use('laypage', function(){
		var laypage = layui.laypage;//分页插件
	//执行laypage实例
	laypage.render({
		elem: 'pages',
		limit:<?php echo $limit; ?>,
		limits:[10,15,20],
		count: <?php echo $count; ?>,
		layout: ['count','prev','page','next','limit'],
		curr:<?php echo $page; ?>,
		jump:function(obj,first){
			// window.location.herf = "<?php echo url('index/circle/circlelist'); ?>?page=" + obj.curr+'&limit='+obj.limit;
			if(!first){
				  window.location.href="<?php echo url('index/circle/circlelist'); ?>?page=" + obj.curr+'&limit='+obj.limit;
			}
		}
	 });
	});
	</script>
</html>
