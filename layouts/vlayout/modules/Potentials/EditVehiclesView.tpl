<input type="hidden" id="updated" name="updated" value="false">
<table style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit">
  <thead>
	<input id="vehicle_source" type="hidden" value="{$VEHICLE_SOURCE}">
    <tr>
      <th class="blockHeader" colspan="4">Informações Veículos  <span id="process"></span></th>
    </tr>
  </thead>
  <tbody>
	<tr>
		<td colspan="2">
		  <input type="radio" id="entity_contacts" name="entity" value="Contacts"> Contato&nbsp&nbsp
		  <input type="radio" id="entity_accounts" name="entity" value="Accounts"> Organização
		</td>
	</tr>
	<tr>
		<!-- Tabela 1-->
		<td>
			<table id="disponiveis" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit">
				<thead>
					<tr>
						<th colspan="5">Disponíveis</th>
					</tr>
					<tr>
					  <th>Tipo de Veículo</th>
					  <th>Modelo</th>
					  <th>Placa</th>
					  <th>Ano</th>
					  <th>Adicionar</th>
					</tr>
				</thead>
				<tbody>
				{foreach key=key item=item from=$VEHICLES_AVAILABLE}
					<input type="hidden" name="vehicles[{$key}][id]" value="{$item->getId()}">
					<tr>
						<td><input type="text" style="width: 60px;" name="vehicles[{$key}][type]" value="{$item->getType()}" readonly="true"/></td>
						<td name="modelo"><input type="text" style="width: 90%;" name="vehicles[{$key}][model]" value="{$item->getModel()}" readonly="true"/></td>
						<td name="placa"><input type="text" style="width: 90%;" name="vehicles[{$key}][car_plate]" value="{$item->getCarPlate()}" readonly="true"/></td>
						<td name="ano"><input type="text" style="width: 50px;" name="vehicles[{$key}][year]" value="{$item->getYear()}" readonly="true"/></td>
						<td style="text-align:center;"><input type="checkbox" name="vehicles[{$key}][checked]"/></td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</td>
		<!-- Tabela 2-->
		<td>
			<table id="vinculados" style="margin-bottom:15px;margin-right:40px;" class="table table-bordered blockContainer showInlineTable equalSplit">
				<thead>
					<tr>
						<th class="centro" colspan="5">Ativos</th>
					</tr>
					<tr>
					  <th>Tipo de Veículo</th>
					  <th>Modelo</th>
					  <th>Placa</th>
					  <th>Ano</th>
					  <th>Remover</th>
					</tr>
				</thead>
				<tbody>
				{foreach key=key item=item from=$VEHICLES}
				<input type="hidden" name="vehicles[{$key}][id]" value="{$item->getId()}">
					<tr>
						<td><input type="text" style="width: 60px;" name="vehicles[{$key}][type]" value="{$item->getType()}" readonly="true"/></td>
						<td name="modelo"><input type="text" style="width: 90%;" name="vehicles[{$key}][model]" value="{$item->getModel()}" readonly="true"/></td>
						<td name="placa"><input type="text" style="width: 90%;" name="vehicles[{$key}][car_plate]" value="{$item->getCarPlate()}" readonly="true"/></td>
						<td name="ano"><input type="text" style="width: 50px;" name="vehicles[{$key}][year]" value="{$item->getYear()}" readonly="true"/></td>
						<td style="text-align:center;"><input type="checkbox" name="vehicles[{$key}][checked]" checked="true"/></td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</td>
	</tr>
	<tr>
		<td id="nregAtivos" colspan="2" class="fieldLabel" placeholder="Nº de ativos vinculados a esta oportunidade">0/0</td>
	</tr>
  </tbody>
</table>
<script>	
	countRow();
		
	var adicionar = document.querySelectorAll("input[type='checkbox']");
	var vinculados = document.querySelector("#vinculados tbody");
	var disponiveis = document.querySelector("#disponiveis tbody");
	var record = $('input:hidden[name=record]').val();

	var adicionarOnClick = function () {
		var escopo = this.checked ? vinculados : disponiveis;
		escopo.appendChild(this.parentNode.parentNode);
		countRow();
		$("#updated").val("true");
	};

	for (var indice in adicionar) {
		adicionar[indice].onclick = adicionarOnClick;
	}

	function countRow() {
		var tamanhoVinculados = $("#vinculados tbody tr").length;
		var tamanhoDisponiveis = $("#disponiveis tbody tr").length;
		$('#nregAtivos').html("Disponíveis: "+tamanhoDisponiveis+"  Ativos: "+tamanhoVinculados);
	}
	
	
	$("#entity_contacts").on("change", function (){
		getVehiclesAvaliables(this.value);
	});
	$("#entity_accounts").on("change", function (){
		getVehiclesAvaliables(this.value);
	});

	function getVehiclesAvaliables(tp_reference_value){
		
		var tp_reference = tp_reference_value;
		var id_reference;
		
		if(tp_reference_value == 'Contacts'){
			id_reference = $("input[type=hidden][name=contact_id]").val();
		} else {	
			id_reference = $("input[type=hidden][name=related_to]").val();
		}
		
		var params = {
			'module': app.getModuleName(),
			'action': "VehiclesAjax",
			'id_reference' : id_reference,
			'tp_reference' : tp_reference,
			'mode': "getVehiclesAvaliables"
		};
		
		var imagePath = app.vimage_path('loadingSmall.gif');
		 $("#nregAtivos").html("<img src='"+imagePath+"' style='margin-left:5px;width:15px;'/>");
		AppConnector.request(params).then(
				function (data) {
					var items = data.result['vehiclesAvaliables'];
					
						$("#disponiveis tbody").empty();
						$("#vinculados tbody").empty();
						$.each(items, function (i, item) {
							    var divContent = $("#disponiveis");
								var inputId = "<input type='hidden' name='vehicles["+i+"][id]' value='"+item.id+"'>";
								var newRow = $("<tr>");
								var cols = "";

								cols += "<td><input type='text' style='width: 60px;' name='vehicles[" + i + "][type]' value='" + item.type + "' readonly='true'/></td>";
								cols += "<td name='modelo'><input type='text' style='width: 90%;' name='vehicles[" + i + "][model]' value='" + item.model + "' readonly='true'/></td>";
								cols += "<td name='placa' ><input type='text' style='width: 90%;' name='vehicles[" + i + "][car_plate]' value='" + item.car_plate + "' readonly='true'/></td>";
								cols += "<td name='ano' ><input type='text' style='width: 50px;' name='vehicles[" + i + "][year]' value='" + item.year + "' readonly='true'/></td>";
								cols += "<td style='text-align:center;'><input type='checkbox' name='vehicles["+i+"][checked]'/></td>";
								
								newRow.append(cols);
								divContent.append(inputId).append(newRow);
								
								adicionar = document.querySelectorAll("input[type='checkbox']");
								for (var indice in adicionar) {
									adicionar[indice].onclick = adicionarOnClick;
								}
						});
						countRow();
				}
		);
	}
	
	window.onload = function(){
		var selection = $("#vehicle_source").val();		
		
		if(selection){
			$("#entity_accounts").prop("disabled", true);
			$("#entity_contacts").prop("disabled", true);
			$("#entity_"+selection.toLowerCase()).prop("checked", true);
		} else {
			$("#entity_accounts").prop("disabled", false);
			$("#entity_contacts").prop("disabled", false);
		}
	}
</script>