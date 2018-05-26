<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\wamp64\www\tp5\public/../application/index\view\circle\circle.html";i:1526507789;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="author" content="order by dede58.com/" />
<title>详情</title>
<!-- <meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="fly,layui,前端社区">
<meta name="description"
	content=""> -->
<link rel="stylesheet" href="http://www.sjc.com/static/index/layui/css/layui.css">
<link rel="stylesheet" href="http://www.sjc.com/static/index/css/circle_global.css">
<script src="http://www.sjc.com/static/index/layui/layui.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/jquery.js"></script> -->
<style type="text/css" rel="stylesheet">
form {
	margin: 0;
}

.editor {
	margin-top: 5px;
	margin-bottom: 5px;
}
</style>

</head>
<body>
	<iframe  src="<?php echo url('Circle/head'); ?>" scrolling="no" width="100%" height="65px" ></iframe>
	<div class="main layui-clear">
		<div class="wrap">
			<div class="content detail">
				<div class="fly-panel detail-box">
					<h1><?php echo $circle['1']['resorce_title']; ?></h1>
					<div class="fly-tip fly-detail-hint" data-id="">
						</span>
					</div>
					<div class="detail-about">
						<a class="jie-user" href=""> <img
							src="http://www.sjc.com/<?php echo $circle['1']['member_pic']; ?>" alt="头像"> <cite><?php echo $circle['1']['member_username']; ?>
								<em><?php echo $circle['1']['resorce_time']; ?>发布</em> </cite> </a>
						<div class="detail-hits" data-id="{{rows.id}}">
                <span class="layui-btn layui-btn-mini jie-admin  layui-btn-danger" type="collect" data-type="add">
							  <a href="http://www.sjc.com/<?php echo $circle['1']['resorce_files']; ?>">查看并下载</a> </span>

						</div>
					</div>
					<div class="detail-body photos" style="margin-bottom: 20px;">
						<p><?php echo $circle['1']['resorce_content']; ?></p>
					</div>
				</div>
				<div class="fly-panel detail-box" style="padding-top: 0;">
					<a name="comment"></a>
					<ul class="jieda photos" id="jieda">
            <?php if(is_array($circle[0]) || $circle[0] instanceof \think\Collection || $circle[0] instanceof \think\Paginator): $i = 0; $__LIST__ = $circle[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li data-id="12" class="jieda-daan"><a
							name="item-121212121212"></a>
							<div class="detail-about detail-about-reply">
								<a class="jie-user" href=""> <img
									src="http://www.sjc.com/<?php echo $vo['member_pic']; ?>" alt=""> <cite> <i><?php echo $vo['member_username']; ?></i>
									 </cite> </a>
								<div class="detail-hits">
									<span><?php echo $vo['comment_time']; ?></span>
								</div>
							</div>
							<div class="detail-body jieda-body">
								<p><?php echo $vo['comment_content']; ?></p>
							</div>
							<div class="jieda-reply">
							</div></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <li class="fly-none">没有任何回答</li> -->
					</ul>
					<span id="toName">@<?php echo $circle['1']['member_username']; ?>(楼主)</span>
					<div class="layui-form layui-form-pane">
						<form action="">
							<div class="layui-form-item layui-form-text">
								<div class="layui-input-block">
                    <textarea  id="comment" name="tel" autocomplete="off"
                    class="layui-textarea" style="height: 80px;"></textarea>
								</div>
							</div>
              <input type="hidden" name="article_id" value="<?php echo $circle['1']['circle_id']; ?>" id="circle_id">
              <input type="hidden" name="article_id" value="<?php echo \think\Request::instance()->session('memberid'); ?>" id="member_id">
							<div class="layui-form-item">
								<button class="layui-btn" type="button" id="comment-btn">提交</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 <script type="text/javascript">
    $("#comment-btn").click(
    function (){
    		 var comment = $("#comment").val();
         var circleid = $("#circle_id").val();
         var memberid = $("#member_id").val();
         console.log(comment);
    		 $.ajax({
    				 type : 'POST',
    				 url :"<?php echo url('Circle/commentadd'); ?>",
    				 data : {comment:comment,circle_id:circleid,member_id:memberid},
    				 dataType : 'json',
    				 success : function(res) {
    						 if(res.status == 1){
                     // alert(res.info);
    								 window.location.reload();

    						 }
                 if(res.status == 2){
                   alert(res.info);
                   window.location.href="<?php echo url('Login/login'); ?>";
                 }
                 else{
    								 alert(res.info);
    						 }
    				 },
    				 fail:function(){
    					 alert('请检查网络');
    				 },
    		 });
     });
     // function resorce_del(obj,id){
     //     layer.confirm('确认要删除吗？'
     //     ,function(index){
     //       $.ajax({
     //           type: 'POST',
     //           url:"<?php echo url('circle/circledel'); ?>",
     //           dataType :'json',
     //           data:{circle_id:id},
     //           success:function(data){
     //             // $(obj).parents("tr").remove();
     //             // layer.msg('已删除!',{icon:1,time:1000});
     //              console.log(data.msg);
     //           },
     //           error:function(data){
     //             console.log(data.msg);
     //           },
     //         });
     //     });


  </script>
</body>
</html>
