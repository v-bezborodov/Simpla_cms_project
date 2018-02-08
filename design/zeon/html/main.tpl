{* Главная страница магазина *}

{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'index.tpl' scope=parent}

{* Канонический адрес страницы *}
{$canonical="" scope=parent}

{include file='slider.tpl'}

{* Рекомендуемые товары *}
{get_featured_products var=featured_products}
{if $featured_products}
<div class="box">
            <div class="container">
                 <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Рекомендуемые товары</span></div></div> 
                    <div class="row">
                        <div class="tesla-carousel-items">
                        {foreach $featured_products as $product}
{include file='product_block.tpl' main='hits'}
                            {/foreach}
 
                            
                        </div>
                    </div>
                </div>           
            </div>
 </div>
{/if} 

{include file='services.tpl'}

{* Новинки *}
{get_new_products var=new_products limit=12}
{if $new_products}
<div class="box">
            <div class="container">
                 <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Новинки</span></div></div> 
                    <div class="row">
                        <div class="tesla-carousel-items">
                        {foreach $new_products as $product}
{include file='product_block.tpl' main='new'}
                            {/foreach}
 
                            
                        </div>
                    </div>
                </div>           
            </div>
 </div>
{/if} 

            <!-- =====================================================================
                                         START ADDS
            ====================================================================== -->
<!--            <div class="box color-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="adds-2">
                                <a href="#"><img src="design/{$settings->theme}/images/photos/commercial-3.jpg" alt="adds"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="adds-3">
                                <a href="#"><img src="design/{$settings->theme}/images/photos/commercial-4.jpg" alt="adds"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="adds-3">
                                <a href="#"><img src="design/{$settings->theme}/images/photos/commercial-5.jpg" alt="adds"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->

{* Акционные товары *}
{get_discounted_products var=discounted_products limit=12}
{if $discounted_products}
<div class="box">
            <div class="container">
                 <div class="tesla-carousel" data-tesla-plugin="carousel" data-tesla-container=".tesla-carousel-items" data-tesla-item=">div" data-tesla-autoplay="false" data-tesla-rotate="false">
                    <div class="site-title">
                        <ul class="wrapper-arrows">
                            <li><i class="icon-517 prev" title="left arrow"></i></li>
                            <li><i class="icon-501 next" title="right arrow"></i></li>
                        </ul>
                        <div class="site-inside"><span>Акционные товары</span></div></div> 
                    <div class="row">
                        <div class="tesla-carousel-items">
                        {foreach $discounted_products as $product}
{include file='product_block.tpl' main='sale'}
                            {/foreach}
 
                            
                        </div>
                    </div>
                </div>           
            </div>
 </div>
{/if} 

			<!-- Все бренды -->
			{* Выбираем в переменную $all_brands все бренды *}
			{get_brands var=all_brands}
			{if $all_brands}
            
{/if}                              