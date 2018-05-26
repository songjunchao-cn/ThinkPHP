<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Article as ArticleModel;
class Article extends BaseAdmin{
public function articlelist(){
  $count =db('article')->count();
  $page = $this->request->param('page',1,'intval');
  $limit = $this->request->param('limit',10,'intval');
  $list = db('article')->order('article_id desc')->select();
  $this->assign('count',$count);
  $this->assign('page',$page);
  $this->assign('limit',$limit);
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

       // var_dump($data);
     if(Db::name('article')->insert($data)){
        return json(['status'=>1, 'info'=>'添加成功']);
     }
       else{
        return json(['status'=>0, 'info'=>'添加失败']);
       }
   //   if(request()->isPost()){
   //   dump(input('post.'));
   //   return;
   // }
     return;
   }
   return $this->fetch();
  }
  public function successlist(){
    return $this->fetch();
  }
public function articleedit(){
  $id= input('article_id');
  // dump($id);
  $article = Db::table('article')->where('article_id',$id)->find();
  // dump($article);
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

      return json(['status'=>1, 'info'=>'添加成功']);
    }
    else{
      return json(['status'=>0, 'info'=>'添加失败']);
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
 public function articlesdel(){
     $arr=input('checkedArr/a');
     $id= join(',',$arr);
     $del= db('article')->where(array('article_id' =>array('in',$id)))->delete();
     if ($del) {
         return json(['status'=>1, 'info'=>'删除成功']);
     }
     else {
        return json(['status'=>0, 'info'=>'删除失败']);
     }

  }
}
?>
