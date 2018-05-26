<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Circle as CircleModel;
class Circle extends BaseIndex
{
  public function head()
   {
  return $this->fetch('circle:head');
  }
  public function circle()
   {
  $id = input('circle_id');
  $list =db('circle')->where('circle_id',$id)->alias('c')
  ->join('member m','m.member_id=c.poster_id')->find();//发帖用户
  $commentlist = db('circle')->where('circle_id',$id)->alias('c')//
  ->join('comment co','co.cresorce_id=c.circle_id')
  ->join('member m','m.member_id=co.cmember_id')->select();
  // dump(array($commentlist,$list));
  $this->assign('circle',array($commentlist,$list));
  return $this->fetch('circle');
  }
    public function circlelist()
      {
        $count =db('circle')->count();
        $page = $this->request->param('page',1,'intval');
        $limit = $this->request->param('limit',10,'intval');
        $list = db('circle')->order('circle_id desc')->select();
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('circlelist',$list);


          return $this->fetch('circle_list');
      }
      public function circleadd(){
         if(request()->isPost()){
           $data=[
             'resorce_title'=>input('title'),
             'resorce_content'=>input('content'),
             'resorce_time'=>date('Y-m-d H:i:s',time()),
             'resorce_files'=>input('files'),
             'poster_id'=>input('posterid'),

           ];
           if($_FILES['files']['tmp_name']){
              $file = request()->file('files');
              $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
              $data['resorce_files']='uploads/'.$info->getSaveName();
           }
           if(db('circle')->insert($data)){
             return $this->success('添加成功','circlelist');
           }
             else{
               return $this->error('添加失败');
                 }
           return;
         }
         return $this->fetch("circle_add");
        }
        public function commentadd(){
          $user=input('member_id');
          $data=[
            'cresorce_id' => input('circle_id'),
            'comment_content' => input('comment'),
            'cmember_id' =>input('member_id'),
            'comment_time' =>date('Y-m-d H:i:s',time()),
          ];
          $result=db('comment')->insert($data);
          if (!$user) {
          return json(['status'=>2, 'info'=>'评论失败,请登录']);
          }
          if ($result) {
          return json(['status'=>1, 'info'=>'评论成功']);
          }
          if (!$result) {
          return json(['status'=>0, 'info'=>'fail']);
          }


        }

        public function out() {
              session(null);
              $this->redirect('Head/head');
          }
}
?>
