<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Video as VideoModel;
class Video extends BaseAdmin{
public function videolist(){
  $count =db('video')->count();
  $page = $this->request->param('page',1,'intval');
  $limit = $this->request->param('limit',10,'intval');
  $list = db('video')->order('video_id desc')->select();
  $this->assign('count',$count);
  $this->assign('page',$page);
  $this->assign('limit',$limit);
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
       // 'video_pic'=>input('pic'),

     ];
     // dump($_FILES);
     if($_FILES['content']['tmp_name']){
        $file = request()->file('content');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        // dump($info);
        $data['video_content']='uploads/'.$info->getSaveName();
     }
     // dump($_FILES);
     if($_FILES['pic']['tmp_name']){
        $file = request()->file('pic');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        // dump($info);
        $data['video_pic']='uploads/'.$info->getSaveName();
     }

       // var_dump($data);die;
     if(Db::name('video')->insert($data)){
       return json(['status'=>1, 'info'=>'成功']);
     }
       else{
       return json(['status'=>0, 'info'=>'失败']);
       }
     return;
   }
   return $this->fetch();
  }
public function videoedit(){
  $id= input('video_id');
  // dump($id);
  $video = Db::table('video')->where('video_id',$id)->find();
  $this->assign('video',$video);

  if(request()->isPost()){
    $data=[
      // 'video_id'=>input('id'),
      'video_title'=>input('title'),
      'video_author'=>input('author'),
      'video_desc'=>input('desc'),

    ];
    if($_FILES['content']['tmp_name']){
       $file = request()->file('content');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       // dump($info);
       $data['video_content']='/uploads/'.$info->getSaveName();
    }
    if($_FILES['pic']['tmp_name']){
       $file = request()->file('pic');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       // dump($info);
       $data['video_pic']='/uploads/'.$info->getSaveName();
    }



     // dump($data);die;
    if(Db::name('video')->where('video_id',$id)->update($data)){
      return json(['status'=>1, 'info'=>'成功']);
    }
    else{
      return json(['status'=>0, 'info'=>'失败']);
    }
      return;
    }
      return $this->fetch();
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
 public function videosdel(){
     $arr=input('checkedArr/a');
     $id= join(',',$arr);
        $del= db('video')->where(array('video_id' =>array('in',$id)))->delete();
     if ($del) {
         return json(['status'=>1, 'info'=>'删除成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'删除失败']);
     }

  }
}
?>
