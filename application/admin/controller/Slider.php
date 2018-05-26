<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Slider as SliderModel;
class Slider extends BaseAdmin{
public function sliderlist(){
  $count =db('slider')->count();
  $this->assign('count',$count);
  $page = $this->request->param('page',1,'intval');
  $limit = $this->request->param('limit',10,'intval');
  $list = db('slider')->order('slider_id desc')->limit(($page-1)*$limit,$limit)->select();
  // var_dump($page);
  $this->assign('sliderlist',$list);
  $this->assign('page',$page);
  $this->assign('limit',$limit);

  return $this->fetch();
 }
public function slideradd(){
   if(request()->isPost()){
     $data=[
       'slider_title'=>input('title'),
       'slider_author'=>input('author'),
       'slider_desc'=>input('desc'),

     ];
     if($_FILES['pic']['tmp_name']){
        $file = request()->file('pic');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $data['slider_pic']='/uploads/'.$info->getSaveName();
     }

     if(Db::name('slider')->insert($data)){
       return json(['status'=>1, 'info'=>'添加成功']);
     }
       else{
      return json(['status'=>0, 'info'=>'添加失败']);
       }
     return;
   }
   return $this->fetch();
  }
public function slideredit(){
  $id= input('slider_id');
  $slider = Db::table('slider')->where('slider_id',$id)->find();
  $this->assign('slider',$slider);
  if(request()->isPost()){
    $data=[
      'slider_title'=>input('title'),
      'slider_author'=>input('author'),
      'slider_desc'=>input('desc'),
    ];
    if($_FILES['pic']['tmp_name']){
       $file = request()->file('pic');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       // dump($info);
       $data['slider_pic']='/uploads/'.$info->getSaveName();
    }


     // dump($data);die;
    if(Db::name('slider')->where('slider_id',$id)->update($data)){
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
public function sliderdel(){
  $del=db('slider')->where('slider_id',input('slider_id'))->delete();
  if($del){
    echo "1";exit;
  }
  else {
    echo "2";exit;
  }
  return $this->fetch();
 }
 public function slidersdel(){
     $arr=input('checkedArr/a');
     $id= join(',',$arr);
        $del= db('slider')->where(array('slider_id' =>array('in',$id)))->delete();
     if ($del) {
         return json(['status'=>1, 'info'=>'删除成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'删除失败']);
     }

  }
  public function sliderstart(){
       $skider_id= input('slider_id');
       $shift = db('slider')->where('slider_id',input('slider_id'))->update(array('slider_status' => 1));
       if ($shift) {
           return json(['status'=>1, 'info'=>'启动成功']);
       }
       else {
          return json(['status'=>0, 'info'=>'启动失败']);
       }
    }
  public function sliderstop(){
    $slider_id= input('slider_id');
    $shift = db('slider')->where('slider_id',$slider_id)->update(array('slider_status' => 0));
       if ($shift) {
           return json(['status'=>1, 'info'=>'停用成功']);
       }
       else {
          return json(['status'=>0, 'info'=>'停用失败']);
       }
  }
}
?>
