<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 11:39:37
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Home\DashBoardContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183355862e905b994d2-74766812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb69473b14453412b494f4d4000bcd50bca98763' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Home\\DashBoardContents.tpl',
      1 => 1487417973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183355862e905b994d2-74766812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5862e905ce91d',
  'variables' => 
  array (
    'CURRENT_USER' => 0,
    'CONTACTS_CF' => 0,
    'POTENTIALS_CF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862e905ce91d')) {function content_5862e905ce91d($_smarty_tpl) {?>
<!-- Resources --><script src="https://www.amcharts.com/lib/3/amcharts.js"></script><script src="https://www.amcharts.com/lib/3/funnel.js"></script><script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script><link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /><script src="https://www.amcharts.com/lib/3/themes/light.js"></script><!-- Styles --><style>#chartdiv {width: 100%;height: 500px;}</style><!-- Chart code --><script>var chart = AmCharts.makeChart( "chartdiv", {"type": "funnel","theme": "light","dataProvider": [ {"title": "Website visits","value": 300}, {"title": "Downloads","value": 123}, {"title": "Requested prices","value": 98}, {"title": "Contacted","value": 72}, {"title": "Purchased","value": 35}, {"title": "Asked for support","value": 25}, {"title": "Purchased more","value": 18} ],"titleField": "title","marginRight": 160,"marginLeft": 15,"labelPosition": "center","funnelAlpha": 0.9,"valueField": "value","startX": 0,"neckWidth": "20%","startAlpha": 0,"outlineThickness": 1,"neckHeight": "30%","balloonText": "[[title]]:<b>[[value]]</b>","export": {"enabled": true}} );</script><!-- HTML --><div id="chartdiv"></div><div class="row gridster ready" style="width: 100%; padding-left: 90px; padding-top: 20px; padding-bottom: 20px;"><div class="col-xs-12 col-sm-5"><div class="panel-heading"><h1 class="panel-title" style="text-align: center; font-size: 30px"><strong>Contatos</strong></h1></div><div class="panel-body" style="text-align: center;"><div class="col-xs-12 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=82"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Contacts&view=List&viewname=93"><?php }?><div class="panel panel-danger border1px"><div class="panel-heading"><h3 class="panel-title">Não Qualificados</h3></div><div class="panel-body" style="text-align: center"><h1><?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('NQUA');?>
</h1></div></div></a></div><div class="col-xs-12 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=81"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Contacts&view=List&viewname=94"><?php }?><div class="panel panel-success border1px"><div class="panel-heading"><h3 class="panel-title">Qualificados</h3></div><div class="panel-body" style="text-align: center"><h1><?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('QUA');?>
</h1></div></div></a></div><div class="col-xs-6 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=84"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Contacts&view=List&viewname=96"><?php }?><div class="panel panel-default border1px"><div class="panel-heading"><h3 class="panel-title">Total</h3></div><div class="panel-body" style="text-align: center"><h1><?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('TOTAL_CONTATO');?>
</h1></div></div></a></div></div></div><div class="col-xs-12 col-sm-5"><div class="panel-heading"><h1 class="panel-title" style="text-align: center; font-size: 30px"><strong>Oportunidades</strong></h1></div><div class="panel-body" style="text-align: center"><div class="col-xs-12 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=88"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=List&viewname=90"><?php }?><div class="panel panel-danger border1px"><div class="panel-heading"><h3 class="panel-title">Não Convertidas</h3></div><div class="panel-body" style="text-align: center"><h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('PER');?>
</h1></div></div></a></div><div class="col-xs-12 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=85"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=List&viewname=91"><?php }?><div class="panel panel-success border1px"><div class="panel-heading"><h3 class="panel-title">Convertidas</h3></div><div class="panel-body" style="text-align: center"><h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('CON');?>
</h1></div></div></a></div><div class="col-xs-6 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=86"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=List&viewname=92"><?php }?><div id="pipeline_proposta" class="panel panel-default some border1px"><div class="panel-heading"><h3 id="pipeline_proposta_header" class="panel-title some">Pipeline</h3></div><div class="panel-body" style="text-align: center"><h1 id="pipeline_proposta_body" class="some"><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('PIPELINE_PROPOSTA');?>
</h1></div></div></a></div><div class="col-xs-6 col-sm-5" style="padding-top: 10px;"><?php if (($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H2')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H3')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H4')||($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('roleid')=='H9')){?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Reports&view=Detail&record=87"><?php }else{ ?><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=List&viewname=103"><?php }?><div class="panel panel-default border1px"><div class="panel-heading"><h3 class="panel-title">Total</h3></div><div class="panel-body" style="text-align: center"><h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('TOTAL_VENDA');?>
</h1></div></div></a></div></div></div></div><div class="footer"><div class="hidden-xs" id="chart_div"></div></div><?php }} ?>