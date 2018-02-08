{* Страница товара *}

{* Канонический адрес страницы *}
{$canonical="/products/{$product->url}" scope=parent}





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
 		{foreach $product->images as $i=>$image}
			 <li class="slide"><a href="{$image->filename|resize:800:600:w}" class="zoom" rel="group"><img src="{$image->filename|resize:550:550}" alt="{$product->name|escape}" /></a></li>
		{/foreach}

                                </ul>
                                </div>
                                <div class="row">
                                    <ul class="the-bullets-dots" data-tesla-plugin="bullets">
  		{foreach $product->images as $i=>$image}
			 <li><div class="col-md-2 col-xs-2 heigth"><img src="{$image->filename|resize:95:95}" alt="{$product->name|escape}" /></div></li>
		{/foreach}

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 data-product="{$product->id}">{$product->name|escape}</h2>
																		 {if $product->annotation}
                                                       <hr/> {$product->annotation}
                                                       {/if}
                                                                                                              <hr/>
       {if $product->variants|count > 0}
 		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-price">
                                            {if $product->variant->compare_price > 0}
                                            <span class="old">{$product->variant->compare_price|convert} </span>
                                            {/if}
                                            <span class="pr">{$product->variant->price|convert} </span>{$currency->sign|escape}
                                </div>
                                                            </div>
                                <div class="col-md-6">
                                      <span class="sel_var"{if $product->variants|count==1  && !$product->variant->name}style='display:none;'{/if}>
 			<!-- Выбор варианта товара -->
			<select name="variant" >
				{foreach $product->variants as $v}
				<option value="{$v->id}" {if $v->compare_price > 0}compare_price="{$v->compare_price|convert}"{/if} price="{$v->price|convert}">
				{$v->name}
				</option>
				{/foreach}
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


                                {* Рекомендуемые товары *}
{get_featured_products var=featured_products category_id=$category->id limit=8}
{if $featured_products}
                            <div class="col-md-12 col-xs-6">
                                <div class="widget">
                                    <div class="widget-title rekcen">Стоит попробовать</div>
                                    <ul class="widget-best-seller rekwig">
                                    {foreach $featured_products as $product}
                                        <li>
                                            <span class="item-cover"><a href="products/{$product->url}"><img src="{$product->image->filename|resize:80:80}" alt="{$product->name|escape}"/></a></span>
                                            <span class="item-title"><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></span>
                                             {if $product->variants|count > 0}
                                            <span class="item-price">{$product->variant->price|convert}  {$currency->sign|escape}</span>
{else}
<span class="item-price">Нет в наличии</span>
{/if}
                                        </li>
                                        {/foreach}

                                    </ul>
                                </div>
                            </div>
{/if}

                            </div>
</form>
		{else}
			Нет в наличии
		{/if}
                        </div>
                    </div>

	<!-- Соседние товары /-->
	<div id="back_forward">
		{if $prev_product}
			<a class="prev_page_link  button-4" href="products/{$prev_product->url}"><<&nbsp;{$prev_product->name|escape}</a>
		{/if}
		{if $next_product}
			<a class="next_page_link  button-4" href="products/{$next_product->url}">{$next_product->name|escape}&nbsp;>></a>
		{/if}
	</div>
                </div>

           <div class="clear"></div>
             <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#description" data-toggle="tab">Описание</a></li>
                                 <li class=""><a href="#features" data-toggle="tab">Характеристики</a></li>
                                <li class=""><a href="#reviews" data-toggle="tab">Отзывы ({$comments|count})</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                   {$product->body}

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
                                    	{if $product->features}
	<!-- Характеристики товара -->
	<ul class="product-details">
	{foreach $product->features as $f}
	<li>
		<label>{$f->name}</label>
		<span>{$f->value}</span>
	</li>
	{/foreach}
	</ul>
	<!-- Характеристики товара (The End)-->
	{/if}

                                </div>
                                <div class="tab-pane" id="reviews">
 		{if $error}
		<div class="message_error">
			{if $error=='captcha'}
			Неверно введена капча
			{elseif $error=='empty_name'}
			Введите имя
			{elseif $error=='empty_comment'}
			Введите комментарий
			{/if}
		</div>
		{/if}
 	{if $comments}
	<!-- Список с комментариями -->
		{foreach $comments as $comment}
		<a name="comment_{$comment->id}"></a>
                                    <div class="product-review">
                                        <div class="product-review-author">{$comment->name|escape} <span>{$comment->date|date}, {$comment->date|time}</span> {if !$comment->approved}<b>ожидает модерации</b>{/if}</div>
                                        <p>
			{$comment->text|escape|nl2br}
													</p>
                                    </div>
		{/foreach}
	<!-- Список с комментариями (The End)-->
	{else}
	<div class="product-review">
	<p>
		Пока нет комментариев
	</p>
	</div>
	{/if}
                                    <a href="#" class="button-6" data-toggle="modal" data-target="#write-review">Оставить отзыв</a>
          <div class="modal fade" id="write-review" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-review">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3>Написать комментарий</h3>
  	<!--Форма отправления комментария-->
	<form method="post">
		<textarea class="text-area" id="comment_text" name="text" data-format=".+" data-notice="Введите комментарий">{$comment_text}</textarea><br />
		<label for="comment_name">Имя</label>
		<input class="input-line" type="text" id="comment_name" name="name" value="{$comment_name}" data-format=".+" data-notice="Введите имя"/><br />
		<label for="comment_captcha">Число
		<div class="captcha"><img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha'/></div> </label>
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
{* Связанные товары *}
{if $related_products}
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
                        {foreach $related_products as $product}
										{include file='product_block.tpl' main='product'}
								{/foreach}
                        </div>
                    </div>
                </div>
            </div>
{/if}
{* Увеличитель картинок *}
{literal}
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
{/literal}
