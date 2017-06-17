{* Smarty Template*}
{strip}
<table id="contactInfo-table" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered">
    <thead>
        <tr>
            <th colspan="5">Informações do Contato</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Nome</label>
            </td>
            <td style="border-top: 1px solid #ddd" colspan="4">
                <span type="text" name="" disabled>{$CONTACT->getFirstname()}</span>
            </td>
        </tr>
        <tr>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Email</label>
            </td>
            <td style="border-top: 1px solid #ddd" colspan="2">
                <span type="text" name="" disabled>{$CONTACT->getEmail()}</span>
            </td>

            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Celular</label>
            </td>
            <td style="border-top: 1px solid #ddd">
                <span type="text" name="" disabled>{$CONTACT->getMobile()}</span>
            </td>
        </tr>

        <tr>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Conversão</label>
            </td>
            <td style="border-top: 1px solid #ddd" colspan="2">
                <span type="text" name="" disabled>{$CONTACT->getLeadsource()}</span>
            </td>

            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Telefone Fixo</label>
            </td>
            <td style="border-top: 1px solid #ddd">
                <span type="text" name="" disabled>{$CONTACT->getPhone()}</span>
            </td>
        </tr>

        <tr>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Status do Contato</label>
            </td>
            <td style="border-top: 1px solid #ddd" colspan="2">
                <span type="text" name="" disabled>{$CONTACT->getStatus()}</span>
            </td>

            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Entidade Gestora</label>
            </td>
            <td style="border-top: 1px solid #ddd">
                <span type="text" name="" disabled>{$CONTACT->getEntity()}</span>
            </td>
        </tr>

        <tr>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Classificação</label>
            </td>
            <td style="border-top: 1px solid #ddd" colspan="2">
                <span type="text" name="" disabled>{$CONTACT->getClassification()}</span>
            </td>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">

            </td>
            <td style="border-top: 1px solid #ddd">
            </td>
        </tr>

        <tr>
            <td class="fieldLabel" style="border-top: 1px solid #ddd">
                <label class="muted pull-right marginRight10px" width="10px;">Descrição</label>
            </td>
            <td style="border-top: 1px solid #ddd" colspan="4">
                <span type="text" name="" disabled>{$CONTACT->getDescription()}</span>
            </td>
        </tr>

        <tr>
            <td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd">
                <label class="muted marginRight10px" width="10px;">Tipo de Veículo</label>
            </td>
            <td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd">
                <label class="muted marginRight10px" width="10px;">Modelo</label>
            </td>
            <td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd">
                <label class="muted marginRight10px" width="10px;">Placa</label>                    
            </td>
            <td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd">
                <label class="muted marginRight10px" width="10px;">Ano</label>
            </td>
            <td class="fieldLabel" style="text-align: center; border-top: 1px solid #ddd">
                <label class="muted marginRight10px" width="10px;">Oportunidade</label>
            </td>
        </tr>
        {foreach key=key item=item from=$VEHICLES}
            <tr>
                <td style="text-align: center;">{$item->getType()}</td>
                <td style="text-align: center;">{$item->getModel()}</td>
                <td style="text-align: center;">{$item->getCarPlate()}</td>
                <td style="text-align: center;">{$item->getYear()}</td>
				<td style="text-align: center;"><a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=Detail&record={$item->getIdPotential()}">{$item->getIdPotential()}</a></td>
            </tr>
        {/foreach}
        <tr>
            <td class="fieldLabel" id="nreg" style="border-top: 1px solid #ddd;text-align: left;" colspan="5">
                <label class="muted pull-right marginRight10px" width="10px;">{$VEHICLES|@count} Veículo(s)</label>
            </td>
        </tr>
    </tbody>
</table>
{/strip}