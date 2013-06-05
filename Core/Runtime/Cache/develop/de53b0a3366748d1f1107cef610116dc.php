<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<!--引入后前台公共public的模版文件 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?> - <?php echo ($seo["subtitle"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /> 
<meta name="description" content="<?php echo ($seo["description"]); ?>" /> 
<link rel="shortcut icon" href="__PUBLIC__/images/fav.ico" type="image/x-icon">
<style>__SITE_THEME_CSS__</style>
<!--[if gte IE 7]><!-->
    <link href="__PUBLIC__/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__PUBLIC__/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__';</script>
<script src="__PUBLIC__/js/jquery.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/common.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/IK.js" type="text/javascript" data-cfg-autoload="false"></script>
<script src="__PUBLIC__/js/all.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="__PUBLIC__/js/html5.js"></script>
<![endif]-->
<script src="__PUBLIC__/js/dialog/jquery.artDialog.min5.js" type="text/javascript"></script> 
__EXTENDS_JS__
<!--<script src="http://l.tbcdn.cn/apps/top/x/sdk.js?appkey=21509482"></script>-->

</head>

<body>
<!--引入后前台公共public的模版文件 -->
<!--头部开始-->
<header>
<?php if($app_name == 'public' && empty($visitor) && $module_name == 'index'): ?><div class="hd-wrap">
            <div class="hd">
                <div class="logo">
                    <h1><a href="__SITE_URL__" title="爱客开源">爱客开源</a></h1>
                </div>
                <div class="top-nav-items">
                <ul>
                <li><a href="__SITE_URL__" class="lnk-home" target="_blank">爱客首页</a></li>
                <li><a href="<?php echo U('group/index/index');?>" class="lnk-group" target="_blank">爱客小组</a></li>
                <li><a href="<?php echo U('article/index/index');?>" class="lnk-article" target="_blank">爱客阅读</a></li>
                <li><a href="<?php echo U('location/index/index');?>" class="lnk-location" target="_blank">爱客同城</a></li>
                <li><a href="<?php echo U('site/index/index');?>" class="lnk-site" target="_blank">爱客小站</a></li>
                <li><a href="<?php echo U('mall/index/index');?>" class="lnk-mall" target="_blank">爱客商城</a></li>
                </ul>
                </div>
            </div>
</div>
<?php else: ?>
<div class="top_nav">
  <div class="top_bd">
    
    <div class="top_info">
        <?php if(empty($visitor)): ?><a href="<?php echo U('public/user/login');?>">登录</a> | <a href="<?php echo U('public/user/register');?>">注册</a> | <a href="<?php echo U('public/oauth/index', array('mod'=>'qq'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="QQ登录" src="__PUBLIC__/images/connect_qq.png"> 登录</a> | <a href="<?php echo U('public/oauth/index', array('mod'=>'sina'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="新浪微博" src="__PUBLIC__/images/connect_sina_weibo.png"> 登录</a>    
        <?php else: ?>
        <a id="newmsg" href="<?php echo U('public/message/ikmail',array('d'=>'inbox'));?>">新消息(<?php echo ($count_new_msg); ?>)</a> | 
        <a href="<?php echo U('space/index/index', array('id'=>$visitor['doname']));?>">
        	<?php echo ($visitor["username"]); ?>
        </a> | 
        <a href="<?php echo U('public/user/setbase');?>">设置</a> | 
        <a href="<?php echo U('public/user/logout');?>">退出</a><?php endif; ?>
    </div>


    <div class="top_items">
        <ul>
             <?php if(is_array($topNav)): foreach($topNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" title="<?php echo ($item[name]); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
             <li><a href="<?php echo U('develop/index/index');?>">应用商店</a></li>
             <li><a href="<?php echo U('public/help/download');?>" style="color:#fff">IKPHP源码下载</a></li>                                                      
        </ul>
    </div>
  	<div class="cl"></div>
    
  </div>
  
</div><?php endif; ?>
<!--APP NAV-->

</header>

<?php if($app_name == 'public' && !empty($visitor)): ?><div id="header">
    
	<div class="site_nav">
        <div class="<?php echo ($logo[style]); ?>">
            <a href="<?php echo ($logo[url]); ?>"><?php echo ($logo[name]); ?></a>
        </div>
		<div class="appnav">
			    <ul id="nav_bar">
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" class="a_<?php echo ($key); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
			    </ul>
		   <form onsubmit="return searchForm(this);" method="post" action="<?php echo U('public/search/index');?>">
                <input type="hidden" value="all" name="type">
                <div id="search_bar">
                    <div class="inp"><input type="text" placeholder="小组、话题、日志、成员、小站" value="" class="key" name="q"></div>
                    <div class="inp-btn"><input type="submit" class="search-button" value="搜索"></div>
                </div>
		    </form>
		</div>
        <div class="cl"></div>
	</div>
        
</div><?php endif; ?>
<!--header-->
<div id="header">
    
	<div class="site_nav">
        <div class="<?php echo ($logo[style]); ?>">
            <a href="<?php echo ($logo[url]); ?>"><?php echo ($logo[name]); ?></a>
        </div>
		<div class="appnav">
			    <ul id="nav_bar">
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" class="a_<?php echo ($key); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
			    </ul>
		   <form onsubmit="return searchForm(this);" method="post" action="<?php echo U('public/search/index');?>">
                <input type="hidden" value="all" name="type">
                <div id="search_bar">
                    <div class="inp"><input type="text" placeholder="小组、话题、日志、成员、小站" value="" class="key" name="q"></div>
                    <div class="inp-btn"><input type="submit" class="search-button" value="搜索"></div>
                </div>
		    </form>
		</div>
        <div class="cl"></div>
	</div>
        
</div>

<div class="midder">
<div class="mc">
<h1>
<?php echo ($seo["title"]); ?>
</h1>

<div class="nav-step">
              <span class="pl">1. 填写应用信息</span>
              <span class="pl">&gt;</span>
              <span >2. 上传应用图片</span>
              <span class="pl">&gt;</span>              
              <span class="pl">3. 提交应用</span>
</div>
            
<form method="POST" action="<?php echo U('develop/index/add_upload',array('id'=>$strApp[appid]));?>" enctype="multipart/form-data" id="ikform">
<table width="100%" cellpadding="0" cellspacing="0" class="table_1">
    <tr>
        <th valign="top" style="padding-top:10px">Logo：</th>
        <td><input name="applogo_file" type="file" id="applogo" onChange="uploadfile(this,'applogo');"><span class="ntips">支持jpg,jpge,png格式，大小:64x64,100x100</span>
        <div class="input-content">
            <ul class="image-list">
           		<?php if($strApp[applogo]): ?><li>
                <img width="100" height="100" src="<?php echo attach($strApp[applogo]);?>">
                </li><?php endif; ?>
            </ul>
        </div>        
        </td>
    </tr>
    <tr>
        <th valign="top" style="padding-top:10px">截图：</th>
        <td><input name="screenshot_file" type="file" id="screenshot" onChange="uploadfile(this,'screenshot');"><span class="ntips">支持jpg,jpge,png格式，大小限制<?php echo intval(C('ik_attr_allow_size')/1024); ?>M以内，最多上传5张图片</span>
        <div class="input-content">
            <ul class="image-list">
				<?php if(is_array($arrPhoto)): foreach($arrPhoto as $key=>$item): ?><li>
                <img width="100" height="100" src="<?php echo ($item[simg]); ?>">
                <a class="name" href="javascript:void(0)" onclick="removeAttachId(this)" delurl="<?php echo U('develop/index/ajax_del_file', array('id'=>$item[id]));?>">删除</a>
                </li><?php endforeach; endif; ?>
            </ul>
        </div> 
        </td>
    </tr>    
    <tr>
        <th valign="top" style="padding-top:10px">安装包：</th>
        <td><input name="appfile_file" type="file" id="appfile"  onChange="uploadfile(this,'appfile');"><span class="ntips">支持zip,rar格式，大小:5M以内</span>
        <div class="input-content">
        <ul class="file-list">
        	<?php if($strApp[appfile]): ?><li>
            <i class="ico-rar-small"></i>
            <a class="ico-close right" href="javascript:void(0)" onclick="removeAttachId(this)"></a>
            </li><?php endif; ?>
        </ul>
        </div>
        </td>
    </tr>                 	
    <tr>
    	<th>&nbsp;</th><td>
        <input type="hidden" name="userid" value="<?php echo ($userid); ?>"/>
        <input class="submit" type="submit" value="好啦，发布"> <a href="<?php echo U('develop/index/editapp',array('id'=>$strApp[appid]));?>">返回到上一步</a>
        </td>
    </tr>
</table>
<script type="text/javascript" src="__PUBLIC__/js/lib/ajaxfileupload.js"></script>
<script language="javascript">
function uploadfile(o,id){
	var ajaxurl = "<?php echo U('develop/index/ajax_upload',array('userid'=>$userid,'appid'=>$strApp[appid]));?>";
	var obj = $(o).parent().find('.input-content');
	var _self=$(o);
	if(id=='screenshot' && obj.find('li').length>5){
		error('只能上传6张截图');
		return;
	}
	ajaxUpload(_self,obj,ajaxurl);
}
function ajaxUpload(_self,obj,ajaxurl){
	var list = obj.find('.image-list');
	var fileid = _self.attr('id'); 
	if(list.length==0){
		list = obj.find('.file-list');
	}
	if(list==0){ return;}
	$.ajaxFileUpload(
            {
                url : ajaxurl,
                fileElementId : fileid,
                dataType : 'json',
                allowType : 'jpg|png|gif|jpeg|zip|rar',
                begin : function(){
					var html = '<li id="loading"><img src="__PUBLIC__/images/loading.gif"></li>';
 					list.append(html);obj.fadeIn(100);
                },
                complete : function(){
					list.find('#loading').remove();
                },
                success : function(data, status){
					
                    if(data.r == 0){
                        error(data.html);
                    }else{
                        buildHtml(fileid,list,data);
                    }
                },
                error : function(data, status, e){
                    // console.log(e);
                }
            }
       ); 
}
function buildHtml(fileid,list,data){
	var id = fileid;
	if(id=='applogo'){
		var html = '<li><img width="100" height="100" src="'+data.photo_url+'"></li>';
		list.html(html);
		return;
	}
	if(id=='screenshot'){
		var html = '<li><img width="100" height="100" src="'+data.photo_url+'">'+
		'<a class="name" href="javascript:void(0)" onclick="removeAttachId(this)" delurl="'+data.delurl+'">删除</a></li>';
		list.append(html);
		return;		
	}
	if(id=='appfile'){
		var html = '<li><i class="ico-rar-small"></i><a class="ico-close right" href="javascript:void(0)" onclick="removeAttachId(this)"></a>'+data.savename+'<span>('+data.filesize+' KB)</span></li>';
		list.html(html);
		return;		
	}
}
function removeAttachId(obj){
	var delurl = $(obj).attr('delurl');
	if(delurl){
		$.post(delurl,{},function(data){
			if(data.r == 1){
				$(obj).parent().remove();
			}
		},'json');
	}else{
		$(obj).parent().fadeOut(100).remove();
	}
}
</script>
</form>



</div>
</div>

<!--引入后前台的模版文件 -->
<!--footer-->
<footer>
<div id="footer">
	<div class="f_content">
        <span class="fl gray-link" id="icp">
            &copy; 2012－2015 IKPHP.COM, all rights reserved <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备13018602号</a></span>
        </span>
        
        <span class="fr">
            <a href="<?php echo U('public/help/about');?>">关于爱客</a>
            · <a href="<?php echo U('public/help/contact');?>">联系我们</a>
            · <a href="<?php echo U('public/help/agreement');?>">用户条款</a>
            · <a href="<?php echo U('public/help/privacy');?>">隐私申明</a>
        </span>
        <div class="cl"></div>
        <p>Powered by <a class="softname" href="<?php echo (IKPHP_SITEURL); ?>"><?php echo (IKPHP_SITENAME); ?></a> <?php echo (IKPHP_VERSION); ?>  
        <font color="green">ThinkPHP版本<?php echo (THINK_VERSION); ?></font>  目前有 <?php echo ($count_online_user); ?> 人在线<br />
        <span style="font-size:0.83em;">{__RUNTIME__}          </span>

        <!--<script src="http://s6.cnzz.com/stat.php?id=5262498&web_id=5262498" language="JavaScript"></script>-->
       
        </p>   
    </div>
</div>
</footer>

</body>
</html>