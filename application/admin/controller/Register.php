<?php
namespace app\admin\controller;
use think\Controller;
class Register extends Controller
{
    public function register()
    {
        return $this->fetch('register');
    }
    public function doregister(){
            $adminname = input('adminname');
            $password = input('password');
            $email = input('email');
            $result = db('admin')->insert(
            array('admin_name'=>$adminname,'password'=>$password,'email'=>$email)
          );
            if($result){
                return json(['status'=>1, 'info'=>'success']);
            }else{
                return json(['status'=>0, 'info'=>'fail']);
            }

        }


}
?>
