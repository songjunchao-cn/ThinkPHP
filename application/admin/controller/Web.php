<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Web as WebModel;
class Web extends BaseAdmin{
public function weblist(){
  $count =db('web')->count();
  $page = $this->request->param('page',1,'intval');
  $limit = $this->request->param('limit',10,'intval');
  $list = db('web')->order('web_id desc')->select();
  $this->assign('count',$count);
  $this->assign('page',$page);
  $this->assign('limit',$limit);
  $this->assign('weblist',$list);
  return $this->fetch();
 }
public function webadd(){
   if(request()->isPost()){
     $data=[
       'web_title'=>input('title'),
       'web_url'=>input('url'),
       'web_desc'=>input('desc'),
       'web_time'=>input('time'),



     ];
     if($_FILES['web_pic']['tmp_name']){
        $file = request()->file('web_pic');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $data['web_pic']='/uploads/'.$info->getSaveName();
     }
     if(Db::name('web')->insert($data)){
       return json(['status'=>1, 'info'=>'成功']);
     }
       else{
        return json(['status'=>0, 'info'=>'失败']);
       }
     return;
   }
   return $this->fetch();
  }
public function webedit(){
  $id= input('web_id');
  $web = Db::table('web')->where('web_id',$id)->find();
  $this->assign('web',$web);
  if(request()->isPost()){
    $data=[
      'web_title'=>input('title'),
      'web_url'=>input('url'),
      'web_desc'=>input('desc'),
      'web_time'=>input('time'),
    ];
    if($_FILES['web_pic']['tmp_name']){
       $file = request()->file('web_pic');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       $data['web_pic']='/uploads/'.$info->getSaveName();
    }


     // dump($data);die;
    if(Db::name('web')->where('web_id',$id)->update($data)){
      return json(['status'=>1, 'info'=>'成功']);
    }
    else{
      return json(['status'=>0, 'info'=>'失败']);
    }
      return;
    }
      return $this->fetch();
    // return $id;
   }
public function webdel(){
  $del=db('web')->where('web_id',input('web_id'))->delete();
  if($del){
    echo "1";exit;
  }
  else {
    echo "2";exit;
  }
  return $this->fetch();
 }
 public function websdel(){
     $arr=input('checkedArr/a');
     $id= join(',',$arr);
        $del= db('web')->where(array('web_id' =>array('in',$id)))->delete();
     if ($del) {
         return json(['status'=>1, 'info'=>'删除成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'删除失败']);
     }

  }
}
?>
