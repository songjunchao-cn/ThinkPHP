<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\tp5\public/../application/index\view\circle\circle_add.html";i:1526490968;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>发布资源</title>
  <link rel="stylesheet" href="http://www.sjc.com/static/index/layui/css/layui.css">
  <link rel="stylesheet" href="http://www.sjc.com/static/index/css/circle_global.css">
<script src="http://www.sjc.com/static/index/layui/layui.js"></script>
</head>
<body>

<iframe  src="head.html" scrolling="no" width="100%" height="65px" ></iframe>

<div class="main layui-clear">
  <div class="fly-panel" pad20>
    <h2 class="page-title">发布资源</h2>

    <!-- <div class="fly-none">并无权限</div> -->

    <div class="layui-form layui-form-pane">
      <form action=" " enctype="multipart/form-data" method="post">

        <input type="hidden"  name="posterid" required lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo \think\Request::instance()->session('memberid'); ?>">
        <div class="layui-form-item">
          <label for="L_title" class="layui-form-label">标题</label>
          <div class="layui-input-block">
            <input type="text" id="L_title" name="title" required lay-verify="required" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item layui-form-text">
          <div class="layui-input-block">
             <div class="editor">
    			<textarea id="content" name="content" style="width:1040px;height:450px;visibility:hidden;"></textarea>
  			 </div>
          </div>
          <label for="content" class="layui-form-label" style="top: -2px;">文字</label>
        </div>
        <!-- <div class="layui-form-item">
          <label for="L_title" class="layui-form-label">时间</label>
          <div class="layui-input-block">
            <input type="date"  name="time" required lay-verify="required" autocomplete="off" class="layui-input">
          </div>
        </div> -->
        <div class="layui-form-item">
            <label for="files" class="layui-form-label">
                <span>*</span>文件
            </label>
            <div class="layui-input-inline">
                <input type="file" id="files" name="files" required=""
                autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">
                上传你的视频
            </div>
        </div>
        <div class="layui-form-item">
          <button class="layui-btn" lay-filter="*" lay-submit>立即发布</button>
        </div>
      </form>
    </div>
  </div>
</div>
 <script type="text/javascript" charset="utf-8" src="http://www.sjc.com/static/index/js/kindeditor.js"></script>
  <script type="text/javascript">
    KE.show({
        id : 'content',
		resizeMode : 1,
        cssPath : './index.css',
        items : [
        'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
        'removeformat', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
        'insertunorderedlist', 'emoticons', 'image', 'link']
    });
  </script>
<script>
</script>
</body>
</html>
