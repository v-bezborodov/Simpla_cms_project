<!DOCTYPE html>
{*
	Общий вид страницы
	Этот шаблон отвечает за общий вид страниц без центрального блока.
*}
<html>
<head>
	<base href="{$config->root_url}/"/>
	<title> ПЕКАРСКИЙ ДВОР - мы просто доставляем всегда вкусную еду! </title>
	
	{* Метатеги *}
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="{$meta_description|escape}" />
	<meta name="keywords"    content="{$meta_keywords|escape}" />

	{* Канонический адрес страницы *}
	{if isset($canonical)}<link rel="canonical" href="{$config->root_url}{$canonical}"/>{/if}
	
        <!-- ======================================================================
                                    Mobile Specific Meta
        ======================================================================= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 
 	{* Стили *}
	 <link rel="stylesheet" href="design/{$settings->theme|escape}/css/bootstrap.css" /> 
	<link href="design/{$settings->theme|escape}/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/{$settings->theme|escape}/css/style_simpla.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/{$settings->theme}/images/faviconPD.png" rel="icon"          type="image/x-icon"/>
	<link href="design/{$settings->theme}/images/faviconPD.png" rel="shortcut icon" type="image/x-icon"/>         

	{* JQuery *} 
	<script src="js/jquery/jquery.js"  type="text/javascript"></script>
	
	
	{* Всплывающие подсказки для администратора *}
	{if $smarty.session.admin == 'admin'}
	<script src ="js/admintooltip/admintooltip.js" type="text/javascript"></script>
	<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" /> 
	{/if}
	
	{* Ctrl-навигация на соседние товары *}
	<script type="text/javascript" src="js/ctrlnavigate.js"></script>           
	
	{* Аяксовая корзина *}
	<script src="design/{$settings->theme}/js/jquery-ui.min.js"></script>
	<script src="design/{$settings->theme}/js/ajax_cart.js"></script>
	
	{* js-проверка форм *}
	<script src="js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="js/baloon/css/baloon.css" rel="stylesheet" type="text/css" /> 
	
	{* Автозаполнитель поиска *}
	{literal}
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
	{/literal}
 	{literal}
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
 	{/literal}
			
