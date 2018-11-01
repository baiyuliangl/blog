<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\wamp64\www\blog_all\public/../application/admin\view\category\index.html";i:1538994149;s:64:"D:\wamp64\www\blog_all\application\admin\view\layout\layout.html";i:1540972207;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<?php if(isset($one)): ?>
			<form class="Huiform" method="post" action="<?php echo url('/admin/cat/'.$one['0']['id']); ?>">
			<input type="hidden" name="_method" value="PUT">
		<?php else: ?>
			<form class="Huiform" method="post" action="<?php echo url('/admin/cat'); ?>">
		<?php endif; ?>
			<?php echo token(); ?>
			<input type="text" name="cat_name" placeholder="分类名称" value="<?php echo !empty($one)?$one['0']['cat_name']:''; ?>" class="input-text" style="width:120px">
			<input type="text" name="cat_desc" placeholder="分类描述" value="<?php echo !empty($one)?$one['0']['cat_desc']:''; ?>" class="input-text" style="width:240px">
			<!-- <span class="btn-upload form-group"> -->
			<!-- <input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly style="width:200px"> -->
			<!-- <a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 上传logo</a> -->
			<!-- <input type="file" multiple name="file-2" class="input-file"> -->
			<!-- </span> <span class="select-box" style="width:150px"> -->
			<!-- <select class="select" name="brandclass" size="1">
				<option value="1" selected>国内品牌</option>
				<option value="0">国外品牌</option>
			</select> -->
			<!-- </span><button type="button" class="btn btn-success" id="" name="" onClick="picture_colume_add(this);"><i class="Hui-iconfont">&#xe600;</i> 添加</button> -->
			<button name="button" value="添加分类" class="btn btn-success"><?php echo !empty($one)?'修改分类':'添加分类	'; ?></button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="70">ID</th>
					<th width="120">分类名称</th>
					<th>具体描述</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo $i; ?></td>
					<td class="text-l"><?php echo $value['cat_name']; ?></td>
					<td class="text-l"><?php echo $value['cat_desc']; ?></td>
					<td class="f-14 product-brand-manage">
						<a style="text-decoration:none" href="<?php echo url('/admin/cat/'.$value['id'].'/edit'); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
					 	<a style="text-decoration:none" class="ml-5" onClick="delCat(<?php echo $value['id']; ?>)" href="<?php echo url('/admin/cat/del/'.$value['id']); ?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

</script>
</body>
</html>

<script>
	function delCat(id){
		layer.confirm('你确定要删除吗',function(){
			$.ajax({
				type : 'DELETE',
				dateType : 'json',
				url : "../admin/cat/"+id,
				success : function(data){
					if(data.status=='success'){
				
						layer.msg(data.info,{icon:1,time:1000},function(){
							location.href="<?php echo url('/admin/cat'); ?>";	
						});
					}else{
						layer.msg(data.info,{icon:2,time:1000},function(){
							location.href="<?php echo url('/admin/cat'); ?>"; 	
						});
					
					}
				}
			});
		});
	}
</script>