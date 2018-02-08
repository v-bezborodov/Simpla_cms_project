<?php /* Smarty version Smarty-3.0.7, created on 2018-02-07 19:04:15
         compiled from "C:\Server\OSPanel\domains\slepopuzik//design/zeon/html\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44255a7b237f2445d4-63706732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2c740188ba2693367b4e2340c4f71e11967ff3' => 
    array (
      0 => 'C:\\Server\\OSPanel\\domains\\slepopuzik//design/zeon/html\\slider.tpl',
      1 => 1517880752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44255a7b237f2445d4-63706732',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\Server\OSPanel\domains\slepopuzik\Smarty\libs\plugins\modifier.escape.php';
?>

            <!-- =====================================================================
                                             START THE SLIDER
            ====================================================================== -->
            <div class="the-slider slider" data-tesla-plugin="slider" data-tesla-item=".slide" data-tesla-next=".slide-right" data-tesla-prev=".slide-left" data-tesla-container=".slide-wrapper">
                <div class="slide-arrows">
                    <div class="slide-left"></div>
                    <div class="slide-right"></div>
                </div>
                <ul class="slide-wrapper">
                    <li class="slide"><img src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/slider/slide-1.jpg" alt="slider image"></li>
                    <li class="slide"><img src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/slider/slide-2.jpg" alt="slider image"></li>
                    <li class="slide"><img src="design/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value->theme);?>
/images/slider/slide-3.jpg" alt="slider image"></li>
                </ul>
                <ul class="the-bullets-dots" data-tesla-plugin="bullets">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                </ul>
            </div>
            <!-- =====================================================================
                                             END THE SLIDER
            ====================================================================== -->
            