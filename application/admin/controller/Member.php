<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Member extends Controller{
public function memberlist(){
  return $this->fetch();
 }
public function memberdel(){
  return $this->fetch();
 }
public function memberview(){
  return $this->fetch();
 }
 public function memberadd(){
   if(request()->isPost()){
     $data=[
       'member_email'=>input('email'),
       'member_username'=>input('username'),
       'member_pass'=>md5(input('pass')),
       'member_repass'=>md5(input('repass')),

     ];
     if(Db::name('member')->insert($data)){
       return $this->success('添加成功','memberlist');
     }
       else{
         return $this->error('添加失败');
       }
   //   if(request()->isPost()){
   //   dump(input('post.'));
   //   return;
   // }
     return;
   }
   return $this->fetch();
  }
}
?>
