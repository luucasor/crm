<?php /* Smarty version Smarty-3.1.7, created on 2016-09-16 12:26:49
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Google\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1110557dbe509e17e94-83344079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd2b2e0dfc0e15f5bb187f66d4deb78928a1cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Google\\map.tpl',
      1 => 1473702389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110557dbe509e17e94-83344079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57dbe509e4d49',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dbe509e4d49')) {function content_57dbe509e4d49($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>