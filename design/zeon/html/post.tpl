{* Страница отдельной записи блога *}

{* Канонический адрес страницы *}
{$canonical="/blog/{$post->url}" scope=parent}

                        <div class="blog-entry">
                            <div class="entry-header">
<!-- Заголовок /-->
<h1 data-post="{$post->id}">{$post->name|escape}</h1>
                                <ul class="blog-entry-details">
                                    <li class="entry-date"><a href="#">{$post->date|date}</a></li>
                                    <li class="entry-comments"><a href="{url}#comments">Комментарии ({$comments|count})</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
<!-- Тело поста /-->
{$post->text}
                            </div>
                             <div class="entry-footer">
                                <div class="social-share-border">
                                    <ul class="social-share">
                                        <li><span>Поделиться</span></li>
                                        <li><a href="#"><i class="icon-160" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-138" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-106" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-169" title="161"></i></a></li>
                                        <li><a href="#"><i class="icon-163" title="161"></i></a></li>
                                    </ul>
                                </div>
                            </div>  
                            
                            
                            
</div>                                                      
<!-- Соседние записи /-->
<div id="back_forward">
	{if $prev_post}
		<a class="prev_page_link button-4" href="blog/{$prev_post->url}"><<&nbsp;{$prev_post->name}</a>
	{/if}
	{if $next_post}
		<a class="next_page_link button-4" href="blog/{$next_post->url}">{$next_post->name}&nbsp;>></a>
	{/if}
</div>

<!-- Комментарии -->
                            <div class="comments-area product-one">
                                <div class="site-title"><div class="site-inside"><span>Комментарии ({$comments|count})</span></div></div>
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
<!-- Комментарии (The End) -->