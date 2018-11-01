<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\View;
class Base extends Controller
{
    public function _initialize(){
    	//查询分类
    	$cat = Db::name('category')->select();
    	//查询最新的文章
    	$new_article = Db::name('article')->field(['id','title'])->order('created_at DESC')->limit(10)->select()->toArray();
    	//获取热门标签
    	$hot_tag = Db::name('article')->order('views DESC')->distinct(true)->limit(20)->column('tag');
    	View::share('cat',$cat);
    	View::share('new_article',$new_article);
    	View::share('hot_tag',$hot_tag);
    }
}
;