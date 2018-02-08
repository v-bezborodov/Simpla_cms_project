<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:03:59
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250475a7b236f3e6b03-11077566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e0f22e8e1ed5eab5b636bbcf1a7c53587d1b3c' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\404.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250475a7b236f3e6b03-11077566',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>                <div class="site-title"><div class="site-inside"><span>Error 404</span></div></div> 

                <div class="error-404">
                    <img src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/elements/error-404.png" alt="error-404">
                    <h3>Error</h3>

                    <form class="error-404-search"  action="products">
                        <input type="text" class="search-line input_search2" name="keyword" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
" placeholder="Поиск товара" />
                        <input type="submit" value="" class="search-button" />
                    </form>

                    <h1>Are you lost?</h1>
                    <h2>SORRY, the page you asked for couldn't be found.</h2>
                    <p>Please try using the search form below</p>

                </div>