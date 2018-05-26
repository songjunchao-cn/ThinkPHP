<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Member;
class Login extends Controller{
  public function login(){

    return  $this->fetch('login');

    }
public function doLogin(){
        $email = input('email');
        $password = input('password');
        $veriryname = trim(input('veriryname'));
        // dump($veriryname);
        //var_dump($email);
        $result = db('admin')->field('id,admin_name')->where(array('email'=>$email,'password'=>$password))->find();
        $adminid = $result['id'];
        $adminname = $result['admin_name'];
        // $adminname = $result['']
        // $a =captcha_check($veriryname);
        // var_dump($a);

        if($email == ''){
            //$this->error('登陆失败');
            return json(['status'=>0, 'info'=>'请输入用户名']);
        }
        if($password == ''){
            //$this->error('登陆失败');
            return json(['status'=>0, 'info'=>'请输入密码']);
        }
        if($veriryname == ''){
            //$this->error('登陆失败');
            return json(['status'=>0, 'info'=>'请输入验证码']);
        }
        if (!captcha_check($veriryname)) {
            return json(['status'=>0, 'info'=>'验证码错误']);
        }
        if(!$result){
            // session('admin',$result);
            //session('id',$adminid);
            //$this->success('登陆成功',url('Index/index'));
            return json(['status'=>0, 'info'=>'用户名或密码错误']);
        }
        if($result){
            session('adminid',$adminid);
            session('adminname',$adminname);
            //session('id',$adminid);
            //$this->success('登陆成功',url('Index/index'));
            return json(['status'=>1, 'info'=>'登录成功']);
        }

    }
  }
?>
