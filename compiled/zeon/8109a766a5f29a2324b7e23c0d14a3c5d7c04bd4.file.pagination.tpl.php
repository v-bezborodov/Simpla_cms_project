<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:04:03
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224415a7b23737950a4-06653097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8109a766a5f29a2324b7e23c0d14a3c5d7c04bd4' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\pagination.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224415a7b23737950a4-06653097',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('total_pages_num')->value>1){?>
<script type="text/javascript" src="js/ctrlnavigate.js"></script>           
<!-- Листалка страниц -->
 <ul class="page-numbers">
	
	<?php $_smarty_tpl->tpl_vars['visible_pages'] = new Smarty_variable(11, null, null);?>
	<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(1, null, null);?>
	
	<?php if ($_smarty_tpl->getVariable('current_page_num')->value>floor($_smarty_tpl->getVariable('visible_pages')->value/2)){?>
		<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->getVariable('current_page_num')->value-floor($_smarty_tpl->getVariable('visible_pages')->value/2)-1), null, null);?>
	<?php }?>	
	
	<?php if ($_smarty_tpl->getVariable('current_page_num')->value>$_smarty_tpl->getVariable('total_pages_num')->value-ceil($_smarty_tpl->getVariable('visible_pages')->value/2)){?>
		<?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->getVariable('total_pages_num')->value-$_smarty_tpl->getVariable('visible_pages')->value-1), null, null);?>
	<?php }?>
	
	<?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_variable(min($_smarty_tpl->getVariable('page_from')->value+$_smarty_tpl->getVariable('visible_pages')->value,$_smarty_tpl->getVariable('total_pages_num')->value-1), null, null);?>

	<?php if ($_smarty_tpl->getVariable('current_page_num')->value==2){?><li><a class="prev_page_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
">← </a> /</li><?php }?>
	<?php if ($_smarty_tpl->getVariable('current_page_num')->value>2){?><li><a class="prev_page_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->getVariable('current_page_num')->value-1),$_smarty_tpl);?>
">← </a> /</li><?php }?>
	<li><a <?php if ($_smarty_tpl->getVariable('current_page_num')->value==1){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
">1</a> /</li>
		
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('page_to')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int)$_smarty_tpl->getVariable('page_from')->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>	
		<?php $_smarty_tpl->tpl_vars['p'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']+1, null, null);?>	
		<?php if (($_smarty_tpl->getVariable('p')->value==$_smarty_tpl->getVariable('page_from')->value+1&&$_smarty_tpl->getVariable('p')->value!=2)||($_smarty_tpl->getVariable('p')->value==$_smarty_tpl->getVariable('page_to')->value&&$_smarty_tpl->getVariable('p')->value!=$_smarty_tpl->getVariable('total_pages_num')->value-1)){?>	
		<li><a <?php if ($_smarty_tpl->getVariable('p')->value==$_smarty_tpl->getVariable('current_page_num')->value){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->getVariable('p')->value),$_smarty_tpl);?>
">...</a> /</li>
		<?php }else{ ?>
		<li><a <?php if ($_smarty_tpl->getVariable('p')->value==$_smarty_tpl->getVariable('current_page_num')->value){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->getVariable('p')->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('p')->value;?>
</a> /</li>
		<?php }?>
	<?php endfor; endif; ?>
	<li><a <?php if ($_smarty_tpl->getVariable('current_page_num')->value==$_smarty_tpl->getVariable('total_pages_num')->value){?>class="current"<?php }?>  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->getVariable('total_pages_num')->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('total_pages_num')->value;?>
</a> /</li>
	
	<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>'all'),$_smarty_tpl);?>
">все сразу</a> /</li>

	<?php if ($_smarty_tpl->getVariable('current_page_num')->value<$_smarty_tpl->getVariable('total_pages_num')->value){?><li><a class="next_page_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->getVariable('current_page_num')->value+1),$_smarty_tpl);?>
"> →</a></li><?php }?>
	
</ul>
<!-- Листалка страниц (The End) -->
<?php }?>
