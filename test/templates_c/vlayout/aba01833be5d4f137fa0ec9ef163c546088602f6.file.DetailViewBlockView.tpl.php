<?php /* Smarty version Smarty-3.1.7, created on 2017-01-20 12:01:10
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Accounts\DetailViewBlockView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209305881fc06949990-95630506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba01833be5d4f137fa0ec9ef163c546088602f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Accounts\\DetailViewBlockView.tpl',
      1 => 1481892596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209305881fc06949990-95630506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VEHICLES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5881fc069a005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881fc069a005')) {function content_5881fc069a005($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewBlockView.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<table id="veiculos-table" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit"><thead><tr><th colspan="4">Informações Veículos</th></tr><tr><th>Tipo</th><th>Modelo</th><th>Placa</th><th>Ano</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VEHICLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><tr><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getModel();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getCarPlate();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getYear();?>
</td></tr><?php } ?></tbody><tfoot><tr><td id="nreg" style="text-align: left;" class="fieldLabel" colspan="4"><?php echo count($_smarty_tpl->tpl_vars['VEHICLES']->value);?>
 Veículo(s)</td></tr></tfoot></table>
<?php }} ?>