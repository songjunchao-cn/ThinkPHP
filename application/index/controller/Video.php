<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Video as VideoModel;
class Video extends Controller
{
  public function video()
  {
    $id = input('video_id');
    $list = db('video')->where('video_id',$id)->find();
    $list['video_content'] = str_ireplace("\\","/",$list['video_content']);
    $list['video_pic'] = str_ireplace("\\","/",$list['video_pic']);
    $this->assign('videolist',$list);
      return $this->fetch('Video:video');
  }
  public function videolist()
    {
      $list = VideoModel::paginate(8);
      $this->assign('videolist',$list);

        return $this->fetch('video_list');
    }
}
//dump($list);
//http://www.sjc.com//uploads/20180408/7d91d4dfaceb5f2d3ec22abd79f955bf.mp4
// /uploads/20180408\140aa2e211b6410ee30f0398419bdd42.mp4
// uploads/20180408/140aa2e211b6410ee30f0398419bdd42.mp4
?>
