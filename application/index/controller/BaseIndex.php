<?php
namespace app\index\controller;
use think\Controller;
class BaseIndex extends Controller{
    public function __construct(){
      parent::__construct();
      $this->_index = session('memberid');
      if(!$this->_index){
        header('location: /index/Login/login');
        exit;
      }

    }
}
