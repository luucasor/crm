<?php /* Smarty version Smarty-3.1.7, created on 2016-09-22 20:45:36
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Settings\ModuleDesigner\Export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142057e442f0bdf2b2-88813083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0965f90f96c9841d840464a9b44f235eb6cbaefe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\ModuleDesigner\\Export.tpl',
      1 => 1474577129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142057e442f0bdf2b2-88813083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57e442f0be712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e442f0be712')) {function content_57e442f0be712($_smarty_tpl) {?><button onclick="md_makePackage(false)"><?php echo vtranslate('LBL_MAKE_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><br /><br />
<button onclick="md_makePackage(true)"><?php echo vtranslate('LBL_CREATE_AND_INSTALL_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }} ?>