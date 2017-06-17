<?php /* Smarty version Smarty-3.1.7, created on 2016-12-21 10:00:21
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Settings\Workflows\Tasks\VTEntityMethodTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12957585a52b5b0dba6-74688192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1903a1450ea3648baca334fea3e2493b7350bbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Workflows\\Tasks\\VTEntityMethodTask.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12957585a52b5b0dba6-74688192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'WORKFLOW_MODEL' => 0,
    'ENTITY_METHODS' => 0,
    'TASK_OBJECT' => 0,
    'METHOD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_585a52b5b75b1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585a52b5b75b1')) {function content_585a52b5b75b1($_smarty_tpl) {?>
<div class="row-fluid"><div class="span2"><?php echo vtranslate('LBL_METHOD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 :</div><div class="span8"><?php $_smarty_tpl->tpl_vars['ENTITY_METHODS'] = new Smarty_variable($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getEntityMethods(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['ENTITY_METHODS']->value)){?><div class="alert alert-info"><?php echo vtranslate('LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }else{ ?><select name="methodName" class="chzn-select"><?php  $_smarty_tpl->tpl_vars['METHOD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['METHOD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_METHODS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['METHOD']->key => $_smarty_tpl->tpl_vars['METHOD']->value){
$_smarty_tpl->tpl_vars['METHOD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->methodName==$_smarty_tpl->tpl_vars['METHOD']->value){?>selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['METHOD']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['METHOD']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select><?php }?></div></div>	<?php }} ?>