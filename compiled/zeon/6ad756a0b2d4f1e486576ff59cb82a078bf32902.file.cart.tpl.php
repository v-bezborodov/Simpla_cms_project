<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:10:39
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54355a7b24ff4ccb22-14744326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad756a0b2d4f1e486576ff59cb82a078bf32902' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\cart.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54355a7b24ff4ccb22-14744326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Корзина", null, 1);?>

<h2>
<?php if ($_smarty_tpl->getVariable('cart')->value->purchases){?>В корзине <?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('cart')->value->total_products,'товар','товаров','товара');?>

<?php }else{ ?>Корзина пуста<?php }?>
</h2>

<?php if ($_smarty_tpl->getVariable('cart')->value->purchases){?>
<form method="post" name="cart">
                <div class="shopping-cart">
                    <div class="shopping-cart-products">
                        <ul class="shopping-product-detail">
                            <li class="shopping-1">Фото</li>
                            <li class="shopping-2">Название</li>
                            <li class="shopping-3">Вариант</li>
                            <li class="shopping-4">Кол-во</li>
                            <li class="shopping-5">Цена</li>
                            <li class="shopping-6">Сумма</li>
                        </ul>
<?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cart')->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value){
?>
                        <!-- REPEAT BY PRODUCT -->
                        <ul class="shopping-product-detail">
                            <li class="shopping-1">
		<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->getVariable('purchase')->value->product->images), null, null);?>
		<?php if ($_smarty_tpl->getVariable('image')->value){?>
		<a href="products/<?php echo $_smarty_tpl->getVariable('purchase')->value->product->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,120,120);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"></a>
		<?php }?>                            
                            </li>
                            <li class="shopping-2">
		<a href="products/<?php echo $_smarty_tpl->getVariable('purchase')->value->product->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->product->name);?>
</a>	
                            </li>
                            <li class="shopping-3">
		<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('purchase')->value->variant->name);?>

                            </li>
                            <li class="shopping-4">
                            <div class="quantity">
                                <input type="button" value="-" class="minus minus1">
                                <input type="number"  value="<?php echo $_smarty_tpl->getVariable('purchase')->value->amount;?>
"  step="1" min="1" name="amounts[<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
]" onchange="document.cart.submit();" class="input-text qty text">
                                <input type="button" value="+" class="plus plus1">
                                </div>
                            </li>
                            <li class="shopping-5">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->getVariable('purchase')->value->variant->price));?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

                            </li>
                            <li class="shopping-6">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->getVariable('purchase')->value->variant->price*$_smarty_tpl->getVariable('purchase')->value->amount));?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

                                 <button type="button" title="Удалить из корзины" onclick="window.location='cart/remove/<?php echo $_smarty_tpl->getVariable('purchase')->value->variant->id;?>
'">x</button>
                            </li>
                        </ul>
                        <!-- REPEAT BY PRODUCT -->
<?php }} ?>

                    </div>

                    <div class="row">
                        <div class="col-md-3">
        <?php if ($_COOKIE['from']){?>
        <a href="<?php echo smarty_modifier_escape($_COOKIE['from']);?>
" class="button-7" onclick="document.cookie='from=;path=/';">продолжить покупки</a>
        <?php }?>                        
                            
                        </div>
                        <div class="col-md-5">
 <?php if ($_smarty_tpl->getVariable('coupon_request')->value){?>
                             <div class="coupon">
		<?php if ($_smarty_tpl->getVariable('coupon_error')->value){?>
		<div class="message_error">
			<?php if ($_smarty_tpl->getVariable('coupon_error')->value=='invalid'){?>Купон недействителен<?php }?>
		</div>
		<?php }?>
                                <input class="input-line coupon_code"  type="text" name="coupon_code" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cart')->value->coupon->code);?>
" />
		<?php if ($_smarty_tpl->getVariable('cart')->value->coupon->min_order_price>0){?>(купон <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cart')->value->coupon->code);?>
 действует для заказов от <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->coupon->min_order_price);?>
 <?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
)<br /><br /><?php }?>                                
                                <button type="button" name="apply_coupon"  class="button-6"  onclick="document.cart.submit();">Применить купон</button>
 		<?php if ($_smarty_tpl->getVariable('cart')->value->coupon_discount>0){?>
		&minus;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->coupon_discount);?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>

		<?php }?>                          
                           
                            </div>


