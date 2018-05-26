<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\wamp64\www\tp5\public/../application/admin\view\article\successlist.html";i:1525101165;}*/ ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <script src="http://www.sjc.com/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <!-- <script type="text/javascript" src="http://www.sjc.com/static/admin/js/xadmin.js"></script> -->
    <script>

function closePageForm(){
  window.parent.location.reload();
  var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
  parent.layer.close(index);
  // alert(11)
};
window.onload =closePageForm;

    </script>
    <title></title>
  </head>
  <body>
    成功
  </body>

</html>
