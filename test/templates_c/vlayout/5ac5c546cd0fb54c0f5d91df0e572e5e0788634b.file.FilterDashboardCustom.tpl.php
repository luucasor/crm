<?php /* Smarty version Smarty-3.1.7, created on 2017-05-22 03:05:33
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\FilterDashboardCustom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2169258aa3a8c8e9de4-73007049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ac5c546cd0fb54c0f5d91df0e572e5e0788634b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\FilterDashboardCustom.tpl',
      1 => 1495422316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169258aa3a8c8e9de4-73007049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58aa3a8c8eb16',
  'variables' => 
  array (
    'CAS' => 0,
    'FILTER_DASHBOARD' => 0,
    'index' => 0,
    'CAS_LIST' => 0,
    'cas' => 0,
    'CAS_SELECTED' => 0,
    'PARTNER_LIST' => 0,
    'partner' => 0,
    'PARTNER_SELECTED' => 0,
    'RESPONSIBLE_LIST' => 0,
    'responsible' => 0,
    'RESPONSIBLE_SELECTED' => 0,
    'INITIALDATE' => 0,
    'FINALDATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aa3a8c8eb16')) {function content_58aa3a8c8eb16($_smarty_tpl) {?><!-- @@CUSTOM -->
<style>
	.collapse {
	  display: none;
	}
	.collapse.in {
	  display: block;
	}
</style>

<!--<input type="text" id="hidden_cas"         name="cas"         value="<?php echo $_smarty_tpl->tpl_vars['CAS']->value;?>
">
<input type="text" id="hidden_partner"     name="partner"     value="<?php echo $_smarty_tpl->tpl_vars['FILTER_DASHBOARD']->value['partner'];?>
">
<input type="text" id="hidden_responsible" name="responsible" value="<?php echo $_smarty_tpl->tpl_vars['FILTER_DASHBOARD']->value['responsible'];?>
">
<input type="text" id="hidden_initialdate" name="initialdate" value="<?php echo $_smarty_tpl->tpl_vars['FILTER_DASHBOARD']->value['initialdate'];?>
">
<input type="text" id="hidden_finaldate"   name="finaldate"   value="<?php echo $_smarty_tpl->tpl_vars['FILTER_DASHBOARD']->value['finaldate'];?>
">-->

<div class="collapse" id="collapseExample" style="padding-top:10px;width:800px; height:100%;">
    <table style="margin-left:30px; margin-bottom:30px;">
		<tr>
			<td style="padding-right:10px;">
				<label for="cas" class="control-label"><strong>CAS</strong></label>
				<div id="cas" class="selectContainer">
					<select id="selectcas" class="form-control" name="cas" onchange="getPartner(this.value)">
						<?php  $_smarty_tpl->tpl_vars['cas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cas']->_loop = false;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['index']->value] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CAS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cas']->key => $_smarty_tpl->tpl_vars['cas']->value){
$_smarty_tpl->tpl_vars['cas']->_loop = true;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['index']->value]->value = $_smarty_tpl->tpl_vars['cas']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['cas']->value['text'];?>
" <?php if ($_smarty_tpl->tpl_vars['cas']->value['text']==$_smarty_tpl->tpl_vars['CAS_SELECTED']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cas']->value['text'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</td>
			<td style="padding-right:10px;">
				<label for="parceiro" class="control-label"><strong>PARCEIRO</strong></label>
				<div id="parceiro" class="selectContainer">
					<select id="selectparceiro" class="form-control" name="parceiro" onchange="getResponsible(this.value)">
						<?php if (count($_smarty_tpl->tpl_vars['PARTNER_LIST']->value)==0){?>
							<option value="all" selected>Todos</option>
						<?php }else{ ?>
							<?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partner']->_loop = false;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['index']->value] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PARTNER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value){
$_smarty_tpl->tpl_vars['partner']->_loop = true;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['index']->value]->value = $_smarty_tpl->tpl_vars['partner']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['partner']->value['value']==$_smarty_tpl->tpl_vars['PARTNER_SELECTED']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['partner']->value['text'];?>
</option>
							<?php } ?>
						<?php }?>
					</select>
				</div>
			</td>
			<td style="padding-right:10px;">
				<label for="responsavel" class="control-label"><strong>RESPONSÁVEL</strong></label>
				<div id="responsavel" class="selectContainer">
					<select id="selectresponsavel" class="form-control" name="responsavel">
						<?php if (count($_smarty_tpl->tpl_vars['RESPONSIBLE_LIST']->value)==0){?>
							<option value="all" selected>Todos</option>
						<?php }else{ ?>
							<?php  $_smarty_tpl->tpl_vars['responsible'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['responsible']->_loop = false;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['index']->value] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RESPONSIBLE_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['responsible']->key => $_smarty_tpl->tpl_vars['responsible']->value){
$_smarty_tpl->tpl_vars['responsible']->_loop = true;
 $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['index']->value]->value = $_smarty_tpl->tpl_vars['responsible']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['responsible']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['responsible']->value['text']==$_smarty_tpl->tpl_vars['RESPONSIBLE_SELECTED']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['responsible']->value['text'];?>
</option>
							<?php } ?>
						<?php }?>
					</select>
				</div>
			</td>
		</tr>
		<tr>
			<td style="padding-right:10px;">
				<label for="datainicial" class="control-label"><strong>DATA INICIAL</strong></label>
				<input id="datainicial" type="date" name="datainicial" <?php if ($_smarty_tpl->tpl_vars['INITIALDATE']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['INITIALDATE']->value;?>
"<?php }?>>
			</td>
			<td style="padding-right:10px;">
				<label for="datafinal" class="control-label"><strong>DATA FINAL</strong></label>
				<input id="datafinal" type="date" name="datafinal" <?php if ($_smarty_tpl->tpl_vars['FINALDATE']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['FINALDATE']->value;?>
"<?php }?>>
			</td>
			<td style="position:absolute; left:492px; top:95px;">
				<input id="applyfilter" class="btn btn-primary" type="button" name="aplicar" value="Aplicar filtro">
			</td>
		</tr>
		<tr>
			<td style="padding-right:10px;">
				<?php if ($_smarty_tpl->tpl_vars['INITIALDATE']->value==''&&$_smarty_tpl->tpl_vars['FINALDATE']->value==''){?>
					<input id="accumulated" type="checkbox" name="acumulado" onclick="enableDates(this.checked)" checked>&nbspAcumulado<br>
					<script>
							document.getElementById("datainicial").disabled = true;
							document.getElementById("datafinal").disabled = true;
					</script>
				<?php }else{ ?>
					<input id="accumulated" type="checkbox" name="acumulado" onclick="enableDates(this.checked)">&nbspAcumulado<br>
					<script>
							document.getElementById("datainicial").disabled = false;
							document.getElementById("datafinal").disabled = false;
					</script>
				<?php }?>
			</td>
		</tr>
	</table>
</div>
<script>
	validateCas();
	validatePartner();

	function validateCas(){
		var cas = document.getElementById("selectcas").value;
		if(cas == "all"){
			document.getElementById("selectparceiro").disabled = true;
			$('#selectparceiro option').prop('selected', function() {
				return this.defaultSelected;
			});
			document.getElementById("selectresponsavel").disabled = true;
			$('#selectresponsavel option').prop('selected', function() {
				return this.defaultSelected;
			});
			return false;
		} else {
			document.getElementById("selectparceiro").disabled = false;
			document.getElementById("selectresponsavel").disabled = true;
			return true;
		}
	}

	function validatePartner(){
		var partner = document.getElementById("selectparceiro").value;
		if(partner == "all"){
			document.getElementById("selectresponsavel").disabled = true;
			$('#selectresponsavel option').prop('selected', function() {
				return this.defaultSelected;
			});
			return false;
		} else {
			document.getElementById("selectresponsavel").disabled = false;
			return true;
		}
	}

	function getPartner(value){
	
		if(validateCas()){
			var params = {
				'module': app.getModuleName(),
				'action': "FilterWidgetAjax",
				'cas' : value,
				'mode': "getPartners"
			};

			AppConnector.request(params).then(
					function (data) {
						var items = data.result['partners'];

						$('#selectparceiro').empty();
						$.each(items, function (i, item) {
							$('#selectparceiro').append($('<option>', { 
								value: item.value,
								text : item.text 
							}));
						});
					}
			);
		}
	}

	function getResponsible(value){
		if(validatePartner()){
			var params = {
				'module': app.getModuleName(),
				'action': "FilterWidgetAjax",
				'partner' : value,
				'mode': "getResponsibles"
			};
			AppConnector.request(params).then(
					function (data) {
						var items = data.result['responsibles'];

						$('#selectresponsavel').empty();
						$.each(items, function (i, item) {
							$('#selectresponsavel').append($('<option>', { 
								value: item.value,
								text : item.text 
							}));
						});
					}
			);
		}
	}

	$("#applyfilter" ).click(function() {
		if(checkDates()){
			applyFilter();
		}
	});

	function applyFilter() {
		var cas = document.getElementById("selectcas").value;
		var partner = document.getElementById("selectparceiro").value;
		var responsible = document.getElementById("selectresponsavel").value;
		var initialdate = document.getElementById("datainicial").value;
		var finaldate = document.getElementById("datafinal").value;

		var params = {
			'module': app.getModuleName(),
			'action': "FilterWidgetAjax",
			'cas' : cas,
			'partner' : partner,
			'responsible' : responsible,
			'initialdate' : initialdate,
			'finaldate' : finaldate,
			'mode': "applyFilter"
		};

		AppConnector.request(params).then(
				
				function (data) {
					location.reload(false);
					document.getElementById("datainicial").value = initialdate;
					document.getElementById("datafinal").value = finaldate;
				}
		);
	}

	function checkDates() {
		var initialdate = document.getElementById("datainicial").value;
		var finaldate = document.getElementById("datafinal").value;

		if(initialdate != null && finaldate != null){
			if (initialdate > finaldate) {
				alert("Data inicial não pode ser maior que a data final!!");
				return false;
			}
		}
		return true
	}

	function enableDates(value) {
		if(value) {
			document.getElementById("datainicial").value = "";
			document.getElementById("datafinal").value = "";
			document.getElementById("datainicial").disabled = true;
			document.getElementById("datafinal").disabled = true;
		} else {
			document.getElementById("datainicial").disabled = false;
			document.getElementById("datafinal").disabled = false;
		}
	}
</script><?php }} ?>