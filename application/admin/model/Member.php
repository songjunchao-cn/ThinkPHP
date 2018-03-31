<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Member extends model
{
  public function login($data){
    $member=Db::name('member')->where('member_username','=',$data['username'])->find();
    var_dump('$member');
    if($member){
      if($member['member_pass'] == md5($data['password'])){
        return 3; //登陆成功
      }
        else {
          return 2; //密码错误
        }
    }
    else {
      return 1; //用户不存在
    }

  }
}
 ?>
