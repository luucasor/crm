<?php /* Smarty version Smarty-3.1.7, created on 2017-01-20 12:10:15
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Potentials\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1495857d7099d0f1657-44852681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88a4fd23746785a261c3a62124a34d3183436e2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Potentials\\DetailViewSummaryContents.tpl',
      1 => 1482857160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495857d7099d0f1657-44852681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d7099d0f995',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d7099d0f995')) {function content_57d7099d0f995($_smarty_tpl) {?>
<div class="container-fluid"><div class="panel panel-default"><div class="panel-heading"></div></br><div class="panel-body"><div class="collapse" id="collapseExample"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ContactInfoView.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>