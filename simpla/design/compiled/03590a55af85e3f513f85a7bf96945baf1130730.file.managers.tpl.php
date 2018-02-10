<?php /* Smarty version Smarty-3.0.7, created on 2018-02-08 16:43:45
         compiled from "simpla/design/html\managers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106195a7c5411afd4a9-31146688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03590a55af85e3f513f85a7bf96945baf1130730' => 
    array (
      0 => 'simpla/design/html\\managers.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106195a7c5411afd4a9-31146688',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>
<?php ob_start(); ?>
	<?php if (in_array('settings',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=SettingsAdmin">Настройки</a></li><?php }?>
	<?php if (in_array('currency',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=CurrencyAdmin">Валюты</a></li><?php }?>
	<?php if (in_array('delivery',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=DeliveriesAdmin">Доставка</a></li><?php }?>
	<?php if (in_array('payment',$_smarty_tpl->getVariable('manager')->value->permissions)){?><li><a href="index.php?module=PaymentMethodsAdmin">Оплата</a></li><?php }?>
	<li class="active"><a href="index.php?module=ManagersAdmin">Менеджеры</a></li>
<?php  Smarty::$_smarty_vars['capture']['tabs']=ob_get_clean();?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable('Менеджеры', null, 1);?>
<div id="header">
	<h1><?php echo $_smarty_tpl->getVariable('managers_count')->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('managers_count')->value,'менеджер','менеджеров','менеджера');?>
</h1> 	
	<a class="add" href="index.php?module=ManagerAdmin">Добавить менеджера</a>
</div>

<?php if ($_smarty_tpl->getVariable('message_error')->value){?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span>
	<?php if ($_smarty_tpl->getVariable('message_error')->value=='not_writable'){?>Установите права на запись для файла /simpla/.passwd
	<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('message_error')->value);?>
<?php }?>
	</span>
	<a class="button" href="">Вернуться</a>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>


<?php if ($_smarty_tpl->getVariable('managers')->value){?>
<!-- Основная часть -->
<div id="main_list">
	<form id="form_list" method="post">
	<input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	
		<div id="list">	
			<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('managers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
?>
			<div class="row">
		 		<div class="checkbox cell">
					<input type="checkbox" name="check[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('m')->value->login);?>
" <?php if ($_smarty_tpl->getVariable('manager')->value->login==$_smarty_tpl->getVariable('m')->value->login){?>disabled<?php }?>/>
				</div>
				<div class="user_name cell">
					<a href="index.php?module=ManagerAdmin&login=<?php echo urlencode($_smarty_tpl->getVariable('m')->value->login);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('m')->value->login);?>
</a>
				</div>
				<div class="user_email cell">
					<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->name);?>
<<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->email);?>
>"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value->email);?>
</a>	
				</div>
				<div class="user_group cell">
					<?php echo $_smarty_tpl->getVariable('groups')->value[$_smarty_tpl->getVariable('user')->value->group_id]->name;?>

				</div>
				<div class="icons cell">
					<?php if ($_smarty_tpl->getVariable('manager')->value->login!=$_smarty_tpl->getVariable('m')->value->login){?>
					<a class="delete" title="Удалить" href="#"></a>
					<?php }?>
				</div>
				<div class="clear"></div>
			</div>
			<?php }} ?>
		</div>
	
		<div id="action">
		<label id="check_all" class="dash_link">Выбрать все</label>
	
		<span id=select>
		<select name="action">
			<option value="delete">Удалить</option>
		</select>
		</span>
	
		<input id="apply_action" class="button_green" type="submit" value="Применить">
		</div>

	</form>
</div>
<?php }?>



<script>
$(function() {

	// Раскраска строк
	function colorize()
	{
		$("#list div.row:even").addClass('even');
		$("#list div.row:odd").removeClass('even');
	}
	// Раскрасить строки сразу
	colorize();
	
	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]:not(:disabled)').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:disabled):not(:checked)').length>0);
	});	

	// Удалить 
	$("a.delete").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest(".row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Подтверждение удаления
	$("form").submit(function() {
		if($('#list input[type="checkbox"][name*="check"]:checked').length>0)
			if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
				return false;	
	});
});

</script>

