<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:03:59
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75105a7b236f1e6f04-43623854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f6a9692c16e4c42b499ffdb85a9cd3e0c7fc1b2' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\page.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75105a7b236f1e6f04-43623854',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".($_smarty_tpl->getVariable('page')->value->url), null, 1);?>
<?php if ($_smarty_tpl->getVariable('page')->value->url=='404'){?>
<?php $_template = new Smarty_Internal_Template('404.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
<!-- Заголовок страницы -->
<div class="site-title"><div class="site-inside"><span data-page="<?php echo $_smarty_tpl->getVariable('page')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->header);?>
</span></div></div> 

<!-- Тело страницы -->
<?php echo $_smarty_tpl->getVariable('page')->value->body;?>

<?php }?>