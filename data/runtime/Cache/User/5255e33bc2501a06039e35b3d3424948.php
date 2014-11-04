<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<meta name="author" content="ThinkCMF">
	<?php $tmpl = '/dotakeng/tpl/simplebootx/'; ?>
<?php $portal_index_lastnews=2; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $default_home_slides=array( array( "slide_name"=>"ThinkCMF发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX1.1发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX1.1发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/dotakeng/tpl/simplebootx/Public/images/favicon.ico" mce_href="/dotakeng/tpl/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/dotakeng/tpl/simplebootx/Public/images/favicon.ico" mce_href="/dotakeng/tpl/simplebootx/Public/images/favicon.ico" type="image/x-icon">
    <link href="/dotakeng/tpl/simplebootx/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">
    <link href="/dotakeng/tpl/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/dotakeng/tpl/simplebootx/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/dotakeng/tpl/simplebootx/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/dotakeng/tpl/simplebootx/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
	</style>
</head>
<body class="body-white" id="top">
	<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/dotakeng/"><img src="/dotakeng/tpl/simplebootx/Public/images/logo.jpg" style="width: 160px;height: 50px;"/></a>
       <div class="nav-collapse collapse" id="main-menu">
       	<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		
		<ul class="nav pull-right" id="main-menu-left">
			<li class="dropdown">
			<?php if(sp_is_user_login()): ?><a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <?php if(empty($user['avatar'])): ?><img src="/dotakeng/tpl/simplebootx//Public/images/headicon.png" class="headicon"/>
	            <?php else: ?>
	            <img src="<?php echo sp_get_user_avatar_url($user['avatar']);?>" class="headicon"/><?php endif; ?>
	            <?php echo ($user["user_nicename"]); ?><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo u('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
	        <?php else: ?>
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/dotakeng/tpl/simplebootx//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <!--<li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>-->
	               <!--<li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>-->
	               <li><a href="<?php echo u('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul><?php endif; ?>
          	</li>
		</ul>
       </div>
     </div>
   </div>
 </div>

		<div class="container tc-main">
                <div class="row">
                    <div class="span3">
	                    <div class="list-group">
	<a class="list-group-item" href="<?php echo u('user/profile/edit');?>"><i class="fa fa-list-alt"></i> 修改资料</a>
	<a class="list-group-item" href="<?php echo u('user/profile/password');?>"><i class="fa fa-lock"></i> 修改密码</a>
	<a class="list-group-item" href="<?php echo u('user/profile/avatar');?>"><i class="fa fa-user"></i> 编辑头像</a>
	<!--<a class="list-group-item" href="<?php echo u('user/profile/bang');?>"><i class="fa fa-exchange"></i> 绑定账号</a>-->
	<a class="list-group-item" href="<?php echo u('user/favorite/index');?>"><i class="fa fa-star-o"></i> 我的收藏</a>
	<a class="list-group-item" href="<?php echo u('comment/comment/index');?>"><i class="fa fa-comments-o"></i> 我的评论</a>
</div>
                    </div>
                    <div class="span9">
                           <div class="tabs">
                               <ul class="nav nav-tabs">
                                   <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-list-alt"></i> 修改资料</a></li>
                               </ul>
                               <div class="tab-content">
                                   <div class="tab-pane active" id="one">
                                   		<form class="form-horizontal J_ajaxForm" action="<?php echo u('profile/edit_post');?>" method="post">
                                   			<div class="control-group">
                                   				<label class="control-label" for="input-user_nicename">昵称</label>
                                   				<div class="controls">
                                   					<input type="text" id="input-user_nicename" placeholder="昵称" name="user_nicename" value="<?php echo ($user_nicename); ?>">
                                   				</div>
                                   			</div>
                                   			<div class="control-group">
                                   				<label class="control-label" for="input-sex">性别</label>
                                   				<div class="controls">
                                   					<?php $sexs=array("0"=>"保密","1"=>"男","2"=>"女","3"=>"秀吉"); ?>
                                   					<select id="input-sex" name="sex">
                                   						<?php if(is_array($sexs)): foreach($sexs as $key=>$vo): $sexselected=$key==$sex?"selected":""; ?>
                                   							<option value="<?php echo ($key); ?>" <?php echo ($sexselected); ?>><?php echo ($vo); ?></option><?php endforeach; endif; ?>
                                   					</select>
                                   				</div>
                                   			</div>
                                   			<div class="control-group">
                                   				<label class="control-label" for="input-birthday">生日</label>
                                   				<div class="controls">
                                   					<input class="J_date" type="text" id="input-birthday" placeholder="1992-12-02" name="birthday" value="<?php echo ($birthday); ?>">
                                   				</div>
                                   			</div>
                                   			<!--<div class="control-group">-->
                                   				<!--<label class="control-label" for="input-user_url">个人网址</label>-->
                                   				<!--<div class="controls">-->
                                   					<!--<input type="text" id="input-user_url" placeholder="http://thinkcmf.com" name="user_url" value="<?php echo ($user_url); ?>">-->
                                   				<!--</div>-->
                                   			<!--</div>-->
                                   			<div class="control-group">
                                   				<label class="control-label" for="input-signature">个性签名</label>
                                   				<div class="controls">
                                   					<textarea id="input-signature" placeholder="个性签名" name="signature"><?php echo ($signature); ?></textarea>
                                   				</div>
                                   			</div>
                                   			<div class="control-group">
                                   				<div class="controls">
                                   					<button type="submit" class="btn J_ajax_submit_btn">保存</button>
                                   				</div>
                                   			</div>
                                   		</form>
                                   </div>
                               </div>							
                           </div>
                    </div>
                </div>

		<br><br><br>
<!-- Footer
      ================================================== -->
<hr>

<div id="footer" style="font-size: 6px;">
    <div class="links">
        <?php $links=sp_getlinks(); ?>
        <?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
    </div>
    <p>
        Made by <a href="http://www.thinkcmf.com">ThinkCMF</a>.
        Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache
        License v2.0</a>.<br/>
        Based on <a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>. Icons from <a
            href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>.<br/>
    Author: ilia.
    tel:13206666364</p>
</div>
<div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>
<?php echo ($site_tongji); ?>


	</div>
	<!-- /container -->

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
    <script src="/dotakeng/tpl/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/dotakeng/statics/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


</body>
</html>