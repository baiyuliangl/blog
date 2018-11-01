<?php
namespace app\admin\controller;

use think\Request;
use think\Controller;
use think\Config;
use think\Image;
class Upload extends Controller
{
	public function UploadArt(Request $request){
		$validate = Config::get('image.VALIDATE');
		$path = Config::get('image.ARTPATH');
		$file = $request->file('file');
		$res = $file->validate($validate)->move($path);
		if($res){
			$fileName = $res->getPathName();
			$image = Image::open($fileName);
			$image->thumb(250,150,Image::THUMB_FIXED)->save($fileName);
			$data = ['status'=>'success','info'=>$fileName];
		}else{
			$data = ['status'=>'error','info'=>$file->getError()];
		}
		return json($data);

	}
}