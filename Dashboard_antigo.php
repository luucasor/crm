<?php
require_once('include/database/PearDatabase.php');
$adb = PearDatabase::getInstance();

$contactsubdetails = $adb->pquery("
SELECT
    DISTINCT

	(SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Outro' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS OUTROS,
		
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Loja' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS LOJA,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Visitantes' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS VISITANTES,		
		
		
		
		
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'DBM' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS DBM,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Site' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS SITE,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Chat Online' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS CHAT,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Facebook' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS FACE,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Youtube' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS YT,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Linkedin' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS LIN,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Instagram' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS INSTA,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Twitter' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS TWI,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Participação em eventos' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PE,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'PDVs' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PDV,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Indicações' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS IND,
    
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Landingpage de Produto' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS LPP,
    
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Parceiro' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PAR,
    
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Mídia tradicional (outdoor/fachada/rádio)' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS MT,
    
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Pesquisa de Satisfação' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PS,
    
    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        CON.leadsource = 'Pesquisa Google' AND
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS PG,

    (SELECT COUNT(*) 
     FROM vtiger_contactsubdetails AS CON
	  INNER JOIN vtiger_crmentity AS CRM ON (CON.contactsubscriptionid = CRM.crmid)
     WHERE
        DAY(CRM.createdtime) = DAY(CURDATE()) AND
        MONTH(CRM.createdtime) = MONTH(CURDATE()) AND 
        YEAR(CRM.createdtime) = YEAR(CURDATE())) AS TOTAL_CONTATO  
    

FROM vtiger_contactsubdetails WHERE 1
");

$contactscf = $adb->pquery("
SELECT
    DISTINCT
        (SELECT COUNT(*)
         FROM vtiger_contactscf AS CON
         	INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
         WHERE
            CON.cf_893 = 'Qualificado' AND
            DAY(ENT.createdtime) = DAY(CURDATE()) AND
        	MONTH(ENT.createdtime) = MONTH(CURDATE()) AND 
        	YEAR(ENT.createdtime) = YEAR(CURDATE())
        ) as QUA,
        
        (SELECT COUNT(*)
         FROM vtiger_contactscf AS CON
         	INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
         WHERE
            CON.cf_893 = 'Não Qualificado' AND
            DAY(ENT.createdtime) = DAY(CURDATE()) AND
        	MONTH(ENT.createdtime) = MONTH(CURDATE()) AND 
        	YEAR(ENT.createdtime) = YEAR(CURDATE())

        ) as NQUA,
        
        (SELECT COUNT(*)
         FROM vtiger_contactscf AS CON
         	INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
         WHERE
            CON.cf_893 = 'Pipeline' AND
            DAY(ENT.createdtime) = DAY(CURDATE()) AND
        	MONTH(ENT.createdtime) = MONTH(CURDATE()) AND 
        	YEAR(ENT.createdtime) = YEAR(CURDATE())

        ) as PIPELINE_CONTATO,
        
        (SELECT COUNT(*)
         FROM vtiger_contactscf AS CON
            INNER JOIN vtiger_crmentity AS ENT ON (CON.contactid = ENT.crmid)
         WHERE 
            DAY(ENT.createdtime) = DAY(CURDATE()) AND
            MONTH(ENT.createdtime) = MONTH(CURDATE()) AND 
            YEAR(ENT.createdtime) = YEAR(CURDATE())
         ) as TOTAL_CONTATO
FROM vtiger_contactscf WHERE 1");

$potentialscf = $adb->pquery("
SELECT
    DISTINCT
        (SELECT COUNT(*)
         FROM vtiger_potentialscf AS PON
         	INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
         WHERE
            PON.cf_987 = 'Convertida em Venda' AND
            DAY(ENT.modifiedtime) = DAY(CURDATE()) AND
            MONTH(ENT.modifiedtime) = MONTH(CURDATE()) AND 
            YEAR(ENT.modifiedtime) = YEAR(CURDATE())

        ) as CON,
        
        (SELECT COUNT(*)
         FROM vtiger_potentialscf AS PON
         	INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
         WHERE
            PON.cf_987 = 'Perdida' AND
            DAY(ENT.modifiedtime) = DAY(CURDATE()) AND
            MONTH(ENT.modifiedtime) = MONTH(CURDATE()) AND 
            YEAR(ENT.modifiedtime) = YEAR(CURDATE())

        ) as PER,
        
        (SELECT COUNT(*)
         FROM vtiger_potentialscf AS PON
         	INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
         WHERE
            PON.cf_987 = 'Pipeline' AND
            DAY(ENT.modifiedtime) = DAY(CURDATE()) AND
            MONTH(ENT.modifiedtime) = MONTH(CURDATE()) AND 
            YEAR(ENT.modifiedtime) = YEAR(CURDATE())

        ) as PIPELINE_PROPOSTA,
        
        (SELECT COUNT(*)
         FROM vtiger_potentialscf AS PON
         	INNER JOIN vtiger_crmentity AS ENT ON (PON.potentialid = ENT.crmid)
         WHERE
            DAY(ENT.modifiedtime) = DAY(CURDATE()) AND
            MONTH(ENT.modifiedtime) = MONTH(CURDATE()) AND 
            YEAR(ENT.modifiedtime) = YEAR(CURDATE())
        ) as TOTAL_VENDA
FROM vtiger_contactscf WHERE 1");
?>
<html>
    <head>
        <title>Dashboard</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <style type="text/css">
            .some {
                color: black;
            }
            .aparece {
                color: red;
            }
            .footer {
                position:absolute;
                bottom:0;
                width:100%;
                margin-bottom: 60px;
            }
        </style>

        <script type="text/javascript">

            window.onload = function () {
                setTimeout("window.location='Dashboard.php'", 300000);
            }

            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                    ['Element', '', {role: 'style'}],
                    ['Chat Online', <?= $contactsubdetails->fields('CHAT') ?>, 'orange'], // RGB value
                    ['DBM', <?= $contactsubdetails->fields('DM') ?>, 'silver'], // English color name
                    ['Facebook', <?= $contactsubdetails->fields('FACE') ?>, 'blue'],
                    ['Formulário de Contato', <?= $contactsubdetails->fields('FC') ?>, 'color: #e5e4e2'], // CSS-style declaration
                    ['Indicações', <?= $contactsubdetails->fields('IND') ?>, 'green'],
                    ['Landingpage de Produto', <?= $contactsubdetails->fields('LPP') ?>, 'red'],
                    ['Mídia tradicional', <?= $contactsubdetails->fields('MT') ?>, 'black'],
                    ['PDVs', <?= $contactsubdetails->fields('PDV') ?>, 'DarkMagenta'],
                    ['Pesquisa de Satisfação', <?= $contactsubdetails->fields('PS') ?>, 'DarkCyan'],
                    ['Site', <?= $contactsubdetails->fields('SITE') ?>, 'DarkOliveGreen3'],
                    ['Youtube', <?= $contactsubdetails->fields('YT') ?>, 'Salmon1'],
                    ['Linkedin', <?= $contactsubdetails->fields('LIN') ?>, 'Turquoise1'],
                    ['Instagram', <?= $contactsubdetails->fields('INSTA') ?>, 'Thistle'],
                    ['Twitter', <?= $contactsubdetails->fields('TWI') ?>, 'Gold'],
                    ['Participação em eventos', <?= $contactsubdetails->fields('PE') ?>, 'LightGray'],
                    ['Parceiro', <?= $contactsubdetails->fields('PAR') ?>, 'DarkSlateGray'],
                    ['Pesquisa Google', <?= $contactsubdetails->fields('PG') ?>, 'DodgerBlue'],
					['Outros', <?= $contactsubdetails->fields('OUTROS') ?>, 'LightPink'],
					['Loja', <?= $contactsubdetails->fields('LOJA') ?>, 'LightGreen'],
					['Visitantes', <?= $contactsubdetails->fields('VISITANTES') ?>, 'LightBlue'],
                ]);

                data.sort({column: 1, desc: true});

                var comboChart_options = {
                    width: '100%',
                    height: '100%',
                    title: 'Fonte dos Contatos',
                    vAxis: {title: 'Registros'},
                    seriesType: 'bars',
                    bar: {groupWidth: "100%"},
                    sortAscending: true,
                    series: {1: {type: 'line'}}
                };
                var comboChart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                comboChart.draw(data, comboChart_options);

            }



            alertScreen();

            function alertScreen() {
                if (<?= $contactscf->fields('PIPELINE_CONTATO') ?> == 0) {
                    setInterval("apareceContato()", 500);
                }
                if (<?= $potentialscf->fields('PIPELINE_PROPOSTA') ?> == 0) {
                    setInterval("apareceProposta()", 600);
                }
            }

            function apareceContato() {
                if (document.getElementById("pipeline_contato_body").className == "some") {
                    document.getElementById("pipeline_contato_body").className = "aparece";
                    document.getElementById("pipeline_contato_header").className = "panel-title aparece";
                    document.getElementById("pipeline_contato").className = "panel panel-danger";

                } else {
                    document.getElementById("pipeline_contato_body").className = "some";
                    document.getElementById("pipeline_contato_header").className = "panel-title some";
                    document.getElementById("pipeline_contato").className = "panel panel-default some";
                }
            }

            function apareceProposta() {
                if (document.getElementById("pipeline_proposta_body").className == "some") {
                    document.getElementById("pipeline_proposta_body").className = "aparece";
                    document.getElementById("pipeline_proposta_header").className = "panel-title aparece";
                    document.getElementById("pipeline_proposta").className = "panel panel-danger";

                } else {
                    document.getElementById("pipeline_proposta_body").className = "some";
                    document.getElementById("pipeline_proposta_header").className = "panel-title some";
                    document.getElementById("pipeline_proposta").className = "panel panel-default some";
                }
            }


        </script>
    </head>
    <body style="margin-top: 30px;">
    <tbody>
    <div class="col-xs-12 col-sm-6">
        <div class="panel-heading">
            <h1 class="panel-title" style="text-align: center; font-size: 30px"><strong>Contatos</strong></h1>
        </div>
        <div class="panel-body" style="text-align: center;">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Qualificados</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1><?= $contactscf->fields('QUA') ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Não Qualificados</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1><?= $contactscf->fields('NQUA') ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div id="pipeline_contato" class="panel panel-default some">
                    <div class="panel-heading">
                        <h3 id="pipeline_contato_header" class="panel-title some">Pipeline</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1 id="pipeline_contato_body" class="some"><?= $contactscf->fields('PIPELINE_CONTATO') ?></h1>
                    </div>                                                
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Total</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1><?= $contactscf->fields('TOTAL_CONTATO') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="panel-heading">
            <h1 class="panel-title" style="text-align: center; font-size: 30px"><strong>Oportunidades</strong></h1>
        </div>
        <div class="panel-body" style="text-align: center">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Convertidas</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1><?= $potentialscf->fields('CON') ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Não Convertidas</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1><?= $potentialscf->fields('PER') ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div id="pipeline_proposta" class="panel panel-default some">
                    <div class="panel-heading">
                        <h3 id="pipeline_proposta_header" class="panel-title some">Pipeline</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1 id="pipeline_proposta_body" class="some"><?= $potentialscf->fields('PIPELINE_PROPOSTA') ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Total</h3>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        <h1><?= $potentialscf->fields('TOTAL_VENDA') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</tbody>
<div class="footer">
    <div class="hidden-xs" id="chart_div"></div>
</div>
</body>
</html>
