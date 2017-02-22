<?php
/*
*
* Date 2016-12-09  
*
*
*  Author gugu
*
*/

namespace Home\Controller;
use Think\Controller;

class TopPicController extends Controller{
    public function index(){
        $this-> display();
    }
    public function index_1(){
        $this -> display('index_1');
    }
}