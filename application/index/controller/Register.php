<?php
namespace app\index\controller;
use think\Controller;
class Register extends Controller
{
    public function register()
    {
        return $this->fetch('register');
    }
    public function doregister(){
      $data=[
          'member_username' => input('username'),
          'member_pass' => input('password'),
          'member_email' => input('email'),
          'member_tel'=> input('phone'),
          'member_status'=> 1,
          ];
          if($_FILES['pic']['tmp_name']){
             $file = request()->file('pic');
             $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
             $data['member_pic']='/uploads/'.$info->getSaveName();
          }
            $result = db('member')->insert($data);
            if($result){
                return json(['status'=>1, 'info'=>'success']);
            }else{
                return json(['status'=>0, 'info'=>'fail']);
            }

        }


}
?>
