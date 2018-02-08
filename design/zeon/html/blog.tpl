{* Список записей блога *}

{* Канонический адрес страницы *}
{$canonical="/blog" scope=parent} 



 	{foreach $posts as $post}                   
                        <div class="blog-entry">                       
                            <div class="entry-header">
                            <div class="site-title" style="margin-bottom:20px;"><div class="site-inside"><span><a data-post="{$post->id}" href="blog/{$post->url}">{$post->name|escape}</a></span></div></div>
                                <ul class="blog-entry-details">
                                    <li class="entry-date"><a href="">{$post->date|date}</a></li>
                                </ul>
                            </div>    
                            <div class="entry-content">
                                {$post->annotation}
                            </div>
                            <div class="entry-footer">
                                <a href="blog/{$post->url}" class="button-4">Читать далее</a>
                            </div>
                            <div class="clear"></div>
                        </div>
	{/foreach}


{include file='pagination.tpl'}


         