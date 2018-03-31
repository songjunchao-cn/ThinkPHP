<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Member;
class Login extends Controller{
public function Login()
  {
    if(request()->isPost()){
      $member = new Member();
      $data = input('post.');
      dump($data);
      if($member->login($data) == 3){
      $this->success('成功',index/index);
      }
      else{
        $this->error('错误');
      }
    }
    return $this->fetch();
  }
}
?>
