<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/dotakeng/statics/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/dotakeng/statics/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/dotakeng/statics/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/dotakeng/statics/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/dotakeng/statics/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/dotakeng/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/dotakeng/statics/js/jquery.js"></script>
    <script src="/dotakeng/statics/js/wind.js"></script>
    <script src="/dotakeng/statics/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<body class="J_scroll_fixed">
<div class="wrap jj">
	<ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">QQ互联登录设置</a></li>
        <li><a href="#B" data-toggle="tab">新浪微博登录设置</a></li>
  </ul>
  
  <div class="common-form">
    <form method="post" class="J_ajaxForm" action="<?php echo U('oauthadmin/setting_post');?>">
	    <div class="tabbable">
	        <div class="tab-content">
	          <div class="tab-pane active" id="A">
	          	<table width="100%" cellpadding="2" cellspacing="2" >
			        <tbody>
			        	<tr>
			        		<td width="120">APPkey</td>
			        		<td><input type="text" class="input mr5" name="qq_key" value="<?php echo (C("THINK_SDK_QQ.APP_KEY")); ?>" /></td>
			        	</tr>
			        	<tr>
			        		<td>APPsecret</td>
			        		<td><input type="text" class="input mr5" name="qq_sec" value="<?php echo (C("THINK_SDK_QQ.APP_SECRET")); ?>" /></td>
			        	</tr>
			        	<tr>
			        		<td colspan="2"><a href="http://connect.qq.com/" target="_blank">点击此处</a>获取QQ互联APPKey及APPsecret</td>
			        	</tr>
					</tbody>
			    </table>
	          </div>
	          <div class="tab-pane" id="B">
	          	<table width="100%">
		        <tbody>
		        	<tr>
		        		<td width="120">APPkey</td>
		        		<td><input type="text" class="input mr5" name="sina_key" value="<?php echo (C("THINK_SDK_SINA.APP_KEY")); ?>" /></td>
		        	</tr>
		        	<tr>
		        		<td>APPsecret</td>
		        		<td><input type="text" class="input mr5" name="sina_sec" value="<?php echo (C("THINK_SDK_SINA.APP_SECRET")); ?>" /></td>
		        	</tr>
		        	<tr>
		        		<td>授权回调页：</td>
		        		<td><?php echo ($callback_uri_root); ?>sina</td>
		        	</tr>
		        	<tr>
		        		<td>取消授权回调页：</td>
		        		<td><?php echo sp_get_host();?></td>
		        	</tr>
		        	<tr>
		        		<td colspan="2"><a href="http://open.weibo.com/" target="_blank">点击此处</a>获取新浪微博APPKey及APPsecret</td>
		        	</tr>
				</tbody>
		    </table>
	          </div>
	        </div>
	   </div>
      <div class="form-actions">
            <button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">确定</button>
      </div>
    </form>
  </div>
</div>
<script src="/dotakeng/statics/js/common.js"></script>

</body>
</html>