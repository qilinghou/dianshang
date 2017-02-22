<?php

/*
	Date  : 2016-12-09    
	Author : gugu
*/
namespace Home\Controller;
use Think\Controller;
if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class LoveController extends Controller{

	public function index(){

		$this -> display();
	}



}