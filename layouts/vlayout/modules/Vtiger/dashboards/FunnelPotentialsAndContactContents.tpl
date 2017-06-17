<div>
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
    "value": {$CONTACTS_CF->fields('NQUA')}
  }, {
    "title": "Qualificados",
	"value": {$CONTACTS_CF->fields('QUA')}
  }, {
    "title": "Oportunidades",
    "value": {$POTENTIALS_CF->fields('TOTAL_VENDA')}
  }, {
    "title": "Em prospecção",
    "value": {$POTENTIALS_CF->fields('PROSPECCAO_PROPOSTA')}
  }, {
    "title": "Em negociação",
    "value": {$POTENTIALS_CF->fields('NEGOCIACAO_PROPOSTA')}
  }, {
    "title": "Perdidas",
    "value": {$POTENTIALS_CF->fields('PER')}
  }, {
    "title": "Convertidas",
    "value": {$POTENTIALS_CF->fields('CON')}
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
{if $POTENTIALS_CF->fields('TOTAL_VENDA') == 0 && $CONTACTS_CF->fields('TOTAL_CONTATO') == 0}
	<div class="container-fluid">0 registros para o filtro selecionado!!!</div>
{else}
	<div id="chartdiv"></div>
{/if}
</div>