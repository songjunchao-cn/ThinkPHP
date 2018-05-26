<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Search as SearchModel;
class Search extends Controller
{
   public function search(){
     $keywords = input('keywords');
     $map['article_title']= ['like','%'.$keywords.'%'];
     $searchlist = db('article')->where($map)->order('article_id desc')->select();

     if($searchlist){

        return json(['status'=>1, 'info'=>'success','data'=>$searchlist]);

     }
     else {
       return json(['status'=>0,'info'=>'fail']);
     }

   }
   public function searchlist(){
     $keywords = input('keywords');
     //dump($keywords);die;
     $map['article_title']= ['like','%'.$keywords.'%'];
     $searchlist = db('article')->where($map)->order('article_id desc')->select();
     $this->assign('searchlist',$searchlist);
     return $this->fetch('search');

   }
}
?>
