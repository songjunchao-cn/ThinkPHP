<?php
namespace app\index\controller;
use think\Controller;
class Web extends Controller
{
  public function weblist()
    {
      $list = db('web')->select();
      $this->assign('weblist',$list);
      return $this->fetch('nav');
    }
}
?>
