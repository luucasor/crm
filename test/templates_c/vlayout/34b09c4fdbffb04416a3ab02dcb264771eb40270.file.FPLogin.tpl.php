<?php /* Smarty version Smarty-3.1.7, created on 2017-02-16 18:12:40
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Users\FPLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2156558a5eb98135ab5-95136095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b09c4fdbffb04416a3ab02dcb264771eb40270' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\FPLogin.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156558a5eb98135ab5-95136095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'USERNAME' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58a5eb9817278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5eb9817278')) {function content_58a5eb9817278($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?> 
    Error, please retry setting the password!! 
<?php }else{ ?> 
<h4>Loading .... </h4>
<form class="form-horizontal" name="login" id="login" method="post" action="../../../index.php?module=Users&action=Login&mode=reset">
	<input type=hidden name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<script type="text/javascript">
    function autoLogin () {
        var form = document.getElementById("login");
        form.submit();
    }
    window.onload = autoLogin;
</script>
<?php }?><?php }} ?>