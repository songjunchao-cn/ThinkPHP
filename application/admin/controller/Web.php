<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Web as WebModel;
class Web extends Controller{
public function weblist(){
  $list = WebModel::paginate(5);
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
       var_dump($data);
     if(Db::name('web')->insert($data)){
        var_dump($data);
       return $this->success('添加成功','weblist');
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
public function webedit(){
  $id= input('web_id');
  dump($id);
  $web = Db::table('web')->where('web_id',$id)->find();
  dump($web);
  $this->assign('web',$web);

  if(request()->isPost()){
    $data=[
      // 'web_id'=>input('id'),
      'web_title'=>input('title'),
      'web_url'=>input('url'),
      'web_desc'=>input('desc'),
      'web_time'=>input('time'),

    ];

     // dump($data);die;
    if(Db::name('web')->where('web_id',$id)->update($data)){
      // $this->success('修改成功','weblist');
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
public function webview(){
  return $this->fetch();
 }
}
?>
