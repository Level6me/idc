<?php
$cjafile=SWAP_PLUGINS.'mbsysjk'.SWAP_DIR_END.'mbsysjk.php';
$template_config=array(
		array(
			'name'=>'注意',
			'type'=>'txt',
			'description'=>'
			有部分人因为环境问题保存配置会把 <code>"</code> 转换成  <code>\"</code>,  
			<code>\</code>转换成 <code>\\\</code> <br>
			因此会把 <code>\"</code> 替换成  <code>"</code> ,
			<code>\\\</code>替换成 <code>\</code> ,如果大家用到 请多写一个 <code>\</code> '
		),
		array(
			'name'=>'是否启用顶端提示',
			'type'=>'text',
			'description'=>'位于主页最上方，右边黄色按钮，请填<code>是</code>或<code>否</code>'
		),
		array(
			'name'=>'顶端提示内容',
			'type'=>'text',
			'description'=>'仅在上述设置为<code>是</code>时有效'
		),
		array(
			'name'=>'邮箱',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'电话',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'QQ',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'联系地址1',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'联系地址2',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'联系地址3',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'联系地址4',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'网站简介',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'首页幻灯片地址1',
			'type'=>'text',
			'description'=>'推荐1920x500'
		),
		array(
			'name'=>'首页幻灯片地址2',
			'type'=>'text',
			'description'=>'推荐1920x500'
		),
		array(
			'name'=>'首页幻灯片地址3',
			'type'=>'text',
			'description'=>'推荐1920x500'
		),
		array(
			'name'=>'小logo地址',
			'type'=>'text',
			'description'=>'推荐103x19'
		),
		array(
			'name'=>'中部简介主',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'中部简介副',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'页脚网站域名',
			'type'=>'text',
			'description'=>''
		),
		array(
			'name'=>'产品介绍HTML',
			'type'=>'texts',
			'description'=>''
		),
		array(
			'name'=>'视频介绍HTML',
			'type'=>'texts',
			'description'=>''
		),
		array(
			'name'=>'优势介绍HTML',
			'type'=>'texts',
			'description'=>''
		),
        array(
			'name'=>'页脚服务HTML',
			'type'=>'texts',
			'description'=>''
		),
		array(
			'name'=>'页脚照片展示HTML',
			'type'=>'texts',
			'description'=>''
		),
		
	);

if(file_exists($cjafile)==true){
$template_config[]=array('name'=>'管理权限用户','type'=>'text','description'=>'哪些用户拥有进入管理权限 用逗号分开 例如root,admin');
$template_config[]=array('name'=>'管理独立密码','type'=>'text','description'=>'管理直接登陆的独立的密码');
}