{* Информера корзины (отдаётся аяксом) *}
                           <a href="cart" class="in_cart" onclick="document.cookie='from='+location.href+';path=/';"> <i class="icon-19"></i>{$cart->total_price|convert} {$currency->sign|escape}</a>
                            
                            <div class="inside-cart">
                            {if $cart->total_products>0}
                                <p>В корзине {$cart->total_products} {$cart->total_products|plural:'товар':'товаров':'товара'} на {$cart->total_price|convert} {$currency->sign|escape}</p>
                                <ul>
                                {foreach from=$cart->purchases item=purchase}
                                    <li>
		{$image = $purchase->product->images|first}
		{if $image}
		<div class="inside-cart-image">
		<a href="products/{$purchase->product->url}"><img src="{$image->filename|resize:60:60}" alt="{$product->name|escape}"></a>
		</div>
		{/if}                                    
                                        <button onclick="$('#cart_inf').load('cart/remove/{$purchase->variant->id} #cart_informer');">x</button>
                                        		<a href="products/{$purchase->product->url}">{$purchase->product->name|escape}
		  {$purchase->variant->name|escape}</a>
                                        <p>Цена : {($purchase->variant->price)|convert} {$currency->sign}</p>
                                        <p>Кол-во : {$purchase->amount} {$settings->units}</p>
                                    </li>
                                 {/foreach}   
                                </ul>
                                {else}
                                <p>Корзина пуста</p>
                                <ul style="padding:0;"></ul>
                                {/if}
                            </div>

