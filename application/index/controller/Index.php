<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Video as VideoModel;
use app\index\model\Article as ArticleModel;
// use app\index\model\Web as WebModel;
class Index extends Controller
{
  public function index()
    {
      $list = db('slider')->where(array('slider_status'=>1))->field('slider_pic')->select();
      $this->assign('sliderlist',$list);
      $list = VideoModel::paginate(8);
      $this->assign('videolist',$list);
      $list = ArticleModel::paginate(8);
      $this->assign('articlelist',$list);

        return $this->fetch('index');
    }
    // public function video()
    //   {
    //     $id = input('video_id');
    //     $list = db('video')->where('video_id',$id)->find();
    //     var_dump($list);
    //     $this->assign('videolist',$list);
    //       return $this->fetch('Video:video');
    //   }
      // public function article()
      //   {
      //     $id = input('article_id');
      //     $list = db('article')->where('article_id',$id)->find();
      //     var_dump($list);
      //     $this->assign('articlel',$list);
      //       return $this->fetch('Article:article');
      //   }
        // public function web()
        //   {
        //     $list = WebModel::paginate(16);
        //     $this->assign('weblist',$list);
        //
        //       return $this->fetch('Web:nav');
        //   }
}
?>
