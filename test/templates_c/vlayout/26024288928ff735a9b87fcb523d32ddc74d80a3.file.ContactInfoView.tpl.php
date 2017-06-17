<?php /* Smarty version Smarty-3.1.7, created on 2017-05-23 13:02:44
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Potentials\ContactInfoView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108955862e2449943c4-08665326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26024288928ff735a9b87fcb523d32ddc74d80a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Potentials\\ContactInfoView.tpl',
      1 => 1495544555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108955862e2449943c4-08665326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5862e2449cdbe',
  'variables' => 
  array (
    'CONTACT' => 0,
    'VEHICLES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862e2449cdbe')) {function content_5862e2449cdbe($_smarty_tpl) {?>
<table id="contactInfo-table" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered"><thead><tr><th colspan="5">Informações do Contato</th></tr></thead><tbody><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Nome</label></td><td style="border-top: 1px solid #ddd" colspan="4"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getFirstname();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Email</label></td><td style="border-top: 1px solid #ddd" colspan="2"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getEmail();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Celular</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getMobile();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Conversão</label></td><td style="border-top: 1px solid #ddd" colspan="2"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getLeadsource();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Telefone Fixo</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getPhone();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Status do Contato</label></td><td style="border-top: 1px solid #ddd" colspan="2"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getStatus();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Entidade Gestora</label></td><td style="border-top: 1px solid #ddd"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getEntity();?>
</span></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Classificação</label></td><td style="border-top: 1px solid #ddd" colspan="2"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getClassification();?>
</span></td><td class="fieldLabel" style="border-top: 1px solid #ddd"></td><td style="border-top: 1px solid #ddd"></td></tr><tr><td class="fieldLabel" style="border-top: 1px solid #ddd"><label class="muted pull-right marginRight10px" width="10px;">Descrição</label></td><td style="border-top: 1px solid #ddd" colspan="4"><span type="text" name="" disabled><?php echo $_smarty_tpl->tpl_vars['CONTACT']->value->getDescription();?>
</span></td></tr><tr><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Tipo de Veículo</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Modelo</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Placa</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Ano</label></td><td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd"><label class="muted marginRight10px" width="10px;">Oportunidade</label></td></tr><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VEHICLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><tr><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>
</td><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getModel();?>
</td><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getCarPlate();?>
</td><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getYear();?>
</td><td style="text-align: center;"><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['item']->value->getIdPotential();?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->getIdPotential();?>
</a></td></tr><?php } ?><tr><td class="fieldLabel" id="nreg" style="border-top: 1px solid #ddd;text-align: left;" colspan="5"><label class="muted pull-right marginRight10px" width="10px;"><?php echo count($_smarty_tpl->tpl_vars['VEHICLES']->value);?>
 Veículo(s)</label></td></tr></tbody></table><?php }} ?>