{* Шаблон товара в списке *}

                            <div class="col-md-{if $main}3{else}4{/if} col-xs-6">
                                <div class="product">
                               
 		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">                               
                                    <div class="product-cover">
                                             <span class="product-action">
                                             {if $product->featured && $main != 'hits'}
                                                <span class="product-new">Хит</span>
                                              {/if}
                                              {if $product->variant->compare_price > 0}  
                                                <span class="product-sale">- <em>{floor(abs(100-{$product->variant->price}/($product->variant->compare_price)*100))}</em> %</span>
                                               {/if} 
                                               {if strtotime($product->created) >= strtotime('-1 months')}<span class="product-new">NEW</span>{/if}
                                            </span>                                   
                                        <div class="product-cover-hover"><span><a href="products/{$product->url}">Подробнее</a></span>
                                        <div class="clear"></div>
                                           {if $product->variants|count > 0}  
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
			{/if}                                    
                                       </div>
		<!-- Фото товара -->
		{if $product->image}
		<div class="image">

			<a href="products/{$product->url}"><img src="{$product->image->filename|resize:260:260}" alt="{$product->name|escape}"/></a>

		</div>
		{/if}
		<!-- Фото товара (The End) -->
		<div class="clear"></div>
                                    </div>
                                    		<div class="clear"></div>    
                                    <div class="product-details">    
                                        <h1><a href="products/{$product->url}">{$product->name|escape}</a></h1>
                                        <p class="product-annotation">{$product->annotation|strip_tags|truncate:200}</p>
                                        <div class="product-price">
    {if $product->variants|count > 0}                                          
                                        <button type="submit">
                                            <i class="icon-257" title="Добавить в корзину"><color="#ff4500"></i>
                                            </button>
                                            {if $product->variant->compare_price > 0}
                                            <span class="old">{$product->variant->compare_price|convert} </span>
                                            {/if}
                                            <span class="pr">{$product->variant->price|convert} </span>{$currency->sign|escape}
  		{else}
			Нет в наличии
		{/if}                                          
                                        </div>
                                    </div>
                                </div>
		</form>
		<!-- Выбор варианта товара (The End) -->                                
                            </div>