<?php
namespace app\index\controller;
use think\Controller;
class Login extends Controller
{
    public function login()
    {
        return $this->fetch('login');
    }
    public function doLogin(){
            $username = input('username');
            $password = input('password');
            $verify = input('verify');
            $result = db('member')->where(array('member_username'=>$username,'member_pass'=>$password))->find();
            $status =$result['member_status'];
            $memberid = $result['member_id'];
            $memberpic = $result['member_pic'];
            if($result&$verify==1&$status==1){
                session('membername',$username);
                session('memberid',$memberid);
                session('memberpic',$memberpic);
                return json(['status'=>1, 'info'=>'登录成功']);
            }
            if(!$result){
                //$this->error('登陆失败');
                return json(['status'=>0, 'info'=>'用户名或密码错误']);
            }
            if ($verify==0) {
              return json(['status'=>0, 'info'=>'请向右滑动完成验证']);
            }
            if ($status==0) {
              return json(['status'=>0, 'info'=>'账号审核中，请联管理员']);
            }

        }


}
?>
