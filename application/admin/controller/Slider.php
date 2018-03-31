<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Slider as SliderModel;
class Slider extends Controller{
public function sliderlist(){
  $list = SliderModel::paginate(5);
  $this->assign('sliderlist',$list);
  return $this->fetch();
 }
public function slideradd(){
   if(request()->isPost()){
     $data=[
       'slider_title'=>input('title'),
       'slider_author'=>input('author'),
       'slider_desc'=>input('desc'),
       'slider_pic'=>input('pic'),

     ];
     if($_FILES['pic']['tmp_name']){
        $file = request()->file('pic');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $data['slider_pic']='/uploads/'.$info->getSaveName();
     }

       var_dump($data);
     if(Db::name('slider')->insert($data)){
       return $this->success('添加成功','sliderlist');
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
public function slideredit(){
  $id= input('slider_id');
  dump($id);
  $slider = Db::table('slider')->where('slider_id',$id)->find();
  dump($slider);
  $this->assign('slider',$slider);

  if(request()->isPost()){
    $data=[
      // 'slider_id'=>input('id'),
      'slider_title'=>input('title'),
      'slider_author'=>input('author'),
      'slider_desc'=>input('desc'),

    ];
    if($_FILES['pic']['tmp_name']){
       $file = request()->file('pic');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       dump($info);
       $data['slider_pic']='/uploads/'.$info->getSaveName();
    }


     // dump($data);die;
    if(Db::name('slider')->where('slider_id',$id)->update($data)){
      // $this->success('修改成功','sliderlist');
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
public function sliderview(){
  return $this->fetch();
 }
}
?>
