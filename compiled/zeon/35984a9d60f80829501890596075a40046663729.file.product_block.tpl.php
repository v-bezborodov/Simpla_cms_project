<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:04:03
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\product_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243685a7b2373621ed1-15043465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35984a9d60f80829501890596075a40046663729' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\product_block.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243685a7b2373621ed1-15043465',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.truncate.php';
?>

                            <div class="col-md-<?php if ($_smarty_tpl->getVariable('main')->value){?>3<?php }else{ ?>4<?php }?> col-xs-6">
                                <div class="product">
                               
 		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">                               
                                    <div class="product-cover">
                                             <span class="product-action">
                                             <?php if ($_smarty_tpl->getVariable('product')->value->featured&&$_smarty_tpl->getVariable('main')->value!='hits'){?>
                                                <span class="product-new">Хит</span>
                                              <?php }?>
                                              <?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?>  
                                                <span class="product-sale">- <em><?php ob_start();?><?php echo $_smarty_tpl->getVariable('product')->value->variant->price;?>
<?php $_tmp1=ob_get_clean();?><?php echo floor(abs(100-$_tmp1/($_smarty_tpl->getVariable('product')->value->variant->compare_price)*100));?>
</em> %</span>
                                               <?php }?> 
                                               <?php if (strtotime($_smarty_tpl->getVariable('product')->value->created)>=strtotime('-1 months')){?><span class="product-new">NEW</span><?php }?>
                                            </span>                                   
                                        <div class="product-cover-hover"><span><a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
">Подробнее</a></span>
                                        <div class="clear"></div>
                                           <?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>  
                                      <span class="sel_var"<?php if (count($_smarty_tpl->getVariable('product')->value->variants)==1&&!$_smarty_tpl->getVariable('product')->value->variant->name){?>style='display:none;'<?php }?>>
 			<!-- Выбор варианта товара -->
			<select name="variant" >
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
				<option value="<?php echo $_smarty_tpl->getVariable('v')->value->id;?>
" <?php if ($_smarty_tpl->getVariable('v')->value->compare_price>0){?>compare_price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->compare_price);?>
"<?php }?> price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('v')->value->price);?>
">
				<?php echo $_smarty_tpl->getVariable('v')->value->name;?>

				</option>
				<?php }} ?>
			</select></span>
			<!-- Выбор варианта товара (The End) --> 
			<?php }?>                                    
                                       </div>
		<!-- Фото товара -->
		<?php if ($_smarty_tpl->getVariable('product')->value->image){?>
		<div class="image">

			<a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('product')->value->image->filename,260,260);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
"/></a>

		</div>
		<?php }?>
		<!-- Фото товара (The End) -->
		<div class="clear"></div>
                                    </div>
                                    		<div class="clear"></div>    
                                    <div class="product-details">    
                                        <h1><a href="products/<?php echo $_smarty_tpl->getVariable('product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</a></h1>
                                        <p class="product-annotation"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('product')->value->annotation),200);?>
</p>
                                        <div class="product-price">
    <?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>                                          
                                        <button type="submit">
                                            <i class="icon-257" title="Добавить в корзину"><color="#ff4500"></i>
                                            </button>
                                            <?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?>
                                            <span class="old"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->compare_price);?>
 </span>
                                            <?php }?>
                                            <span class="pr"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price);?>
 </span><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

  		<?php }else{ ?>
			Нет в наличии
		<?php }?>                                          
                                        </div>
                                    </div>
                                </div>
		</form>
		<!-- Выбор варианта товара (The End) -->                                
                            </div>