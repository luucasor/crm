{* Smarty Template*}
{strip}
    {include file="DetailViewBlockView.tpl"|@vtemplate_path:'Vtiger'}
    <table id="veiculos-table" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit">
        <thead>
            <tr>
                <th colspan="4">Informações Veículos</th>
            </tr>
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
                <td id="nreg" style="text-align: left;" class="fieldLabel" colspan="4">{count($VEHICLES)} Veículo(s)</td>
            </tr>
        </tfoot>
    </table>
{/strip}
