<?php /* Smarty version Smarty-3.1.7, created on 2017-04-30 20:15:10
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Contacts\VehiclesViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264585853dd9777c650-21736538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647e63312f4f736db28005775d84d9b10ef6873a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Contacts\\VehiclesViewWidgets.tpl',
      1 => 1493583300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264585853dd9777c650-21736538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5853dd97795fe',
  'variables' => 
  array (
    'VEHICLES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5853dd97795fe')) {function content_5853dd97795fe($_smarty_tpl) {?>
<div class="summaryWidgetContainer"><div><div class="widget_header row-fluid"><span class="span8 margin0px"><h4>Veículos</h4></span></div><div class="widget_contents"><table id="veiculos-table" name="veiculos-table" class="table table-striped table-bordered" cellspacing="0" heigth="100%"><thead><tr><th>Tipo</th><th>Modelo</th><th>Placa</th><th>Ano</th><th>Oportunidade</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VEHICLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><tr><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getModel();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getCarPlate();?>
</td><td style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['item']->value->getYear();?>
</td><td style='width: 100px;'><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['item']->value->getIdPotential();?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->getIdPotential();?>
</a></td></tr><?php } ?></tbody><tfoot><tr><td id="nreg" style="text-align: left;" class="fieldLabel" colspan="5"></td></tr></tfoot></table></div></div></div>
<?php }} ?>