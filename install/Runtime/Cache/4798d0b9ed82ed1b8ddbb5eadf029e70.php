<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo L('page_title');?></title><link rel="stylesheet" type="text/css" href="__TMPL__public/style.css" /><script type="text/javascript" src="__TMPL__public/jquery.js"></script></head><body><!--header--><div class="header"><div class="head"><div class="logo"><a href="index.php"><img src="__TMPL__public/logo.gif" alt="<?php echo L('page_title');?>" /></a></div><div class="menu"><?php echo L('page_title'); echo ($IK_VERSION); ?></div></div></div><style>.main{
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #DFDFDF;
    border-radius: 11px 11px 11px 11px;
    color: #333333;
    font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
    margin: 2em auto;
    padding: 1em 2em;
    width: 700px;
}
p, li, dd, dt {
    font-size: 12px;
    line-height: 18px;
    padding-bottom: 2px;
}
.step {
    margin: 20px 0 15px;
}
.step, th {
    padding: 0;
    text-align: left;
}
.submit input, .button, .button-secondary {
    -moz-box-sizing: content-box;
    border: 1px solid #BBBBBB;
    border-radius: 15px 15px 15px 15px;
    color: #464646;
    cursor: pointer;
    font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
    font-size: 14px !important;
    line-height: 16px;
    padding: 6px 12px;
    text-decoration: none;
}
.button:hover, .button-secondary:hover, .submit input:hover {
    border-color: #666666;
    color: #000000;
}
.button, .submit input, .button-secondary {
    background:#F2F2F2;
}
.button:active, .submit input:active, .button-secondary:active {
    background: #EEEEEE;
}
</style><!--main--><div class="midder"><div class="main"><h2><?php echo L('wellcom_user_ikphp');?></h2><ol><li>数据库名</li><li>数据库用户用户名</li><li>数据库用户密码</li><li>数据库主机</li><li>表名前缀（若您希望在一个数据表中安装多个，请手动填写数据库信息）</li></ol><h2>感谢您使用<?php echo L('name');?>系统</h2><ol><li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于商业用途，而不必支付费用。如果采用<?php echo L('name');?>系统二次开发再发布，必须得到<?php echo L('name');?>开发团队的许可，否则我们将追究法律责任。   
            </li><li>您可以在协议规定的约束和限制范围内修改 <?php echo L('name');?> 源代码或界面风格以适应您的网站要求。   
            </li><li>您拥有使用本软件构建的网站中全部会员资料及相关信息等所有权，并独立承担与其内容的相关法律义务。   
            </li><li>获得商业授权之后，您可以依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自授权时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。            </li><li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。     
            </li><li><?php echo L('name');?>开发团队不对使用本软件构建的网站中的信息承担责任。 </li></ol><p>大多数的互联网主机服务提供商都向您提供了数据库的信息。若您不知道这些信息，您需要先询问好，再进行安装。若您已准备好 …</p><?php if($error): ?><p><strong><?php echo L('step_check_desc');?></strong></p><?php if(is_array($error)): $i = 0; $__LIST__ = $error;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="error_msg"><?php echo ($val); ?></div><?php endforeach; endif; else: echo "" ;endif; ?><p>请将不可写的目录设置为可写(777)权限。</p><p><a class="button" href="index.php"><?php echo L('setting_ok');?></a></p><?php else: ?><p class="step"><a class="button" href="install.php?m=index&a=next"><?php echo L('next');?></a></p><?php endif; ?></div></div><!--footer--><div class="footer">Powered by <a href="<?php echo (IKPHP_SITEURL); ?>" target="_blank"><?php echo (IKPHP_SITENAME); ?></a>&nbsp;版本 <?php echo (IKPHP_VERSION); ?> &copy; <?php echo (IKPHP_YEAR); ?></div></body></html>