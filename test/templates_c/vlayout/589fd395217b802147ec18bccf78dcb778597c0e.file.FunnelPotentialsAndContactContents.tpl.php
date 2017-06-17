<?php /* Smarty version Smarty-3.1.7, created on 2017-05-19 19:35:15
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\FunnelPotentialsAndContactContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3220758a90761966c17-06911288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '589fd395217b802147ec18bccf78dcb778597c0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\FunnelPotentialsAndContactContents.tpl',
      1 => 1495222511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3220758a90761966c17-06911288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58a907619ad48',
  'variables' => 
  array (
    'CONTACTS_CF' => 0,
    'POTENTIALS_CF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a907619ad48')) {function content_58a907619ad48($_smarty_tpl) {?><div>
	<script src="layouts/vlayout/modules/Vtiger/resources/dashboards/amcharts/amcharts.js"></script>
	<script src="layouts/vlayout/modules/Vtiger/resources/dashboards/amcharts/funnel.js"></script>
	<script src="layouts/vlayout/modules/Vtiger/resources/dashboards/amcharts/plugins/export/export.min.js"></script>
	<script src="layouts/vlayout/modules/Vtiger/resources/dashboards/amcharts/themes/light.js"></script>
	<link rel="stylesheet" href="layouts/vlayout/modules/Vtiger/resources/dashboards/amcharts/plugins/export/export.css" type="text/css" media="all" />

	<!-- Styles -->
	<style>
	#chartdiv {
	  width: 100%;
	  height: 400px;
	}				
	</style>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "funnel",
  "theme": "light",
  "dataProvider": [ {
    "title": "Não Qualificados",
    "value": <?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('NQUA');?>

  }, {
    "title": "Qualificados",
	"value": <?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('QUA');?>

  }, {
    "title": "Oportunidades",
    "value": <?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('TOTAL_VENDA');?>

  }, {
    "title": "Em prospecção",
    "value": <?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('PROSPECCAO_PROPOSTA');?>

  }, {
    "title": "Em negociação",
    "value": <?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('NEGOCIACAO_PROPOSTA');?>

  }, {
    "title": "Perdidas",
    "value": <?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('PER');?>

  }, {
    "title": "Convertidas",
    "value": <?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('CON');?>

  } ],
  "titleField": "title",
  "marginRight": 135,
  "marginLeft": 5,
  "labelPosition": "right",
  "funnelAlpha": 1.3,
  "valueField": "value",
  "startX": 0,
  "neckWidth": "20%",
  "startAlpha": 5,
  "outlineThickness": 4,
  "neckHeight": "20%",
  "balloonText": "[[title]]:<b>[[value]]</b>",
  "export": {
    "enabled": false
  }
} );
</script>
<?php if ($_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('TOTAL_VENDA')==0&&$_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('TOTAL_CONTATO')==0){?>
	<div class="container-fluid">0 registros para o filtro selecionado!!!</div>
<?php }else{ ?>
	<div id="chartdiv"></div>
<?php }?>
</div><?php }} ?>