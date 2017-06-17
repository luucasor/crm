{* Smarty Template*}
{strip}
    <div class="summaryWidgetContainer">
        <div>
            <div class="widget_header row-fluid">
                <span class="span8 margin0px"><h4>Veículos</h4></span>
            </div>
            <div class="widget_contents">
                <table id="veiculos-table" name="veiculos-table" class="table table-striped table-bordered" cellspacing="0" heigth="100%">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Modelo</th>
                            <th>Placa</th>
                            <th>Ano</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach key=key item=item from=$VEHICLES}
                            <tr>
                                <td style='width: 100px;'>{$item->getType()}</td>
                                <td style='width: 100px;'>{$item->getModel()}</td>
                                <td style='width: 100px;'>{$item->getCarPlate()}</td>
                                <td style='width: 100px;'>{$item->getYear()}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td id="nreg" style="text-align: left;" class="fieldLabel" colspan="5"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
{/strip}
