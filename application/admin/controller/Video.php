<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Video as VideoModel;
class Video extends Controller{
public function videolist(){
  $list = VideoModel::paginate(5);
  $this->assign('videolist',$list);
  return $this->fetch();
 }
public function videoadd(){
   if(request()->isPost()){
     $data=[
       'video_title'=>input('title'),
       'video_author'=>input('author'),
       'video_desc'=>input('desc'),
       'video_content'=>input('content'),

     ];
     // dump($_FILES);
     if($_FILES['content']['tmp_name']){
        $file = request()->file('content');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        dump($info);
        $data['video_content']='/uploads/'.$info->getSaveName();
     }

       // var_dump($data);die;
     if(Db::name('video')->insert($data)){
       return $this->success('添加成功','videolist');
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
public function videoedit(){
  $id= input('video_id');
  dump($id);
  $video = Db::table('video')->where('video_id',$id)->find();
  dump($video);
  $this->assign('video',$video);

  if(request()->isPost()){
    $data=[
      // 'video_id'=>input('id'),
      'video_title'=>input('title'),
      'video_author'=>input('author'),
      'video_desc'=>input('desc'),

    ];
    dump($_FILES);die
    if($_FILES['content']['tmp_name']){
       $file = request()->file('content');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       dump($info);
       $data['video_content']='/uploads/'.$info->getSaveName();
    }


     // dump($data);die;
    if(Db::name('video')->where('video_id',$id)->update($data)){
      // $this->success('修改成功','videolist');
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
public function videodel(){
  $del=db('video')->where('video_id',input('video_id'))->delete();
  if($del){
    echo "1";exit;
  }
  else {
    echo "2";exit;
  }
  return $this->fetch();
 }
public function videoview(){
  return $this->fetch();
 }
}
?>
