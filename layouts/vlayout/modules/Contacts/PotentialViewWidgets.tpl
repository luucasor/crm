{* Smarty Template*}
{strip}
    <div class="summaryWidgetContainer">
        <div>
            <div class="widget_header row-fluid">
                <span class="span8 margin0px"><h4>Oportunidades</h4></span>
            </div>
            <div class="widget_contents">
                <table id="oportunidades-table" name="oportunidades-table" class="table table-striped table-bordered" cellspacing="0" heigth="100%">
                    <thead>
                        <tr>
							<th>Identificador</th>
                            <th>Nº</th>
                            <th>Oportunidade</th>
                            <th>Data Fechamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach key=key item=item from=$POTENTIALS}
                            <tr>
								<td style='width: 100px;'><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=Detail&record={$item['potentialid']}">{$item['potentialid']}</a></td>
                                <td style='width: 100px;'>{$item['potential_no']}</td>
                                <td style='width: 100px;'>{$item['potentialname']}</td>
                                <td style='width: 100px;'>{$item['closingdate']}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>                    
{/strip}
