<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\tp5\public/../application/admin\view\member\memberedit.html";i:1522248397;}*/ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>后台登录-X-admin1.1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://www.sjc.com/static/admin/css/font.css">
  <link rel="stylesheet" href="http://www.sjc.com/static/admin/css/xadmin.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
  <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
  <script src="http://www.sjc.com/static/admin/lib/layui/layui.js" charset="utf-8"></script>
  <script type="text/javascript" src="http://www.sjc.com/static/admin/js/xadmin.js"></script>
</head>
<body>
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form"  method="post">
              <input type="hidden" name="id" value="$member.member_id">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        邮箱
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="email" required lay-verify="email"
                        autocomplete="off" value="<?php echo $member['member_email']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        如果您在邮箱已激活的情况下，变更了邮箱，需
                        <a href="/user/activate/" style="font-size: 12px; color: #4f99cf;">
                            重新验证邮箱
                        </a>
                        。
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        昵称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="username" required lay-verify="required"
                        autocomplete="off" value="<?php echo $member['member_username']; ?>" class="layui-input">
                    </div>
                    <div class="layui-inline">
                        <div class="layui-input-inline">
                            <?php if($member['member_sex'] == '0'): ?>
                            <input type="radio" name="sex" value="0" title="男" checked>
                            <input type="radio" name="sex" value="1" title="女">
                            <?php else: ?>
                            <input type="radio" name="sex" value="0" title="男">
                            <input type="radio" name="sex" value="1" title="女" checked>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_city" class="layui-form-label">
                        城市
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_city" name="city" autocomplete="off" value="<?php echo $member['member_ad']; ?>"
                        class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                        电话
                    </label>
                    <div class="layui-input-inline">
                        <!-- <textarea  id="L_tel" name="tel" autocomplete="off"
                        class="layui-textarea" style="height: 80px;"></textarea>   -->
                        <input type="text" id="L_tel" name="tel" autocomplete="off" value="<?php echo $member['member_tel']; ?>"
                          class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                    </label>
                    <button class="layui-btn" key="set-mine" lay-filter="save" lay-submit>
                        保存
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>