</head>
<body>
        <div class="header">
            <div class="container">
                <div class="header-middle-info">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="./">
                                <img src="design/{$settings->theme}/images/logoPD_95x77.png"  title="{$settings->site_name|escape}" alt="{$settings->site_name|escape}" />
                            </a>
                        </div>
						 
                    </div>
                    <div class="col-md-8">
                        <ul class="header-middle-account">
			{if $user}
				<li>
					<a href="user"><i class="icon-330" ></i> {$user->name}</a>{if $group->discount>0},
					ваша скидка &mdash; {$group->discount}%{/if}
				</li>
				<li><a id="logout" href="user/logout"><i class="icon-351"></i> выйти</a></li>
			{else}
			{/if}                        
			{* Выбор валюты только если их больше одной *}
			{if $currencies|count>1}
					{foreach from=$currencies item=c}
					{if $c->enabled} 
					<li class="{if $c->id==$currency->id}selected{/if}"><a href='{url currency_id=$c->id}'>{$c->code|escape}</a></li>
					{/if}
					{/foreach}
			{/if}
				<div class="header-top-info">
					<div class="contact-info"><li> Звоните: <br></li>
						<span class="phone"><li><img src="design/{$settings->theme}/images/elements/contact-sprite.png"/> 067 481 54 64 </li></span>
						<span class="phone"><li><img src="design/{$settings->theme}/images/elements/contact-sprite.png"/> 098 687 92 29 </li></span>
						<span class="iconmsg"><li><img src="design/{$settings->theme}/images/logo_viber.png"/> + <img src="design/{$settings->theme}/images/logo_telegram.png"/></li></span>
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
			{* Обновляемая аяксом корзина должна быть в отдельном файле *}
			{include file='cart_informer.tpl'}
		</div>
		<!-- Корзина (The End)-->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="repsonsive-menu"><i class="icon-406" title="406"></i>Открыть товары</div>
			{* Рекурсивная функция вывода дерева категорий *}
			{function name=categories_tree}
			{if $categories}
			{$level=0}
			<ul>
			{foreach $categories as $c}
				{* Показываем только видимые категории *}
				{if $c->visible}
					<li  class="{if $c->subcategories}menu-item-has-children{/if} {if $category->id == $c->id}active{/if}">
						<a href="catalog/{$c->url}" data-category="{$c->id}">{$c->name|escape}</a>
						{categories_tree categories=$c->subcategories level = $level+1}
					</li>
				{/if}
			{/foreach}
			</ul>
			{/if}
			{/function}
			{categories_tree categories=$categories}                    
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
{if $module == 'MainView' || $module == 'ProductView'}
{$content}
{elseif $module == 'BlogView' ||  $module == 'PostView'}
<div class="container">
                 <div class="row">
                    <div class="col-md-8">
{$content}
                    </div>
                    <div class="col-md-4">
{include file='sidebar.tpl'}                    
                    </div>
                    </div> 
 </div>                                                          
{else}
            <div class="container">
					{$content}
            </div>
{/if}
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
	<!-- <li><a href="http://vk.com/club69070087"><img src="design/{$settings->theme}/images/elements/socials/googleplus.png" alt="VK"/>VK</a></li> -->
                            <li><a href="http://www.facebook.com/pekarskydvordostavka/"><img src="design/{$settings->theme}/images/elements/socials/facebook.png" alt="facebook"/>Facebook</a></li>
                 <!-- <li><a href="https://twitter.com/@info20533646"><img src="design/{$settings->theme}/images/elements/socials/twitter.png" alt="twitter"/>Twitter</a></li> -->
                            <li><a href="https://www.instagram.com/pekarskydvor/"><img src="design/{$settings->theme}/images/elements/socials/instagram.png" alt="instagram"/>Instagram</a></li>
		<li><a href="https://t.me/pekarskydvor"><img src="design/{$settings->theme}/images/elements/socials/telegram.png" alt="Telegram"/>Telegram</a></li>
                            <li><a href="https://www.youtube.com/channel/UCRc9gjp7Nd6QepDUCBps-ig?view_as=subscriber"><img src="design/{$settings->theme}/images/elements/socials/youtube.png" alt="YouTube"/>YouTube</a></li> 
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <ul>
                         {*<li><a href="#">Страница</a></li>
                          	<li><a href="#">Страница</a></li>
                         	<li><a href="#">Страница</a></li>
                         	<li><a href="#">Страница</a></li>
                         	<li><a href="#">Страница</a></li>
                        	<li><a href="#">Страница</a></li>*}
                            
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <ul>
			{foreach $pages as $p}
				{* Выводим только страницы из первого меню *}
				{if $p->menu_id == 2}
				<li {if $page && $page->id == $p->id}class="selected"{/if}>
					<a data-page="{$p->id}" href="{$p->url}">{$p->name|escape}</a>
				</li>
				{/if}
			{/foreach}
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <ul class="menu-item">
			{foreach $pages as $p}
				{* Выводим только страницы из первого меню *}
				{if $p->menu_id == 1}
				<li {if $page && $page->id == $p->id}class="selected"{/if}>
					<a data-page="{$p->id}" href="{$p->url}">{$p->name|escape}</a>
				</li>
				{/if}
			{/foreach}
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
                                <img src="design/{$settings->theme}/images/elements/payment.png" alt="payment systems" />
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
        <script src="design/{$settings->theme}/js/modernizr.custom.63321.js" type="text/javascript"></script>
        {* <script src="design/{$settings->theme}/js/jquery-1.10.0.min.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/jquery-ui.min.js" type="text/javascript"></script> *}
        <script src="design/{$settings->theme}/js/bootstrap.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/placeholder.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/jquery.swipebox.min.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/farbtastic/farbtastic.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/options.js" type="text/javascript"></script>
        <script src="design/{$settings->theme}/js/plugins.js" type="text/javascript"></script>
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
		<img src="design/{$settings->theme|escape}/images/up.png">
		<br>Вверх
	</div>
	
</div>	
</a>
	{literal}
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

	{/literal}
</body>
</html>