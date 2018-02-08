{* Шаблон сайдбара *}

                        <div class="main-sidebar">
                            <div class="row">
			{* Выбираем в переменную $last_posts последние записи *}
		<!--	{get_posts var=last_posts limit=5}
			{if $last_posts}
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Новые записи в <a href="blog">блоге</a></div>
                                        <ul class="widget-archives">
 				{foreach $last_posts as $post}
					<li data-post="{$post->id}"><a href="blog/{$post->url}">{$post->name|escape}</a>&nbsp;({$post->date|date})</li>
				{/foreach}
                                        </ul>
                                    </div>
                                </div>
			{/if}-->

			<!-- Просмотренные товары -->
		<!--	{get_browsed_products var=browsed_products limit=12}
			{if $browsed_products}
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Вы просматривали:</div>
				<ul id="browsed_products">
				{foreach $browsed_products as $browsed_product}
					<li>
					<a href="products/{$browsed_product->url}"><img src="{$browsed_product->image->filename|resize:50:50}" alt="{$browsed_product->name|escape}" title="{$browsed_product->name|escape}"></a>
					</li>
				{/foreach}
				</ul>
                                    </div>
                                </div>
			{/if}-->
			<!-- Просмотренные товары (The End)-->
	</div>
	<div class="row">

{* Рекомендуемые товары *}
<!--{get_featured_products var=featured_products category_id=$category->id limit=5}-->
{get_products var=cat_products category_id=$category->id limit=5}
{if $cat_products}
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Рекомендуемые товары</div>
                                        <ul class="widget-best-seller">
                                        {foreach $cat_products as $product}
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

			<!-- Все бренды -->
			{* Выбираем в переменную $all_brands все бренды *}
			{get_brands var=all_brands}
			{if $all_brands}
                                <div class="col-md-12 col-xs-6">
                                    <div class="widget">
                                        <div class="widget-title">Все бренды:</div>
                                         <div class="tagcloud">
				{foreach $all_brands as $b}
					{if $b->image}
					<a href="brands/{$b->url}"><img src="{$config->brands_images_dir}{$b->image}" alt="{$b->name|escape}"></a>
					{else}
					<a href="brands/{$b->url}">{$b->name}</a>
					{/if}
				{/foreach}
			</div>
                                    </div>
                                </div>
			{/if}
			<!-- Все бренды (The End)-->
                            </div>
                        </div>
