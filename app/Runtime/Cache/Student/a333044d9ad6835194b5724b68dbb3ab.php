<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html,charset=utf-8">
	<title></title>
		<!--[if IE]>
<style type="text/css">
	  #top1{
		min-width: 800px;
	}
</style>
	<![endif]--> 
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/righttop.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
	$(function() { 
		if($.browser.msie){
			$("body").css({"min-width":"680px"});
		}});
	var url='<?php echo U("Student/Index/msgnum",'','');?>';
	function xx(){
	$.get(url,{},function(data){
		$('.cc').html(data);
	});}
	setInterval('xx()',5000);
</script>
</head>
<body bgcolor="white">
<div id="top1">
	<div id="top2">
		<ul>
			<li class="top21">&nbsp;<a href="<?php echo U(GROUP_NAME.'/Select/index');?>" target="rightFrame"><span>功能</span></a></li>
			<li class="top22">&nbsp;<a href="<?php echo U(GROUP_NAME.'/Select/showmsg');?>" target="rightFrame"><span>信息</span><span class="cc"><?php echo ($num); ?></span></a></li>
			<li class="top23">&nbsp;<a href="<?php echo U(GROUP_NAME.'/Index/msgnum');?>" target="_top"><span>刷新</span></a></li>
		</ul>
	</div>
	<div id="top4">
	<div id="top3">
		<img src="__PUBLIC__/images/img14.png">
		<span class="top31">Welcome</span><span class="top32"><?php echo ($_SESSION['snum']); ?></span><span class="top33"><a href="#"><img border="0" src="__PUBLIC__/images/righttop3.png"></a></span>
	</div>
	<a class="exit" href="<?php echo U('Home/Login/logout');?>" target="_top"><img border="0" src="__PUBLIC__/images/exit.png"></a></div>
</div>
</body>
</html>