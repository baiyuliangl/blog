<?php
namespace app\admin\controller;
use think\Controller;

class Pic extends Base
{
	public function index(){
		return $this->fetch();
	}

	public function create(){
		return $this->fetch('pic/Add');
	}
}