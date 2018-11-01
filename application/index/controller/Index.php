<?php
namespace app\index\controller;

use app\index\controller\Base;
use app\index\model\Article;
class Index extends Base
{
    public function index()
    {
    	$Article = new Article();
    	$articles = $Article->getAllArticle();
    	$this->assign('articles',$articles);
    	$this->assign('cur','cur');
        return $this->fetch();
    }

}
