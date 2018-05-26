<?php
namespace app\index\controller;
use think\Controller;
class Head extends Controller
{
  public function head()
   {
  return $this->fetch('circle:head');
  }
}
  ?>
