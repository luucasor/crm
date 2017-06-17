<table style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit">
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
              {foreach key=key item=item from=$VEHICLES}
                  <tr>
                      <td><input type='text' style='width: 100px;' name='vehicles[{$key}][type]' value='{$item->getType()}' readonly='true'/></td>
                      <td><input type='text' style='width: 200px;' name='vehicles[{$key}][model]' value='{$item->getModel()}' readonly='true'/></td>
                      <td><input type='text' style='width: 100px;' name='vehicles[{$key}][car_plate]' value='{$item->getCarPlate()}' readonly='true'/></td>
                      <td><input type='text' style='width: 100px;' name='vehicles[{$key}][year]' value='{$item->getYear()}' readonly='true'/></td>
                      <td style="width: 5px;">
                        <i class="icon-remove-sign" onclick="RemoveTableRow(this)"/>
                      </td>
                  </tr>
              {/foreach}
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
