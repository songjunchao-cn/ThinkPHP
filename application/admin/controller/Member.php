<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Member as MemberModel;
class Member extends BaseAdmin{
public function memberlist(){
  $count =db('member')->count();
  $this->assign('count',$count);
  $page = $this->request->param('page',1,'intval');
  $limit = $this->request->param('limit',10,'intval');
  $list = db('member')->order('member_id desc')->select();
  $this->assign('memberlist',$list);
  $this->assign('page',$page);
  $this->assign('limit',$limit);
  return $this->fetch();
 }
public function memberedit(){
  $id= input('member_id');
  $member = db('member')->where('member_id',$id)->find();
  $this->assign('member',$member);
  if(request()->isPost()){
    $data=[
      'member_email'=>input('email'),
      'member_username'=>input('username'),
      'member_tel'=>input('tel'),
      'member_sex'=>input('sex'),
    ];
    if(db('member')->where('member_id',$id)->update($data)){
       return json(['status'=>1, 'info'=>'成功']);
    }
    else{
        return json(['status'=>0, 'info'=>'失败']);
    }
      return;
    }
      return $this->fetch();
   }
public function memberstart(){
     $member_id= input('member_id');
     $shift = db('member')->where('member_id',input('member_id'))->update(array('member_status' => 1));
     if ($shift) {
         return json(['status'=>1, 'info'=>'启动成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'启动失败']);
     }
  }
public function memberstop(){
  $member_id= input('member_id');
  $shift = db('member')->where('member_id',$member_id)->update(array('member_status' => 0));
     if ($shift) {
         return json(['status'=>1, 'info'=>'停用成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'停用失败']);
     }
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
public function membersdel(){
    $arr=input('checkedArr/a');
    $id= join(',',$arr);
       $del= db('member')->where(array('member_id' =>array('in',$id)))->delete();
    if ($del) {
        return json(['status'=>1, 'info'=>'成功']);
    }
    else {
       return json(['status'=>0, 'info'=>'失败']);
    }

 }
}
?>
