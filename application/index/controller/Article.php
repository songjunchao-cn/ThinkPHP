<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article as ArticleModel;
class Article extends Controller
{
  public function article()
   {
   $id = input('article_id');
  $list = db('article')->where('article_id',$id)->find();
  // var_dump($list);
  $this->assign('article',$list);
  return $this->fetch('article');
  }
    public function articlelist()
      {
        $list = ArticleModel::paginate(16);
        $this->assign('articlelist',$list);

          return $this->fetch('article_list');
      }
      // public function rearticlelist()
      //   {
      //     $list = ArticleModel::paginate(16);
      //     $this->assign('articlelist',$list);
      //
      //       return $this->fetch('article_list');
      //   }
}
?>
