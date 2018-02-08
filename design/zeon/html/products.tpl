{* Список товаров *}

{* Канонический адрес страницы *}
{if $category && $brand}
{$canonical="/catalog/{$category->url}/{$brand->url}" scope=parent}
{elseif $category}
{$canonical="/catalog/{$category->url}" scope=parent}
{elseif $brand}
{$canonical="/brands/{$brand->url}" scope=parent}
{elseif $keyword}
{$canonical="/products?keyword={$keyword|escape}" scope=parent}
{else}
{$canonical="/products?page=all" scope=parent}
{/if}

                <div class="all-products-details">
                    <div class="row">
                        <div class="col-md-7">
{* Заголовок страницы *}
{if $keyword}
<h2>Поиск {$keyword|escape}</h2>
{elseif $page}
<h2>{$page->name|escape}</h2>
{else}
<h2>{$category->name|escape} {$brand->name|escape} {$keyword|escape}</h2>
{/if}                        
                        </div>
                        <div class="col-md-5">
{* Сортировка *}
{if $products|count>0}                      
                            <div class="sort-dropdown float-right">
                                <span>По {if $sort=='position'}умолчанию{elseif $sort=='price'}цене{elseif $sort=='name'}названию{/if}  <i class="icon-515"></i></span>
                                <ul>
                                    <li><a {if $sort=='position'} class="selected"{/if} href="{url sort=position page=null}">По умолчанию</a></li>
                                    <li><a {if $sort=='price'}    class="selected"{/if} href="{url sort=price page=null}">По цене</a></li>
                                    <li><a {if $sort=='name'}     class="selected"{/if} href="{url sort=name page=null}">По названию</a></li>
                                </ul>
                            </div>
{/if}                             
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="left">
                        <div class="row">
                        {foreach $categories as $c}
                        {if in_array($category->id, $c->children) && $c->subcategories}
                            <div class="col-md-12 col-xs-6">
                                <div class="products-dropdown open-dropdown">
                                    <span><i class="icon-515" title="515"></i>{$c->name|escape}</span>
                                    <ul>
                                    {foreach $c->subcategories as $cat}
                                       <li><a {if $category->id == $cat->id}class="active"{/if} href="catalog/{$cat->url}" data-category="{$cat->id}">{$cat->name|escape}</a></li>
                                    {/foreach}    
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                         {/if}
                         {/foreach}
 
{* Фильтр по брендам *}
{if $category->brands}                         
                            <div class="col-md-12 col-xs-6">
                                <div class="products-dropdown">
                                    <span>Бренды</span>
                                    <ul>
                                        <li><a href="catalog/{$category->url}" {if !$brand->id}class="selected"{/if}>Все бренды</a></li>
	{foreach name=brands item=b from=$category->brands}
													<li><a data-brand="{$b->id}" href="catalog/{$category->url}/{$b->url}" {if $b->id == $brand->id}class="selected"{/if}>{$b->name|escape}</a></li>
	{/foreach}
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
 {/if}
 
 {* Фильтр по свойствам *}
{if $features}
 	{foreach $features as $f}                          
                            <div class="col-md-12 col-xs-6">
                                <div class="products-dropdown">
                                    <span data-feature="{$f->id}">{$f->name}</span>
                                    <ul>
		<li><a href="{url params=[$f->id=>null, page=>null]}" {if !$smarty.get.$f@key}class="selected"{/if}>Все</a></li>
		{foreach $f->options as $o}
		<li><a href="{url params=[$f->id=>$o->value, page=>null]}" {if $smarty.get.$f@key == $o->value}class="selected"{/if}>{$o->value|escape}</a></li>
		{/foreach}                                    
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
	{/foreach}                            
 {/if}
  
        <div class="sidefull">                 
{include file='sidebar.tpl'}</div>


                        </div>
                    </div>
                    <div class="col-md-9">

<!--Каталог товаров-->
{if $products}
                        <div class="row">
                           {foreach $products as $product}                     
{include file='product_block.tpl'}
                            {/foreach}

                        </div>

{include file='pagination.tpl'}	
 {else}
Товары не найдены
{/if}
                     
 <div class="sidesmall">                 
{include file='sidebar.tpl'}</div>                     
                     
<!--Каталог товаров (The End)-->

{* Описание страницы (если задана) *}
{$page->body}

{if $current_page_num==1}
{* Описание категории *}
{$category->description}
{/if}


{if $current_page_num==1}
{* Описание бренда *}
{$brand->description}
{/if}                       
                        
                    </div>
                </div>