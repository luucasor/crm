<?php /* Smarty version Smarty-3.1.7, created on 2017-01-20 12:32:31
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Potentials\DetailViewBlockView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275525862e402771c28-63168155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24f9eab5369ae6f9001bd76a11caefe6f179e15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Potentials\\DetailViewBlockView.tpl',
      1 => 1482857160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275525862e402771c28-63168155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5862e4027af28',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862e4027af28')) {function content_5862e4027af28($_smarty_tpl) {?>
<div class="container-fluid"><div class="panel panel-default"><div class="panel-heading"></div></br><div class="panel-body"><div class="collapse" id="collapseExample"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ContactInfoView.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>