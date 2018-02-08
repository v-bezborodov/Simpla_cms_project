<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:04:02
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145625a7b2372c059a4-25757933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac5ac253c783a36c572e2a9ea7dd37b0066be29' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\products.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145625a7b2372c059a4-25757933',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>
<?php if ($_smarty_tpl->getVariable('category')->value&&$_smarty_tpl->getVariable('brand')->value){?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".($_smarty_tpl->getVariable('category')->value->url)."/".($_smarty_tpl->getVariable('brand')->value->url), null, 1);?>
<?php }elseif($_smarty_tpl->getVariable('category')->value){?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".($_smarty_tpl->getVariable('category')->value->url), null, 1);?>
<?php }elseif($_smarty_tpl->getVariable('brand')->value){?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands/".($_smarty_tpl->getVariable('brand')->value->url), null, 1);?>
<?php }elseif($_smarty_tpl->getVariable('keyword')->value){?>
<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products?keyword=".$_tmp1, null, 1);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products?page=all", null, 1);?>
<?php }?>

                <div class="all-products-details">
                    <div class="row">
                        <div class="col-md-7">
<?php if ($_smarty_tpl->getVariable('keyword')->value){?>
<h2>Поиск <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
</h2>
<?php }elseif($_smarty_tpl->getVariable('page')->value){?>
<h2><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->name);?>
</h2>
<?php }else{ ?>
<h2><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('category')->value->name);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('brand')->value->name);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('keyword')->value);?>
</h2>
<?php }?>                        
                        </div>
                        <div class="col-md-5">
<?php if (count($_smarty_tpl->getVariable('products')->value)>0){?>                      
                            <div class="sort-dropdown float-right">
                                <span>По <?php if ($_smarty_tpl->getVariable('sort')->value=='position'){?>умолчанию<?php }elseif($_smarty_tpl->getVariable('sort')->value=='price'){?>цене<?php }elseif($_smarty_tpl->getVariable('sort')->value=='name'){?>названию<?php }?>  <i class="icon-515"></i></span>
                                <ul>
                                    <li><a <?php if ($_smarty_tpl->getVariable('sort')->value=='position'){?> class="selected"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'position','page'=>null),$_smarty_tpl);?>
">По умолчанию</a></li>
                                    <li><a <?php if ($_smarty_tpl->getVariable('sort')->value=='price'){?>    class="selected"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'price','page'=>null),$_smarty_tpl);?>
">По цене</a></li>
                                    <li><a <?php if ($_smarty_tpl->getVariable('sort')->value=='name'){?>     class="selected"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'name','page'=>null),$_smarty_tpl);?>
">По названию</a></li>
                                </ul>
                            </div>
<?php }?>                             
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="left">
                        <div class="row">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
                        <?php if (in_array($_smarty_tpl->getVariable('category')->value->id,$_smarty_tpl->getVariable('c')->value->children)&&$_smarty_tpl->getVariable('c')->value->subcategories){?>
                            <div class="col-md-12 col-xs-6">
                                <div class="products-dropdown open-dropdown">
                                    <span><i class="icon-515" title="515"></i><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('c')->value->name);?>
</span>
                                    <ul>
                                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('c')->value->subcategories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
?>
                                       <li><a <?php if ($_smarty_tpl->getVariable('category')->value->id==$_smarty_tpl->getVariable('cat')->value->id){?>class="active"<?php }?> href="catalog/<?php echo $_smarty_tpl->getVariable('cat')->value->url;?>
" data-category="<?php echo $_smarty_tpl->getVariable('cat')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('cat')->value->name);?>
</a></li>
                                    <?php }} ?>    
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                         <?php }?>
                         <?php }} ?>
 
<?php if ($_smarty_tpl->getVariable('category')->value->brands){?>                         
                            <div class="col-md-12 col-xs-6">
                                <div class="products-dropdown">
                                    <span>Бренды</span>
                                    <ul>
                                        <li><a href="catalog/<?php echo $_smarty_tpl->getVariable('category')->value->url;?>
" <?php if (!$_smarty_tpl->getVariable('brand')->value->id){?>class="selected"<?php }?>>Все бренды</a></li>
	<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>
													<li><a data-brand="<?php echo $_smarty_tpl->getVariable('b')->value->id;?>
" href="catalog/<?php echo $_smarty_tpl->getVariable('category')->value->url;?>
/<?php echo $_smarty_tpl->getVariable('b')->value->url;?>
" <?php if ($_smarty_tpl->getVariable('b')->value->id==$_smarty_tpl->getVariable('brand')->value->id){?>class="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('b')->value->name);?>
</a></li>
	<?php }} ?>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
 <?php }?>
 
<?php if ($_smarty_tpl->getVariable('features')->value){?>
 	<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('features')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
?>                          
                            <div class="col-md-12 col-xs-6">
                                <div class="products-dropdown">
                                    <span data-feature="<?php echo $_smarty_tpl->getVariable('f')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('f')->value->name;?>
</span>
                                    <ul>
		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('params'=>array($_smarty_tpl->getVariable('f')->value->id=>null,'page'=>null)),$_smarty_tpl);?>
" <?php if (!$_GET[$_smarty_tpl->getVariable('f')->key]){?>class="selected"<?php }?>>Все</a></li>
		<?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('f')->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
?>
		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('params'=>array($_smarty_tpl->getVariable('f')->value->id=>$_smarty_tpl->getVariable('o')->value->value,'page'=>null)),$_smarty_tpl);?>
" <?php if ($_GET[$_smarty_tpl->getVariable('f')->key]==$_smarty_tpl->getVariable('o')->value->value){?>class="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('o')->value->value);?>
</a></li>
		<?php }} ?>                                    
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
	<?php }} ?>                            
 <?php }?>
  
        <div class="sidefull">                 
<?php $_template = new Smarty_Internal_Template('sidebar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></div>


                        </div>
                    </div>
                    <div class="col-md-9">

<!--Каталог товаров-->
<?php if ($_smarty_tpl->getVariable('products')->value){?>
                        <div class="row">
                           <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>                     
<?php $_template = new Smarty_Internal_Template('product_block.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }} ?>

                        </div>

<?php $_template = new Smarty_Internal_Template('pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>	
 <?php }else{ ?>
Товары не найдены
<?php }?>
                     
 <div class="sidesmall">                 
<?php $_template = new Smarty_Internal_Template('sidebar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></div>                     
                     
<!--Каталог товаров (The End)-->
<?php echo $_smarty_tpl->getVariable('page')->value->body;?>


<?php if ($_smarty_tpl->getVariable('current_page_num')->value==1){?>
<?php echo $_smarty_tpl->getVariable('category')->value->description;?>

<?php }?>


<?php if ($_smarty_tpl->getVariable('current_page_num')->value==1){?>
<?php echo $_smarty_tpl->getVariable('brand')->value->description;?>

<?php }?>                       
                        
                    </div>
                </div>