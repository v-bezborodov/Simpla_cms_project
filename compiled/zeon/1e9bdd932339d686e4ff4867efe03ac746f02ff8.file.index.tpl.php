<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:03:59
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232365a7b236f450292-31597654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e9bdd932339d686e4ff4867efe03ac746f02ff8' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\index.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232365a7b236f450292-31597654',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?><!DOCTYPE html>
<html>
<head>
	<base href="<?php echo $_smarty_tpl->getVariable('config')->value->root_url;?>
/"/>
	<title> ПЕКАРСКИЙ ДВОР - мы просто доставляем всегда вкусную еду! </title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value);?>
" />
	<meta name="keywords"    content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value);?>
" />
	<?php if (isset($_smarty_tpl->getVariable('canonical',null,true,false)->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->getVariable('config')->value->root_url;?>
<?php echo $_smarty_tpl->getVariable('canonical')->value;?>
"/><?php }?>
	
        <!-- ======================================================================
                                    Mobile Specific Meta
        ======================================================================= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 
	 <link rel="stylesheet" href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/bootstrap.css" /> 
	<link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/css/style_simpla.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/faviconPD.png" rel="icon"          type="image/x-icon"/>
	<link href="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/faviconPD.png" rel="shortcut icon" type="image/x-icon"/> 
	<script src="js/jquery/jquery.js"  type="text/javascript"></script>
	
	
	<?php if ($_SESSION['admin']=='admin'){?>
	<script src ="js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" /> 
	<?php }?>
	
	<script type="text/javascript" src="js/ctrlnavigate.js"></script>           
	
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery-ui.min.js"></script>
	<script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/ajax_cart.js"></script>
	
	<script src="js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="js/baloon/css/baloon.css" rel="stylesheet" type="text/css" /> 
	
	
	<script src="js/autocomplete/jquery.autocomplete-min.js" type="text/javascript"></script>
	<style>
		.autocomplete-suggestions{
		background-color: #ffffff; width: 300px !important; overflow: auto;
		border: 1px solid #e0e0e0;
		padding: 5px;
		}
		.autocomplete-suggestions .autocomplete-suggestion{cursor: default;}
		.autocomplete-suggestions .selected { background:#F0F0F0; }
		.autocomplete-suggestions div { padding:2px 5px; white-space:nowrap; }
		.autocomplete-suggestions strong { font-weight:normal; color:#3399FF; }
	</style>
 
	<script>
	$(function() {
		//  Автозаполнитель поиска
		$(".input_search, .input_search2").autocomplete({
			serviceUrl:'ajax/search_products.php',
			minChars:1,
			noCache: false, 
			onSelect:
				function(suggestion){
					 $(".input_search").closest('form').submit();
				},
			formatResult:
				function(suggestion, currentValue){
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
	  				return (suggestion.data.image?"<img align=absmiddle src='"+suggestion.data.image+"'> ":'') + suggestion.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
				}	
		});
	});
	</script>
	
 	
    <script>
	var t;
    function up() {
      var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
      if(top > 0) {
        window.scrollBy(0,-100);
        t = setTimeout('up()',20);
      } else clearTimeout(t);
      return false;
    }
 	</script>
 	
			
</head>
<body>
        <div class="header">
            <div class="container">
                <div class="header-middle-info">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="./">
                                <img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/logoPD_95x77.png"  title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->site_name);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->site_name);?>
" />
                            </a>
                        </div>
						 
                    </div>
                    <div class="col-md-8">
                        <ul class="header-middle-account">
			<?php if ($_smarty_tpl->getVariable('user')->value){?>
				<li>
					<a href="user"><i class="icon-330" ></i> <?php echo $_smarty_tpl->getVariable('user')->value->name;?>
</a><?php if ($_smarty_tpl->getVariable('group')->value->discount>0){?>,
					ваша скидка &mdash; <?php echo $_smarty_tpl->getVariable('group')->value->discount;?>
%<?php }?>
				</li>
				<li><a id="logout" href="user/logout"><i class="icon-351"></i> выйти</a></li>
			<?php }else{ ?>
			<?php }?>
			<?php if (count($_smarty_tpl->getVariable('currencies')->value)>1){?>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currencies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
					<?php if ($_smarty_tpl->getVariable('c')->value->enabled){?> 
					<li class="<?php if ($_smarty_tpl->getVariable('c')->value->id==$_smarty_tpl->getVariable('currency')->value->id){?>selected<?php }?>"><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('currency_id'=>$_smarty_tpl->getVariable('c')->value->id),$_smarty_tpl);?>
'><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('c')->value->code);?>
</a></li>
					<?php }?>
					<?php }} ?>
			<?php }?>
				<div class="header-top-info">
					<div class="contact-info"><li> Звоните: <br></li>
						<span class="phone"><li><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/contact-sprite.png"/> 067 481 54 64 </li></span>
						<span class="phone"><li><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/contact-sprite.png"/> 098 687 92 29 </li></span>
						<span class="iconmsg"><li><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/logo_viber.png"/> + <img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/logo_telegram.png"/></li></span>
                    </div>   
					<div class="login">		
						<li><a id="login" href="user/login"><i class="icon-351"></i> Вход</a></li>
                    </div>
					
                        </ul>
                    </div>
                    <div class="clear"></div>
					
                </div>
				
                <div class="menu">
                    <div class="search-cart">
                        <form class="search"  action="products">
                            
                        </form>
                        <div class="cart-all" id="cart_inf">
		<!-- Корзина -->
		<div id="cart_informer">
			<?php $_template = new Smarty_Internal_Template('cart_informer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div>
		<!-- Корзина (The End)-->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="repsonsive-menu"><i class="icon-406" title="406"></i>Открыть товары</div>
			<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?><?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
			<?php if ($_smarty_tpl->getVariable('categories')->value){?>
			<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable(0, null, null);?>
			<ul>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
				<?php if ($_smarty_tpl->getVariable('c')->value->visible){?>
					<li  class="<?php if ($_smarty_tpl->getVariable('c')->value->subcategories){?>menu-item-has-children<?php }?> <?php if ($_smarty_tpl->getVariable('category')->value->id==$_smarty_tpl->getVariable('c')->value->id){?>active<?php }?>">
						<a href="catalog/<?php echo $_smarty_tpl->getVariable('c')->value->url;?>
" data-category="<?php echo $_smarty_tpl->getVariable('c')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('c')->value->name);?>
</a>
						<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->getVariable('c')->value->subcategories,'level'=>$_smarty_tpl->getVariable('level')->value+1));?>

					</li>
				<?php }?>
			<?php }} ?>
			</ul>
			<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

			<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->getVariable('categories')->value));?>
                    
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- ======================================================================
                                        END HEADER
        ======================================================================= -->  

        <!-- ======================================================================
                                        START CONTENT
        ======================================================================= -->
        <div class="content">
