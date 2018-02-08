<?php /* Smarty version Smarty-3.0.7, created on 2018-02-08 02:52:59
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266555a7b915b849dc7-80450158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa45462a633242c4eb5a018c2acf725fad38a306' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\product.tpl',
      1 => 1518047558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266555a7b915b849dc7-80450158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
if (!is_callable('smarty_function_math')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\function.math.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".($_smarty_tpl->getVariable('product')->value->url), null, 1);?>





            <div class="product-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 big-image">
                            <div class="the-slider product-big-image  " data-tesla-plugin="slider" data-tesla-item=".slide" data-tesla-next=".product-image-arrows-right" data-tesla-prev=".product-image-arrows-left" data-tesla-container=".slide-wrapper">
                                <ul class="product-image-arrows">
                                    <li class="product-image-arrows-left"><i class="icon-517" title="left"></i></li>
                                    <li class="product-image-arrows-right"><i class="icon-501" title="right"></i></li>
                                </ul>
                                 <div class="heigth2">
                                <ul class="slide-wrapper">
 		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
			 <li class="slide"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,800,600,'w');?>
" class="zoom" rel="group"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,550,550);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
" /></a></li>
		<?php }} ?>

                                </ul>
                                </div>
                                <div class="row">
                                    <ul class="the-bullets-dots" data-tesla-plugin="bullets">
  		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
			 <li><div class="col-md-2 col-xs-2 heigth"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->getVariable('image')->value->filename,95,95);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
" /></div></li>
		<?php }} ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 data-product="<?php echo $_smarty_tpl->getVariable('product')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('product')->value->name);?>
</h2>
																		 <?php if ($_smarty_tpl->getVariable('product')->value->annotation){?>
                                                       <hr/> <?php echo $_smarty_tpl->getVariable('product')->value->annotation;?>

                                                       <?php }?>
                                                                                                              <hr/>
       <?php if (count($_smarty_tpl->getVariable('product')->value->variants)>0){?>
 		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-price">
                                            <?php if ($_smarty_tpl->getVariable('product')->value->variant->compare_price>0){?>
                                            <span class="old"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->compare_price);?>
 </span>
                                            <?php }?>
                                            <span class="pr"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('product')->value->variant->price);?>
 </span><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

                                </div>
                                                            </div>
                                <div class="col-md-6">
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
                                </div>
                            </div>
<br />
                            <div class="row">
                                <div class="col-md-6">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" name="amount" value="1" title="Количество" class="input-text qty text">
                                <input type="button" value="+" class="plus">
                                                            </div>
											</div>
                                <div class="col-md-6">
                                    <button type="submit" class="button-2">В корзину</button>

                                </div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','category_id'=>$_smarty_tpl->getVariable('category')->value->id,'limit'=>8),$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('featured_products')->value){?>
                            <div class="col-md-12 col-xs-6">
                                <div class="widget">
                                    <div class="widget-title rekcen">Стоит попробовать</div>
                                    <ul class="widget-best-seller rekwig">
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('featured_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

                            </div>
</form>
		<?php }else{ ?>
			Нет в наличии
		<?php }?>
                        </div>
                    </div>

	<!-- Соседние товары /-->
	<div id="back_forward">
		<?php if ($_smarty_tpl->getVariable('prev_product')->value){?>
			<a class="prev_page_link  button-4" href="products/<?php echo $_smarty_tpl->getVariable('prev_product')->value->url;?>
"><<&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('prev_product')->value->name);?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('next_product')->value){?>
			<a class="next_page_link  button-4" href="products/<?php echo $_smarty_tpl->getVariable('next_product')->value->url;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('next_product')->value->name);?>
&nbsp;>></a>
		<?php }?>
	</div>
                </div>

           <div class="clear"></div>
             <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#description" data-toggle="tab">Описание</a></li>
                                 <li class=""><a href="#features" data-toggle="tab">Характеристики</a></li>
                                <li class=""><a href="#reviews" data-toggle="tab">Отзывы (<?php echo count($_smarty_tpl->getVariable('comments')->value);?>
)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                   <?php echo $_smarty_tpl->getVariable('product')->value->body;?>


                                    <ul class="social-share">
                                        <li><span>Поделиться</span></li>
                                        <li><a href="#"><i class="icon-160" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-138" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-106" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-169" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-163" title="161"></i></a></li>
                                    </ul>
                                </div>
                                  <div class="tab-pane" id="features">
                                    	<?php if ($_smarty_tpl->getVariable('product')->value->features){?>
	<!-- Характеристики товара -->
	<ul class="product-details">
	<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
?>
	<li>
		<label><?php echo $_smarty_tpl->getVariable('f')->value->name;?>
</label>
		<span><?php echo $_smarty_tpl->getVariable('f')->value->value;?>
</span>
	</li>
	<?php }} ?>
	</ul>
	<!-- Характеристики товара (The End)-->
	<?php }?>

                                </div>
                                <div class="tab-pane" id="reviews">
 		<?php if ($_smarty_tpl->getVariable('error')->value){?>
		<div class="message_error">
			<?php if ($_smarty_tpl->getVariable('error')->value=='captcha'){?>
			Неверно введена капча
			<?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_name'){?>
			Введите имя
			<?php }elseif($_smarty_tpl->getVariable('error')->value=='empty_comment'){?>
			Введите комментарий
			<?php }?>
		</div>
		<?php }?>
 	<?php if ($_smarty_tpl->getVariable('comments')->value){?>
	<!-- Список с комментариями -->
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
?>
		<a name="comment_<?php echo $_smarty_tpl->getVariable('comment')->value->id;?>
"></a>
                                    <div class="product-review">
                                        <div class="product-review-author"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('comment')->value->name);?>
 <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->getVariable('comment')->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->getVariable('comment')->value->date);?>
</span> <?php if (!$_smarty_tpl->getVariable('comment')->value->approved){?><b>ожидает модерации</b><?php }?></div>
                                        <p>
			<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('comment')->value->text));?>

													</p>
                                    </div>
		<?php }} ?>
	<!-- Список с комментариями (The End)-->
	<?php }else{ ?>
	<div class="product-review">
	<p>
		Пока нет комментариев
	</p>
	</div>
	<?php }?>
                                    <a href="#" class="button-6" data-toggle="modal" data-target="#write-review">Оставить отзыв</a>
          <div class="modal fade" id="write-review" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-review">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3>Написать комментарий</h3>
  	<!--Форма отправления комментария-->
	<form method="post">
		<textarea class="text-area" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий"><?php echo $_smarty_tpl->getVariable('comment_text')->value;?>
</textarea><br />
		<label for="comment_name">Имя</label>
		<input class="input-line" type="text" id="comment_name" name="name" value="<?php echo $_smarty_tpl->getVariable('comment_name')->value;?>
" data-format=".+" data-notice="Введите имя"/><br />
		<label for="comment_captcha">Число
		<div class="captcha"><img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha'/></div> </label>
		<input class="input_captcha input-line" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>
<input class="button-6" type="submit" name="comment" value="Отправить" />
	</form>
	<!--Форма отправления комментария (The End)-->
                </div>
            </div>
        </div>
                                </div>
                            </div>
                            </div>
            </div>
<?php if ($_smarty_tpl->getVariable('related_products')->value){?>
            <div class="container">

                <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Так же советуем посмотреть</span></div></div>
                    <div class="row">
                        <div class="tesla-carousel-items">
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('related_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
										<?php $_template = new Smarty_Internal_Template('product_block.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('main','product'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
								<?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script>
$(function() {
	// Зум картинок
	$("a.zoom").fancybox({
		prevEffect	: 'fade',
		nextEffect	: 'fade'});
	});
</script>

