<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Article as ArticleModel;
class Article extends Controller{
public function articlelist(){
  $list = ArticleModel::paginate(5);
  $this->assign('articlelist',$list);
  return $this->fetch();
 }
public function articleadd(){
   if(request()->isPost()){
     $data=[
       'article_title'=>input('title'),
       'article_author'=>input('author'),
       'article_desc'=>input('desc'),
       'article_content'=>input('content'),
       // 'article_pic'=>input('pic'),

     ];
     if($_FILES['pic']['tmp_name']){
        $file = request()->file('pic');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $data['article_pic']='/uploads/'.$info->getSaveName();
     }

       var_dump($data);
     if(Db::name('article')->insert($data)){
       return $this->success('添加成功','articlelist');
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
public function articleedit(){
  $id= input('article_id');
  dump($id);
  $article = Db::table('article')->where('article_id',$id)->find();
  dump($article);
  $this->assign('article',$article);

  if(request()->isPost()){
    $data=[
      // 'article_id'=>input('id'),
      'article_title'=>input('title'),
      'article_author'=>input('author'),
      'article_desc'=>input('desc'),
      'article_content'=>input('content'),


    ];
    if($_FILES['pic']['tmp_name']){
       $file = request()->file('pic');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       $data['article_pic']='/uploads/'.$info->getSaveName();
    }


     // dump($data);die;
    if(Db::name('article')->where('article_id',$id)->update($data)){
      // $this->success('修改成功','articlelist');
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
public function articledel(){
  $del=db('article')->where('article_id',input('article_id'))->delete();
  if($del){
    echo "1";exit;
  }
  else {
    echo "2";exit;
  }
  return $this->fetch();
 }
public function articleview(){
  return $this->fetch();
 }
}
?>
