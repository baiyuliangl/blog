<?php
namespace app\admin\Controller;
use think\Controller;

class System extends Base
{
	public function index(){
		return $this->fetch();
	}
}