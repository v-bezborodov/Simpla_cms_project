{* Шаблон корзины *}

{$meta_title = "Корзина" scope=parent}

<h2>
{if $cart->purchases}В корзине {$cart->total_products} {$cart->total_products|plural:'товар':'товаров':'товара'}
{else}Корзина пуста{/if}
</h2>

{if $cart->purchases}
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
{foreach from=$cart->purchases item=purchase}
                        <!-- REPEAT BY PRODUCT -->
                        <ul class="shopping-product-detail">
                            <li class="shopping-1">
		{$image = $purchase->product->images|first}
		{if $image}
		<a href="products/{$purchase->product->url}"><img src="{$image->filename|resize:120:120}" alt="{$product->name|escape}"></a>
		{/if}                            
                            </li>
                            <li class="shopping-2">
		<a href="products/{$purchase->product->url}">{$purchase->product->name|escape}</a>	
                            </li>
                            <li class="shopping-3">
		{$purchase->variant->name|escape}
                            </li>
                            <li class="shopping-4">
                            <div class="quantity">
                                <input type="button" value="-" class="minus minus1">
                                <input type="number"  value="{$purchase->amount}"  step="1" min="1" name="amounts[{$purchase->variant->id}]" onchange="document.cart.submit();" class="input-text qty text">
                                <input type="button" value="+" class="plus plus1">
                                </div>
                            </li>
                            <li class="shopping-5">
                                {($purchase->variant->price)|convert} {$currency->sign}
                            </li>
                            <li class="shopping-6">
                                {($purchase->variant->price*$purchase->amount)|convert}&nbsp;{$currency->sign}
                                 <button type="button" title="Удалить из корзины" onclick="window.location='cart/remove/{$purchase->variant->id}'">x</button>
                            </li>
                        </ul>
                        <!-- REPEAT BY PRODUCT -->
{/foreach}

                    </div>

                    <div class="row">
                        <div class="col-md-3">
        {* Если есть печенька с обратным путем - выводим ссылку "вернуться" *}
        {if $smarty.cookies.from}
        <a href="{$smarty.cookies.from|escape}" class="button-7" onclick="document.cookie='from=;path=/';">продолжить покупки</a>
        {/if}                        
                            
                        </div>
                        <div class="col-md-5">
 {if $coupon_request}
                             <div class="coupon">
		{if $coupon_error}
		<div class="message_error">
			{if $coupon_error == 'invalid'}Купон недействителен{/if}
		</div>
		{/if}
                                <input class="input-line coupon_code"  type="text" name="coupon_code" value="{$cart->coupon->code|escape}" />
		{if $cart->coupon->min_order_price>0}(купон {$cart->coupon->code|escape} действует для заказов от {$cart->coupon->min_order_price|convert} {$currency->sign})<br /><br />{/if}                                
                                <button type="button" name="apply_coupon"  class="button-6"  onclick="document.cart.submit();">Применить купон</button>
 		{if $cart->coupon_discount>0}
		&minus;{$cart->coupon_discount|convert}&nbsp;{$currency->sign}
		{/if}                          
                           
                            </div>

{literal}
<script>
$("input[name='coupon_code']").keypress(function(event){
	if(event.keyCode == 13){
		$("input[name='name']").attr('data-format', '');
		$("input[name='email']").attr('data-format', '');
		document.cart.submit();
	}
});
</script>
{/literal}

{/if}                       

                        </div>
                        <div class="col-md-4">
                            <div class="checkout-total">
{if $user->discount}
<p>Cкидка : {$user->discount}&nbsp;%</p>
{/if}
		{if $cart->coupon_discount>0}
		<p>Купон: &minus;{$cart->coupon_discount|convert}&nbsp;{$currency->sign}</p>
		{/if}                            
                                <hr/>
                                <p>		Итого: 
		{$cart->total_price|convert}&nbsp;{$currency->sign}</p>

                            </div>
                        </div>
                    </div>  
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="forms-separation">
{* Доставка *}
{if $deliveries}
<div class="site-title"><div class="site-inside"><span>Выберите способ доставки:</span></div></div> 
<ul id="deliveries">
	{foreach $deliveries as $delivery}
	<li>
		<div class="checkbox">
			<input type="radio" name="delivery_id" value="{$delivery->id}" {if $delivery_id==$delivery->id}checked{elseif $delivery@first}checked{/if} id="deliveries_{$delivery->id}">
		</div>
		
			<h3>
			<label for="deliveries_{$delivery->id}">
			{$delivery->name}
			{if $cart->total_price < $delivery->free_from && $delivery->price>0}
				({$delivery->price|convert}&nbsp;{$currency->sign})
			{elseif $cart->total_price >= $delivery->free_from}
				
			{/if}
			</label>
			</h3>
			<div class="description">
			{$delivery->description}
			</div>
	</li>
	{/foreach}
</ul>
{/if}
                        </div>
                    </div>
                    <div class="col-md-6">
                     <div class="site-title"><div class="site-inside"><span>Имя*/Телефон*</div> 
	
<div class="form cart_form">         
	{if $error}
	<div class="message_error">
		{if $error == 'empty_name'}Введите имя{/if}

	</div>
	{/if}
	<label>Имя</label>
	<input  class="input-line" name="name" type="text" value="{$name|escape}" data-format=".+" data-notice="Введите имя"/>
	

	<label>Телефон</label>
	<input class="input-line" name="phone" type="text" value="{$phone|escape}" />
	
	
	<input type="submit" name="checkout" class="button-4" value="Оформить заказ">
	</div>
   

                    </div>
                    <div class="clear"></div>

                </div>
</form>   

{else}
  В корзине нет товаров
{/if}