<script>
$("input[name='coupon_code']").keypress(function(event){
	if(event.keyCode == 13){
		$("input[name='name']").attr('data-format', '');
		$("input[name='email']").attr('data-format', '');
		document.cart.submit();
	}
});
</script>


<?php }?>                       

                        </div>
                        <div class="col-md-4">
                            <div class="checkout-total">
<?php if ($_smarty_tpl->getVariable('user')->value->discount){?>
<p>Cкидка : <?php echo $_smarty_tpl->getVariable('user')->value->discount;?>
&nbsp;%</p>
<?php }?>
		<?php if ($_smarty_tpl->getVariable('cart')->value->coupon_discount>0){?>
		<p>Купон: &minus;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->coupon_discount);?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
</p>
		<?php }?>                            
                                <hr/>
                                <p>		Итого: 
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
</p>

                            </div>
                        </div>
                    </div>  
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="forms-separation">
<?php if ($_smarty_tpl->getVariable('deliveries')->value){?>
<div class="site-title"><div class="site-inside"><span>Выберите способ доставки:</span></div></div> 
<ul id="deliveries">
	<?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('deliveries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value){
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
	<li>
		<div class="checkbox">
			<input type="radio" name="delivery_id" value="<?php echo $_smarty_tpl->getVariable('delivery')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('delivery_id')->value==$_smarty_tpl->getVariable('delivery')->value->id){?>checked<?php }elseif($_smarty_tpl->tpl_vars['delivery']->first){?>checked<?php }?> id="deliveries_<?php echo $_smarty_tpl->getVariable('delivery')->value->id;?>
">
		</div>
		
			<h3>
			<label for="deliveries_<?php echo $_smarty_tpl->getVariable('delivery')->value->id;?>
">
			<?php echo $_smarty_tpl->getVariable('delivery')->value->name;?>

			<?php if ($_smarty_tpl->getVariable('cart')->value->total_price<$_smarty_tpl->getVariable('delivery')->value->free_from&&$_smarty_tpl->getVariable('delivery')->value->price>0){?>
				(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('delivery')->value->price);?>
&nbsp;<?php echo $_smarty_tpl->getVariable('currency')->value->sign;?>
)
			<?php }elseif($_smarty_tpl->getVariable('cart')->value->total_price>=$_smarty_tpl->getVariable('delivery')->value->free_from){?>
				
			<?php }?>
			</label>
			</h3>
			<div class="description">
			<?php echo $_smarty_tpl->getVariable('delivery')->value->description;?>

			</div>
	</li>
	<?php }} ?>
</ul>
<?php }?>
                        </div>
                    </div>
                    <div class="col-md-6">
                     <div class="site-title"><div class="site-inside"><span>Имя*/Телефон*</div> 
	
<div class="form cart_form">         
	<?php if ($_smarty_tpl->getVariable('error')->value){?>
	<div class="message_error">
		<?php if ($_smarty_tpl->getVariable('error')->value=='empty_name'){?>Введите имя<?php }?>

	</div>
	<?php }?>
	<label>Имя</label>
	<input  class="input-line" name="name" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('name')->value);?>
" data-format=".+" data-notice="Введите имя"/>
	

	<label>Телефон</label>
	<input class="input-line" name="phone" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('phone')->value);?>
" />
	
	
	<input type="submit" name="checkout" class="button-4" value="Оформить заказ">
	</div>
   

                    </div>
                    <div class="clear"></div>

                </div>
</form>   

<?php }else{ ?>
  В корзине нет товаров
<?php }?>