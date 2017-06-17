<?php /* Smarty version Smarty-3.1.7, created on 2017-01-20 12:01:15
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Accounts\EditVehiclesView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139425881fc0b9f8257-90754541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e55404d2a544a61e1ac99c1e819ae18293815d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Accounts\\EditVehiclesView.tpl',
      1 => 1484315069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139425881fc0b9f8257-90754541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VEHICLES' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5881fc0ba18f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881fc0ba18f5')) {function content_5881fc0ba18f5($_smarty_tpl) {?><table style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit">
  <thead>
    <tr>
      <th class="blockHeader" colspan="4">Informações Veículos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <table>
          <tr>
            <td class="fieldLabel">
              <label class="muted pull-right marginRight10px" width="10px;">Tipo de Veículo</label>
            </td>
            <td colspan="2">
              <select id="tipo">
			    <option value="Bicicleta">Bicicleta</option>
                <option value="Caminhão">Caminhão</option>
                <option value="Carro">Carro</option>
                <option value="Embarcacao">Embarcação</option>
				<option value="Jet Ski">Jet Ski</option>
                <option value="Linha Amarela">Linha Amarela</option>
                <option value="Moto">Moto</option>
                <option value="Quadriciclo">Quadriciclo</option>
                <option value="Utilitário">Utilitário</option>
              </select>
            </td>
          </tr>
          <tr>
            <td class="fieldLabel">
              <label class="muted pull-right marginRight10px">Modelo</label>
            </td>
            <td colspan="2">
              <input type="text" id="modelo" value="">
            </td>
          </tr>
          <tr>
            <td class="fieldLabel">
              <label class="muted pull-right marginRight10px">Placa</label>
            </td>
            <td>
              <input type="text" id="placa" value=""/></br>
            </td>
          </tr>
          <tr>
            <td class="fieldLabel">
              <label class="muted pull-right marginRight10px">Ano</label>
            </td>
            <td>
              <input type="text" id="ano" value=""/></br>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input onclick="add()" style="margin-left:32%;" class="btn btn-default" type="button" name="btn-veiculo" value="Adicionar"/>
            </td>
          </tr>
        </table>
      </td>


      <td>
          <table id="veiculos-table" name="veiculos-table" class="table table-striped table-bordered" cellspacing="0">
          <thead>
              <tr>
                  <th>Tipo de Veículo</th>
                  <th>Modelo</th>
                  <th>Placa</th>
                  <th>Ano</th>
                  <th style='width: 5%;'></th>
              </tr>
          </thead>
          <tbody>
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VEHICLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <tr>
                      <td><input type='text' style='width: 100px;' name='vehicles[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][type]' value='<?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>
' readonly='true'/></td>
                      <td><input type='text' style='width: 200px;' name='vehicles[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][model]' value='<?php echo $_smarty_tpl->tpl_vars['item']->value->getModel();?>
' readonly='true'/></td>
                      <td><input type='text' style='width: 100px;' name='vehicles[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][car_plate]' value='<?php echo $_smarty_tpl->tpl_vars['item']->value->getCarPlate();?>
' readonly='true'/></td>
                      <td><input type='text' style='width: 100px;' name='vehicles[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][year]' value='<?php echo $_smarty_tpl->tpl_vars['item']->value->getYear();?>
' readonly='true'/></td>
                      <td style="width: 5px;">
                        <i class="icon-remove-sign" onclick="RemoveTableRow(this)"/>
                      </td>
                  </tr>
              <?php } ?>
          </tbody>
          <tfoot>
            <tr>
                <td id="nreg" style="text-align: left;" class="fieldLabel" colspan="5"></td>
            </tr>
          </tfoot>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<?php }} ?>