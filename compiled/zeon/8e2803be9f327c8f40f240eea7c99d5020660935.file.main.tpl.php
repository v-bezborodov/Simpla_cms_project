<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:04:15
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315685a7b237f13ab95-88040403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2803be9f327c8f40f240eea7c99d5020660935' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\main.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315685a7b237f13ab95-88040403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('index.tpl', null, 1);?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);?>

<?php $_template = new Smarty_Internal_Template('slider.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('featured_products')->value){?>
<div class="box">
            <div class="container">
                 <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Рекомендуемые товары</span></div></div> 
                    <div class="row">
                        <div class="tesla-carousel-items">
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('featured_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
<?php $_template = new Smarty_Internal_Template('product_block.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('main','hits'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }} ?>
 
                            
                        </div>
                    </div>
                </div>           
            </div>
 </div>
<?php }?> 

<?php $_template = new Smarty_Internal_Template('services.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>12),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('new_products')->value){?>
<div class="box">
            <div class="container">
                 <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Новинки</span></div></div> 
                    <div class="row">
                        <div class="tesla-carousel-items">
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('new_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
<?php $_template = new Smarty_Internal_Template('product_block.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('main','new'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }} ?>
 
                            
                        </div>
                    </div>
                </div>           
            </div>
 </div>
<?php }?> 

            <!-- =====================================================================
                                         START ADDS
            ====================================================================== -->
<!--            <div class="box color-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="adds-2">
                                <a href="#"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/photos/commercial-3.jpg" alt="adds"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="adds-3">
                                <a href="#"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/photos/commercial-4.jpg" alt="adds"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="adds-3">
                                <a href="#"><img src="design/<?php echo $_smarty_tpl->getVariable('settings')->value->theme;?>
/images/photos/commercial-5.jpg" alt="adds"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>12),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('discounted_products')->value){?>
<div class="box">
            <div class="container">
                 <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Акционные товары</span></div></div> 
                    <div class="row">
                        <div class="tesla-carousel-items">
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('discounted_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
<?php $_template = new Smarty_Internal_Template('product_block.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('main','sale'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }} ?>
 
                            
                        </div>
                    </div>
                </div>           
            </div>
 </div>
<?php }?> 

			<!-- Все бренды -->
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0][0]->get_brands_plugin(array('var'=>'all_brands'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->getVariable('all_brands')->value){?>
            
<?php }?>                              