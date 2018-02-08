{* Шаблон текстовой страницы *}

{* Канонический адрес страницы *}
{$canonical="/{$page->url}" scope=parent}
{if $page->url == '404'}
{include file='404.tpl'}
{else}
<!-- Заголовок страницы -->
<div class="site-title"><div class="site-inside"><span data-page="{$page->id}">{$page->header|escape}</span></div></div> 

<!-- Тело страницы -->
{$page->body}
{/if}