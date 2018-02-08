<?php /* Smarty version Smarty-3.0.7, created on 2018-02-08 02:16:09
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258715a7b88b9b74d36-99478555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31fe009c7e952f3e210cf5d0fe21c1ff4bb0f437' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\sidebar.tpl',
      1 => 1518045366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258715a7b88b9b74d36-99478555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>

                        <div class="main-sidebar">
                            <div class="row">
		<!--	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>5),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->getVariable('last_posts')->value){?>
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Новые записи в <a href="blog">блоге</a></div>
                                        <ul class="widget-archives">
 				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('last_posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
					<li data-post="<?php echo $_smarty_tpl->getVariable('post')->value->id;?>
"><a href="blog/<?php echo $_smarty_tpl->getVariable('post')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('post')->value->name);?>
</a>&nbsp;(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->getVariable('post')->value->date);?>
)</li>
				<?php }} ?>
                                        </ul>
                                    </div>
                                </div>
			<?php }?>-->

			<!-- Просмотренные товары -->
		<!--	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>12),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->getVariable('browsed_products')->value){?>
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Вы просматривали:</div>
				<ul id="browsed_products">
				<?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('browsed_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value){
?>
					<li>
					<a href="products/<?php echo $_smarty_tpl->getVariable('browsed_product')->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('browsed_product')->value->image->filename,50,50);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('browsed_product')->value->name);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('browsed_product')->value->name);?>
"></a>
					</li>
				<?php }} ?>
				</ul>
                                    </div>
                                </div>
			<?php }?>-->
			<!-- Просмотренные товары (The End)-->
	</div>
	<div class="row">
<!--<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','category_id'=>$_smarty_tpl->getVariable('category')->value->id,'limit'=>5),$_smarty_tpl);?>
-->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_products'][0][0]->get_products_plugin(array('var'=>'cat_products','category_id'=>$_smarty_tpl->getVariable('category')->value->id,'limit'=>5),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('cat_products')->value){?>
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Рекомендуемые товары</div>
                                        <ul class="widget-best-seller">
                                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cat_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
                                            <li>
                                                <span class="item-cover"><a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,80,80);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/></a></span>
                                                <span class="item-title"><a data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
" href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</a></span>
                                                 <?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
                                                <span class="item-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price);?>
  <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</span>
		<?php }else{ ?>
			<span class="item-price">Нет в наличии</span>
		<?php }?>
                                            </li>
                                            <?php }} ?>

                                        </ul>
                                    </div>
                                </div>
<?php }?>

			<!-- Все бренды -->
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0][0]->get_brands_plugin(array('var'=>'all_brands'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->getVariable('all_brands')->value){?>
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Все бренды:</div>
                                         <div class="tagcloud">
				<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('all_brands')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>
					<?php if ($_smarty_tpl->getVariable('b')->value->image){?>
					<a href="brands/<?php echo $_smarty_tpl->getVariable('b')->value->url;?>
"><img src="<?php echo $_smarty_tpl->getVariable('config')->value->brands_images_dir;?>
<?php echo $_smarty_tpl->getVariable('b')->value->image;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('b')->value->name);?>
"></a>
					<?php }else{ ?>
					<a href="brands/<?php echo $_smarty_tpl->getVariable('b')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('b')->value->name;?>
</a>
					<?php }?>
				<?php }} ?>
			</div>
                                    </div>
                                </div>
			<?php }?>
			<!-- Все бренды (The End)-->
                            </div>
                        </div>
