{* Страница входа пользователя *}

{* Канонический адрес страницы *}
{$canonical="/user/login" scope=parent}

{$meta_title = "Вход" scope=parent}
   
<h1>Вход</h1>

{if $error}
<div class="message_error">
	{if $error == 'login_incorrect'}Неверный логин или пароль
	{elseif $error == 'user_disabled'}Ваш аккаунт еще не активирован.
	{else}{$error}{/if}
</div>
{/if}

<form class="form login_form" method="post">
	<label>Email</label>
	<input type="text" class="input-line" name="email" data-format="email" data-notice="Введите email" value="{$email|escape}" maxlength="255" />

    <label>Пароль (<a href="user/password_remind">напомнить</a>)</label>
    <input class="input-line" type="password" name="password" data-format=".+" data-notice="Введите пароль" value="" />

	<input type="submit" class="button-4" name="login" value="Войти">
</form>

<h1>Регистрация</h1>

{if $error}
<div class="message_error">
	{if $error == 'empty_name'}Введите имя
	{elseif $error == 'empty_email'}Введите email
	{elseif $error == 'empty_password'}Введите пароль
	{elseif $error == 'user_exists'}Пользователь с таким email уже зарегистрирован
	{elseif $error == 'captcha'}Неверно введена капча
	{else}{$error}{/if}
</div>
{/if}

<form class="form register_form" method="post">
	<label>Имя</label>
	<input type="text" class="input-line" name="name" data-format=".+" data-notice="Введите имя" value="{$name|escape}" maxlength="255" />
	
	<label>Email</label>
	<input type="text" class="input-line" name="email" data-format="email" data-notice="Введите email" value="{$email|escape}" maxlength="255" />

    <label>Пароль</label>
    <input type="password" class="input-line" name="password" data-format=".+" data-notice="Введите пароль" value="" />

	<div class="captcha"><img src="captcha/image.php?{math equation='rand(10,10000)'}"/></div> 
	<input class="input_captcha input-line" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>

	<input type="submit" class="button-4" name="register" value="Зарегистрироваться">

</form>
