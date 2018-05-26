<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Circle as CircleModel;
class Circle extends BaseAdmin{
public function circlelist(){
  $count =db('circle')->count();
  $this->assign('count',$count);
  $page = $this->request->param('page',1,'intval');
  $limit = $this->request->param('limit',10,'intval');
  $list = db('circle')->order('circle_id desc')->select();
  $this->assign('circlelist',$list);
  $this->assign('page',$page);
  $this->assign('limit',$limit);
  return $this->fetch();
 }
public function circleadd(){
   if(request()->isPost()){
     $data=[
       'resorce_title'=>input('title'),
       'resorce_time'=>input('time'),
       'resorce_desc'=>input('desc'),
       'resorce_content'=>input('content'),

       // 'circle_pic'=>input('pic'),

     ];
     if($_FILES['files']['tmp_name']){
        $file = request()->file('files');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $data['resorce_files']='/uploads/'.$info->getSaveName();
     }

       // var_dump($data);
     if(Db::name('circle')->insert($data)){
        return json(['status'=>1, 'info'=>'成功']);
     }
       else{
        return json(['status'=>0, 'info'=>'失败']);
       }

   }
   return $this->fetch();
  }
public function circleedit(){
  $id= input('circle_id');
  // dump($id);
  $circle = Db::table('circle')->where('circle_id',$id)->find();
  // dump($circle);
  $this->assign('resorce',$circle);

  if(request()->isPost()){
    $data=[
      // 'circle_id'=>input('id'),
      'resorce_title'=>input('title'),

      'resorce_desc'=>input('desc'),
      'resorce_content'=>input('content'),
      // 'resorce_'=>input('desc'),

    ];
    if($_FILES['files']['tmp_name']){
       $file = request()->file('files');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       $data['resorce_files']='/uploads/'.$info->getSaveName();
    }


     // dump($data);die;
    if(Db::name('circle')->where('circle_id',$id)->update($data)){
      return json(['status'=>1, 'info'=>'成功']);
    }
    else{
      return json(['status'=>0, 'info'=>'失败']);
    }
    }
      return $this->fetch();
    // return $id;
   }
public function circledel(){
  $del=db('circle')->where('circle_id',input('circle_id'))->delete();
  if($del){
    echo "1";exit;
  }
  else {
    echo "2";exit;
  }
  return $this->fetch();
 }
 public function circlesdel(){
     $arr=input('checkedArr/a');
     $id= join(',',$arr);

      // var_dump($arr);
     // echo json_encode();
     // $del=db('member')->where(array('member_id' =>array('in',$arr)))->delete();
        $del= db('circle')->where(array('circle_id' =>array('in',$id)))->delete();
     if ($del) {
         return json(['status'=>1, 'info'=>'成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'失败']);
     }

  }
 }
?>
