<?php /* Smarty version Smarty-3.0.7, created on 2018-02-08 01:42:35
         compiled from "simpla/design/html\templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75865a7b80dbafedf7-32367475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c82ab2920bcf258b821ae1082dd503bc9065734' => 
    array (
      0 => 'simpla/design/html\\templates.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75865a7b80dbafedf7-32367475',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?><?php ob_start(); ?>
	<li><a href="index.php?module=ThemeAdmin">Тема</a></li>
	<li class="active"><a href="index.php?module=TemplatesAdmin">Шаблоны</a></li>		
	<li><a href="index.php?module=StylesAdmin">Стили</a></li>		
	<li><a href="index.php?module=ImagesAdmin">Изображения</a></li>		
<?php  Smarty::$_smarty_vars['capture']['tabs']=ob_get_clean();?>

<?php if ($_smarty_tpl->getVariable('template_file')->value){?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Шаблон ".($_smarty_tpl->getVariable('template_file')->value), null, 1);?>
<?php }?>
<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<script src="design/js/codemirror/lib/codemirror.js"></script>

<script src="design/js/codemirror/mode/smarty/smarty.js"></script>
<script src="design/js/codemirror/mode/smartymixed/smartymixed.js"></script>
<script src="design/js/codemirror/mode/xml/xml.js"></script>
<script src="design/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="design/js/codemirror/mode/css/css.js"></script>
<script src="design/js/codemirror/mode/javascript/javascript.js"></script>

<script src="design/js/codemirror/addon/selection/active-line.js"></script>
 

<style type="text/css">

.CodeMirror{
	font-family:'Courier New';
	padding-bottom:20px;
	margin-bottom:10px;
	border:1px solid #c0c0c0;
	background-color: #ffffff;
	height: auto;
	min-height: 300px;
	width:100%;
}
.CodeMirror-scroll
{
	overflow-y: hidden;
	overflow-x: auto;
}
.cm-s-default .cm-smarty.cm-tag{color: #ff008a;}
.cm-s-default .cm-smarty.cm-string {color: #007000;}
.cm-s-default .cm-smarty.cm-variable {color: #ff008a;}
.cm-s-default .cm-smarty.cm-variable-2 {color: #ff008a;}
.cm-s-default .cm-smarty.cm-variable-3 {color: #ff008a;}
.cm-s-default .cm-smarty.cm-property {color: #ff008a;}
.cm-s-default .cm-comment {color: #505050;}
.cm-s-default .cm-smarty.cm-attribute {color: #ff20Fa;}
</style>

<script>
$(function() {	
	// Сохранение кода аяксом
	function save()
	{
		$('.CodeMirror').css('background-color','#e0ffe0');
		content = editor.getValue();
		
		$.ajax({
			type: 'POST',
			url: 'ajax/save_template.php',
			data: {'content': content, 'theme':'<?php echo $_smarty_tpl->getVariable('theme')->value;?>
', 'template': '<?php echo $_smarty_tpl->getVariable('template_file')->value;?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
			
				$('.CodeMirror').animate({'background-color': '#ffffff'});
			},
			dataType: 'json'
		});
	}

	// Нажали кнопку Сохранить
	$('input[name="save"]').click(function() {
		save();
	});
	
	// Обработка ctrl+s
	var isCtrl = false;
	var isCmd = false;
	$(document).keyup(function (e) {
		if(e.which == 17) isCtrl=false;
		if(e.which == 91) isCmd=false;
	}).keydown(function (e) {
		if(e.which == 17) isCtrl=true;
		if(e.which == 91) isCmd=true;
		if(e.which == 83 && (isCtrl || isCmd)) {
			save();
			e.preventDefault();
		}
	});
});
</script>


<h1>Тема <?php echo $_smarty_tpl->getVariable('theme')->value;?>
, шаблон <?php echo $_smarty_tpl->getVariable('template_file')->value;?>
</h1>

<?php if ($_smarty_tpl->getVariable('message_error')->value){?>
<!-- Системное сообщение -->
<div class="message message_error">
	<span>
	<?php if ($_smarty_tpl->getVariable('message_error')->value=='permissions'){?>Установите права на запись для файла <?php echo $_smarty_tpl->getVariable('template_file')->value;?>

	<?php }elseif($_smarty_tpl->getVariable('message_error')->value=='theme_locked'){?>Текущая тема защищена от изменений. Создайте копию темы.
	<?php }else{ ?><?php echo $_smarty_tpl->getVariable('message_error')->value;?>
<?php }?>
	</span>
</div>
<!-- Системное сообщение (The End)-->
<?php }?>

<!-- Список файлов для выбора -->
<div class="block layer">
	<div class="templates_names">
		<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('templates')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
?>
			<a <?php if ($_smarty_tpl->getVariable('template_file')->value==$_smarty_tpl->tpl_vars['t']->value){?>class="selected"<?php }?> href='index.php?module=TemplatesAdmin&file=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a>
		<?php }} ?>
	</div>
</div>

<?php if ($_smarty_tpl->getVariable('template_file')->value){?>
<div class="block">
<form>
	<textarea id="template_content" name="template_content" style="width:700px;height:500px;"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('template_content')->value);?>
</textarea>
</form>

<input class="button_green button_save" type="button" name="save" value="Сохранить" />
</div>

<script>
var editor = CodeMirror.fromTextArea(document.getElementById("template_content"), {
		mode: "smartymixed",		
		lineNumbers: true,
		styleActiveLine: true,
		matchBrackets: false,
		enterMode: 'keep',
		indentWithTabs: false,
		indentUnit: 1,
		tabMode: 'classic'
	});
</script>


<?php }?>