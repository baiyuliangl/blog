<?php
namespace app\index\controller;

use app\index\controller\Base;
use think\Db;
class Article extends Base
{
		public function list($cid){
			$cid = decrypt($cid);
			$article = Db::name('article')->where('cat_id',$cid)->field(['id','title','author','img_url','summary','tag','created_at','views'])->paginate(1);

			$cat_name = Db::name('category')->where('id',$cid)->value('cat_name');
			$this->assign('article',$article);
			$this->assign('cid',$cid);
			$this->assign('cat_name',$cat_name);
			return $this->fetch('list');
		}

		public function detail($aid){
			$id = decrypt($aid);
			$article = Db::name('article')->find($id);

			$scan_num = Db::name('article')->where('id',$id)->setInc('views',5);
			$this->assign('article',$article);
			return $this->fetch('detail');
		}
}