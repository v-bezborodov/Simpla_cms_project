<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:03:59
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35015a7b236f717240-88300977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0667e84a017f35711674ebb1f2de2fa7afd4ffbc' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\cart_informer.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35015a7b236f717240-88300977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>
                           <a href="cart" class="in_cart" onclick="document.cookie='from='+location.href+';path=/';"> <i class="icon-19"></i><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</a>
                            
                            <div class="inside-cart">
                            <?php if ($_smarty_tpl->getVariable('cart')->value->total_products>0){?>
                                <p>В корзине <?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('cart')->value->total_products,'товар','товаров','товара');?>
 на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>
</p>
                                <ul>
                                <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cart')->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value){
?>
                                    <li>
		<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->getVariable('purchase')->value->product->images), null, null);?>
		<?php if ($_smarty_tpl->getVariable('image')->value){?>
		<div class="inside-cart-image">
		<a href="products/<?php echo $_smarty_tpl->getVariable('purchase')->value->product->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,60,60);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"></a>
		</div>
		<?php }?>                                    
                                        <button onclick="$('#cart_inf').load('cart/remove/<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
 #cart_informer');">x</button>
                                        		<a href="products/<?php echo $_smarty_tpl->getVariable('purchase')->value->product->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->product->name);?>

		  <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->variant->name);?>
</a>
                                        <p>Цена : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->getVariable('purchase')->value->variant->price));?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
</p>
                                        <p>Кол-во : <?php echo $_smarty_tpl->getVariable('purchase')->value->amount;?>
 <?php echo $_smarty_tpl->getVariable('settings')->value->units;?>
</p>
                                    </li>
                                 <?php }} ?>   
                                </ul>
                                <?php }else{ ?>
                                <p>Корзина пуста</p>
                                <ul style="padding:0;"></ul>
                                <?php }?>
                            </div>

