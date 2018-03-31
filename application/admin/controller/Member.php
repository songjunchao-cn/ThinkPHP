<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Member as MemberModel;
class Member extends Controller{
public function memberlist(){
  $list = MemberModel::paginate(7);
  $this->assign('memberlist',$list);
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
public function memberedit(){
  // $id = $_GET['member_id'];
  $id= input('member_id');
  dump($id);
  $member = Db::table('member')->where('member_id',$id)->find();
  dump($member);
  $this->assign('member',$member);

  if(request()->isPost()){
    $data=[
      // 'member_id'=>input('id'),
      'member_email'=>input('email'),
      'member_username'=>input('username'),
      'member_ad'=>input('city'),
      'member_tel'=>input('tel'),
      'member_sex'=>input('sex'),
    ];

     // dump($data);die;
    if(Db::name('member')->where('member_id',$id)->update($data)){
      // $this->success('修改成功','memberlist');
      $this->success('ar');
    }
    else{
      $this->error('失败');
    }
      return;
    }
      return $this->fetch();
    // return $id;
   }
public function memberdel(){
  $del=db('member')->where('member_id',input('member_id'))->delete();
  if($del){
    echo "1";exit;
  }
  else {
    echo "2";exit;
  }
  return $this->fetch();
 }
public function memberview(){
  return $this->fetch();
 }
}
?>