<?php if ($_smarty_tpl->getVariable('module')->value=='MainView'||$_smarty_tpl->getVariable('module')->value=='ProductView'){?>
<?php echo $_smarty_tpl->getVariable('content')->value;?>

<?php }elseif($_smarty_tpl->getVariable('module')->value=='BlogView'||$_smarty_tpl->getVariable('module')->value=='PostView'){?>
<div class="container">
                 <div class="row">
                    <div class="col-md-8">
<?php echo $_smarty_tpl->getVariable('content')->value;?>

                    </div>
                    <div class="col-md-4">
<?php $_template = new Smarty_Internal_Template('sidebar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                    
                    </div>
                    </div> 
 </div>                                                          
<?php }else{ ?>
            <div class="container">
					<?php echo $_smarty_tpl->getVariable('content')->value;?>

            </div>
<?php }?>
        </div>

        <!-- ======================================================================
                                        END CONTENT
        ======================================================================= -->

        <!-- ======================================================================
                                        START FOOTER
        ======================================================================= -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-xs-6">
                        <ul class="socials">
	<!-- <li><a href="http://vk.com/club69070087"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/socials/googleplus.png" alt="VK"/>VK</a></li> -->
                            <li><a href="http://www.facebook.com/pekarskydvordostavka/"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/socials/facebook.png" alt="facebook"/>Facebook</a></li>
                 <!-- <li><a href="https://twitter.com/@info20533646"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/socials/twitter.png" alt="twitter"/>Twitter</a></li> -->
                            <li><a href="https://www.instagram.com/pekarskydvor/"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/socials/instagram.png" alt="instagram"/>Instagram</a></li>
		<li><a href="https://t.me/pekarskydvor"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/socials/telegram.png" alt="Telegram"/>Telegram</a></li>
                            <li><a href="https://www.youtube.com/channel/UCRc9gjp7Nd6QepDUCBps-ig?view_as=subscriber"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/socials/youtube.png" alt="YouTube"/>YouTube</a></li> 
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <ul>
                            
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <ul>
			<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
				<?php if ($_smarty_tpl->getVariable('p')->value->menu_id==2){?>
				<li <?php if ($_smarty_tpl->getVariable('page')->value&&$_smarty_tpl->getVariable('page')->value->id==$_smarty_tpl->getVariable('p')->value->id){?>class="selected"<?php }?>>
					<a data-page="<?php echo $_smarty_tpl->getVariable('p')->value->id;?>
" href="<?php echo $_smarty_tpl->getVariable('p')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value->name);?>
</a>
				</li>
				<?php }?>
			<?php }} ?>
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <ul class="menu-item">
			<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
				<?php if ($_smarty_tpl->getVariable('p')->value->menu_id==1){?>
				<li <?php if ($_smarty_tpl->getVariable('page')->value&&$_smarty_tpl->getVariable('page')->value->id==$_smarty_tpl->getVariable('p')->value->id){?>class="selected"<?php }?>>
					<a data-page="<?php echo $_smarty_tpl->getVariable('p')->value->id;?>
" href="<?php echo $_smarty_tpl->getVariable('p')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value->name);?>
</a>
				</li>
				<?php }?>
			<?php }} ?>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="subscription">
                            <div class="subscription-title">Подписаться на новости</div>
                            <form class="subscription" id="newsletter" method="post">
                                <input type="text" name="newsletter-name" placeholder="Имя" class="subscription-line">
                                <input type="text" name="newsletter-email" placeholder="E-mail" class="subscription-line">
                                <input type="submit" value="Отправить" class="button-5">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="mini-footer">
                    <div class="row">
                        <div class="col-md-6">
                            Сайт создан силами<a href="http://webup.biz.ua/">WebUp</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right">
                                <img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/elements/payment.png" alt="payment systems" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================================================================
                                        END FOOTER
        ======================================================================= -->

        <!-- ======================================================================
                                        START SCRIPTS
        ======================================================================= -->
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/modernizr.custom.63321.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/bootstrap.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/placeholder.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/jquery.swipebox.min.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/farbtastic/farbtastic.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/options.js" type="text/javascript"></script>
        <script src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/js/plugins.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- ======================================================================
                                        END SCRIPTS
        ======================================================================= -->
<a href="#" onclick="return up()">
<div class="w2b-StoTop">
	<div class="sTop_img">
		<img src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/up.png">
		<br>Вверх
	</div>
	
</div>	
</a>
	
	<!-- Start SiteHeart code -->
		<script>
		(function(){
		var widget_id = 833191;
		_shcp =[{widget_id : widget_id}];
		var lang =(navigator.language || navigator.systemLanguage 
		|| navigator.userLanguage ||"en")
		.substr(0,2).toLowerCase();
		var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
		var hcc = document.createElement("script");
		hcc.type ="text/javascript";
		hcc.async =true;
		hcc.src =("https:"== document.location.protocol ?"https":"http")
		+"://"+ url;
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hcc, s.nextSibling);
		})();
		</script>
	<!-- End SiteHeart code -->
   <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-25828490-5', 'auto');
       ga('send', 'pageview');
    </script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45413526 = new Ya.Metrika({
                    id:45413526,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45413526" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	
</body>
</html>