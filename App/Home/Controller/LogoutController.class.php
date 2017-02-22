<?php


/**
*
* Date 2016-12-09  用户登出
*
*
*  Author gugu
*
*/
 * 用户退出
 */
 namespace Home\Controller;
 use Think\Controller;
 
 class LogoutController extends Controller{
     public function index(){
        unset($_SESSION['user']);
        unset($_SESSION['userdetail']);
        $this->success('安全退出', __APP__);
     }
 }