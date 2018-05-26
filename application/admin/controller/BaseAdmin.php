<?php
namespace app\admin\controller;
use think\Controller;
class BaseAdmin extends Controller{
    public function __construct(){
      parent::__construct();
      $this->_admin = session('adminid');
      if(!$this->_admin){
        header('location: /admin/Login/login');
        exit;
      }

    }
}
