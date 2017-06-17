<?php /* Smarty version Smarty-3.1.7, created on 2016-09-14 14:23:34
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\MailManager\Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312557d95d66c2b2a0-96748584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da02517731bad6e122eaea53f2bc98559d2edabb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\MailManager\\Mainui.tpl',
      1 => 1473702382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312557d95d66c2b2a0-96748584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57d95d66c5de0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d95d66c5de0')) {function content_57d95d66c5de0($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>